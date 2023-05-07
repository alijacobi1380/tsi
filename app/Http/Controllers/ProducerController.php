<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;

use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Stichoza\GoogleTranslate\GoogleTranslate;

class ProducerController extends Controller
{

    public function __construct()
    {
        if (!isset($_SESSION['lang'])) {
            $_SESSION['lang'] = 'fa';
        }
    }

    public function checklang()
    {
        if (!isset($_SESSION['lang'])) {
            App::setLocale('fa');
        } elseif ($_SESSION['lang'] == 'fa') {
            App::setLocale('fa');
        } elseif ($_SESSION['lang'] == 'en') {
            App::setLocale('en');
        }
    }


    public function dashboard()
    {
        $products = DB::table('products')->where('userid', '=', Auth::user()->id)->count();
        $tickets = DB::table('tickets')->where('senderid', '=', Auth::user()->id)->distinct('tid')->count();
        $factors = DB::table('factors')->where('userid', '=', Auth::user()->id)->count();
        $notfications = DB::table('notfications')->get();
        return view('producer.dashboard', compact('products', 'tickets', 'factors', 'notfications'));
    }

    public function showticket($id)
    {
        $ticket = DB::table('tickets')->where('id', '=', $id)->first();
        $tanwsers = DB::table('tickets')->where('tid', '=', $id)->orderBy('id', 'DESC')->get();
        return view('producer.showticket', compact('ticket', 'tanwsers', 'id'));
    }

    public function tickets()
    {
        $tickets = DB::table('tickets')->where('senderid', '=', Auth::user()->id)->where('tid', '=', 0)->orderBy('id', 'DESC')->get();
        return view('producer.tickets', compact('tickets'));
    }

    public function addticket()
    {
        return view('producer.addticket');
    }

    public function addticketcheckid(Request $request, $id)
    {
        $message = [
            'desc.required' => __('messages.ticketdescerror'),
        ];
        $val = $request->validate([
            'desc' => 'required',
        ], $message);



        $prdate = new Verta;
        $date = new Verta;
        $date->timezone = 'Asia/Tehran';

        if ($request->file('file')) {
            $filename = sha1(time());
            $file = $request->file('file');
            $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
            $file->move('ticketsfile', $filename . "." . $extension);


            DB::table('tickets')->insert([
                'title' => '',
                'tid' => $id,
                'senderid' => Auth::user()->id,
                'sendername' => Auth::user()->name,
                'force' => 0,
                'category' => 0,
                'desc' => $request->desc,
                'file' => $filename . "." . $extension,
                'date' => $date->format('j    F    Y  /  H:i'),
                'prdate' => $prdate->toCarbon(),
            ]);
        } else {

            DB::table('tickets')->insert([
                'title' => '',
                'tid' => $id,
                'senderid' => Auth::user()->id,
                'sendername' => Auth::user()->name,
                'force' => 0,
                'category' => 0,
                'desc' => $request->desc,
                'date' => $date->format('j    F    Y  /  H:i'),
                'prdate' => $prdate->toCarbon(),
            ]);
        }

        DB::table('tickets')->where('id', '=', $id)->update([
            'status' => 1
        ]);

        return redirect()->back()->with('message', __('messages.ticketadded'));
    }

    public function editprofile()
    {
        return view('producer.profile');
    }

    public function editprofilecheck(Request $request)
    {

        $message = [
            'currentpassword.required' => __('messages.adeditusercureentpassworderror'),
            'password.required' => __('messages.adedituserpassworderror'),
            'password.confirmed' => __('messages.adedituserpassworderrorconfmin'),
            'password_confirmation.required' => __('messages.adedituserpassworderrorconf'),
            'password.min' => __('messages.adedituserpassworderrormin'),
        ];
        $val = $request->validate([
            'currentpassword' => 'required',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required',
        ], $message);


        $user = DB::table('users')->where('id', '=', Auth::user()->id)->first();
        if (Hash::check($request->currentpassword, $user->password)) {
            DB::table('users')->where('id', '=', Auth::user()->id)->update([
                'password' => Hash::make($request->password),
            ]);
            return redirect()->back()->with('message', __('messages.adedituserok'));
        } else {
            return redirect()->back()->with('error', __('messages.adedituserno'));
        }
    }


    public function addticketcheck(Request $request)
    {
        $message = [
            'title.required' => __('messages.tickettitleerror'),
            'desc.required' => __('messages.ticketdescerror'),
        ];
        $val = $request->validate([
            'title' => 'required',
            'desc' => 'required',
        ], $message);




        $prdate = new Verta;
        $date = new Verta;
        $date->timezone = 'Asia/Tehran';

        if ($request->file('file')) {
            $filename = sha1(time());
            $file = $request->file('file');
            $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
            $file->move('ticketsfile', $filename . "." . $extension);

            DB::table('tickets')->insert([
                'title' => $request->title,
                'senderid' => Auth::user()->id,
                'sendername' => Auth::user()->name,
                'force' => $request->force,
                'category' => $request->category,
                'desc' => $request->desc,
                'file' => $filename . "." . $extension,
                'date' => $date->format('j    F    Y  /  H:i'),
                'prdate' => $prdate->toCarbon(),
            ]);
        } else {

            DB::table('tickets')->insert([
                'title' => $request->title,
                'senderid' => Auth::user()->id,
                'sendername' => Auth::user()->name,
                'force' => $request->force,
                'category' => $request->category,
                'desc' => $request->desc,
                'date' => $date->format('j    F    Y  /  H:i'),
                'prdate' => $prdate->toCarbon(),
            ]);
        }


        return redirect()->back()->with('message', __('messages.ticketadded'));
    }


    public function service($id)
    {
        $serviceid = $id;
        $order = DB::table('orders')->where('userid', '=', Auth::user()->id)->where('serviceid', '=', $serviceid)->orderBy('id', 'DESC')->first();
        $tanwsers = "";
        if ($order != null) {
            $tanwsers = DB::table('servicetickets')->where('sid', '=', $order->id)->orderBy('id', 'DESC')->get();
            $factor = DB::table('factors')->where('orderid', '=', $order->id)->where('serviceid', '=', $serviceid)->first();
        } else {
            $factor = null;
        }
        if ($factor && $factor->paystatus != 1) {
            $v1 = new Verta();
            $v2 = Verta::parse($factor->prwhen);

            if ($v1->diffDays($v2) > 0) {
                $factorstatus = 0;
            } else {
                $factorstatus = 1;
            }
        } else {
            $factorstatus = 2;
        }

        if ($order) {
            $reports = DB::table('reports')->where('serviceid', '=', $order->id)->get();
            return view('producer.service', compact('serviceid', 'order', 'factorstatus', 'factor', 'reports', 'tanwsers'));
        } else {
            return view('producer.service', compact('serviceid', 'order', 'factorstatus', 'factor', 'tanwsers'));
        }
    }

    public function addserviceticketcheck($id, Request $request)
    {
        $message = [
            'desc.required' => __('messages.ticketdescerror'),
        ];
        $val = $request->validate([
            'desc' => 'required',
        ], $message);



        $prdate = new Verta;
        $date = new Verta;
        $date->timezone = 'Asia/Tehran';

        if ($request->file('file')) {
            $filename = sha1(time());
            $file = $request->file('file');
            $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
            $file->move('ticketsfile', $filename . "." . $extension);


            DB::table('servicetickets')->insert([
                'title' => '',
                'sid' => $id,
                'senderid' => Auth::user()->id,
                'sendername' => Auth::user()->name,
                'desc' => $request->desc,
                'file' => $filename . "." . $extension,
                'date' => $date->format('j    F    Y  /  H:i'),
            ]);
        } else {

            DB::table('servicetickets')->insert([
                'title' => '',
                'sid' => $id,
                'senderid' => Auth::user()->id,
                'sendername' => Auth::user()->name,
                'desc' => $request->desc,
                'date' => $date->format('j    F    Y  /  H:i'),
            ]);
        }

        return redirect()->back()->with('message', __('messages.ticketadded'));
    }

    public function questionservice($id)
    {
        $serviceid = $id;
        return view('producer.wservice', compact('serviceid'));
    }

    public function payfactor()
    {

        $factor = DB::table('factors')->where('userid', '=', Auth::user()->id)->orderBy('id', 'DESC')->first();

        if ($factor != null) {
            $v1 = new Verta();
            $v2 = Verta::parse($factor->prwhen);
            if ($v1->diffDays($v2) > 0) {
                return back();
            } else {
                return view('producer.payfactor');
            }
        } else {
            return view('producer.payfactor');
        }
    }

    public function paygo($id)
    {
        $factor = DB::table('factors')->where('id', '=', $id)->first();
        $_SESSION['factorid'] = $id;
        $_SESSION['price'] = $factor->price;
        return Payment::purchase(
            (new Invoice)->amount($factor->price),
            function ($driver, $transactionId) {
                $_SESSION['transid'] = $transactionId;
            }
        )->pay()->render();
    }

    public function verifypay()
    {
        try {
            $receipt = Payment::amount($_SESSION['price'])->transactionId($_SESSION['transid'])->verify();

            $prdate = new Verta;
            $date = new Verta;
            $date->timezone = 'Asia/Tehran';
            $prtime = new Verta;
            $prtime->addYear(1);
            $time = new Verta;
            $time->timezone = 'Asia/Tehran';
            $time->addYear(1);
            // You can show payment referenceId to the user.
            DB::table('factors')->where('id', '=', $_SESSION['factorid'])->update([
                'paystatus' => 2,
                'transid' => $_SESSION['transid'],
                'username' => Auth::user()->name,
                'userid' => Auth::user()->id,
                'price' => $_SESSION['price'],
                'date' => $date->format('j    F    Y  /  H:i'),
                'prdate' => $prdate,
            ]);
            $f = DB::table('factors')->where('id', '=', $_SESSION['factorid'])->first();
            DB::table('orders')->where('id', '=', $f->orderid)->update([
                'paystatus' => 2,
            ]);
            DB::table('products')->where('userid', '=', Auth::user()->id)->where('publish', '=', 0)->update([
                'publish' => 1,
            ]);
            $_SESSION['transid'] = "";
            $_SESSION['factorid'] = "";
            $verifymessage = __('messages.paymentverify');
            return redirect()->route('producer.payments')->with('messageverify', __('messages.paymentverify'))->with('transid', $receipt->getReferenceId());
        } catch (InvalidPaymentException $exception) {
            $verifyerrormessage = $exception->getMessage();
            return redirect()->route('producer.payments')->with('messageerror', __('messages.paymenterror'))->with('messagewhy', $exception->getMessage());
        }
    }

    public function payments()
    {
        $factor = DB::table('factors')->where('userid', '=', Auth::user()->id)->orderBy('id', 'DESC')->first();
        if ($factor != null) {
            $v1 = new Verta();
            $v2 = Verta::parse($factor->prwhen);
            $ekhtelafzaman = $v1->diffDays($v2);
            if ($ekhtelafzaman < 0) {
                $ekhtelafzaman = 0;
            }
        } else {
            $ekhtelafzaman = 'نامشخص';
        }
        $factors = DB::table('factors')->where('userid', '=', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('producer.payments', compact('factors', 'ekhtelafzaman'));
    }

    public function getproduct()
    {
        $factor = DB::table('factors')->where('userid', '=', Auth::user()->id)->orderBy('id', 'DESC')->first();
        if ($factor != null) {
            $v1 = new Verta();
            $v2 = Verta::parse($factor->prwhen);

            if ($v1->diffDays($v2) > 0) {
                $factorstatus = true;
            } else {
                $factorstatus = false;
            }
        } else {
            $factorstatus = false;
        }

        $products = DB::table('products')->where('userid', '=', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('producer.getproducts', compact('products', 'factorstatus'));
    }

    public function addproduct()
    {
        $factor = DB::table('factors')->where('userid', '=', Auth::user()->id)->orderBy('id', 'DESC')->first();
        if ($factor != null) {
            $v1 = new Verta();
            $v2 = Verta::parse($factor->prwhen);

            if ($v1->diffDays($v2) > 0) {
                $factorstatus = true;
            } else {
                $factorstatus = false;
            }
        } else {
            $factorstatus = false;
        }
        $categorys = DB::table('categorys')->get();
        return view('producer.addproduct', compact('categorys', 'factorstatus'));
    }

    public function addvitrin()
    {
        $factor = DB::table('factors')->where('userid', '=', Auth::user()->id)->orderBy('id', 'DESC')->first();
        if ($factor != null) {
            $v1 = new Verta();
            $v2 = Verta::parse($factor->prwhen);

            if ($v1->diffDays($v2) > 0) {
                $factorstatus = true;
            } else {
                $factorstatus = false;
            }
        } else {
            $factorstatus = false;
        }

        $vitrin = DB::table('vitrins')->where('userid', '=', Auth::user()->id)->first();

        return view('producer.addvitrin', compact('factorstatus', 'vitrin'));
    }

    public function addvitrincheck(Request $request)
    {
        $message = [
            'brandname.required' => __('messages.vtcompanynameerror'),
            'phonenumber.required' => __('messages.phonenumbererror1'),
            'phonenumber.digits' => __('messages.phonenumbererror2'),
            'phonenumber.numeric' => __('messages.phonenumbererror3'),
            'desc.required' => __('messages.vtdescerror'),
        ];
        $val = $request->validate([
            'brandname' => 'required',
            'phonenumber' => 'required|digits:11|numeric',
            'desc' => 'required',
        ], $message);

        $vitrin = DB::table('vitrins')->where('userid', '=', Auth::user()->id)->first();

        if ($vitrin) {
            $arr = [
                'userid' => Auth::user()->id,
                'username' => Auth::user()->name,
                'status' => 0,
                'phonenumber' => $request->phonenumber,
                'brandname' => $request->brandname,
                'brandnameen' => $request->brandnameen,
                'desc' => $request->desc,
                'descen' => $request->descen,
                'size' => $request->size,
                'country' => $request->vtcountry,
                'countryen' => $request->vtcountryen,
                'state' => $request->vtstate,
                'stateen' => $request->vtstateen,
                'city' => $request->vtcity,
                'cityen' => $request->vtcityen,
                'prop1' => $request->vtprp1,
                'prop1en' => $request->vtprp1en,
                'prop2' => $request->vtprp2,
                'prop2en' => $request->vtprp2en,
                'prop3' => $request->vtprp3,
                'prop3en' => $request->vtprp3en,
                'prop4' => $request->vtprp4,
                'prop4en' => $request->vtprp4en,
                'prop5' => $request->vtprp5,
                'prop5en' => $request->vtprp5en,
                'aboutus' => $request->aboutus,
                'aboutusen' => $request->aboutusen,
            ];
            $random = rand(1, 1000);
            $vt = DB::table('vitrins')->where('userid', '=', Auth::user()->id)->first();

            if ($request->file('logo')) {
                if (file_exists(public_path('vitrinimg/' . $vt->logo))) {
                    unlink('vitrinimg/' . $vt->logo);
                }
                $filename = sha1(time() + $random++);
                $file = $request->file('logo');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $logo = $filename . '.' . $extension;
                $arr['logo'] = $logo;
            }

            if ($request->file('baner')) {
                if (file_exists(public_path('vitrinimg/' . $vt->baner))) {
                    unlink('vitrinimg/' . $vt->baner);
                }
                $filename = sha1(time() + $random++);
                $file = $request->file('baner');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $baner = $filename . '.' . $extension;
                $arr['baner'] = $baner;
            }

            if ($request->file('vtcert1')) {
                if (file_exists(public_path('vitrinimg/' . $vt->cert1))) {
                    unlink('vitrinimg/' . $vt->cert1);
                }
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert1');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert1 = $filename . '.' . $extension;
                $arr['cert1'] = $vtcert1;
            }

            if ($request->file('vtcert2')) {
                if (file_exists(public_path('vitrinimg/' . $vt->cert2))) {
                    unlink('vitrinimg/' . $vt->cert2);
                }
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert2');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert2 = $filename . '.' . $extension;
                $arr['cert2'] = $vtcert2;
            }


            if ($request->file('vtcert3')) {
                if (file_exists(public_path('vitrinimg/' . $vt->cert3))) {
                    unlink('vitrinimg/' . $vt->cert3);
                }
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert3');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert3 = $filename . '.' . $extension;
                $arr['cert3'] = $vtcert3;
            }


            if ($request->file('vtcert4')) {
                if (file_exists(public_path('vitrinimg/' . $vt->cert4))) {
                    unlink('vitrinimg/' . $vt->cert4);
                }
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert4');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert4 = $filename . '.' . $extension;
                $arr['cert4'] = $vtcert4;
            }
            if ($request->file('vtcert5')) {
                if (file_exists(public_path('vitrinimg/' . $vt->cert5))) {
                    unlink('vitrinimg/' . $vt->cert5);
                }
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert5');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert5 = $filename . '.' . $extension;
                $arr['cert5'] = $vtcert5;
            }


            if ($request->file('vtcert1en')) {
                if (file_exists(public_path('vitrinimg/' . $vt->cert1en))) {
                    unlink('vitrinimg/' . $vt->cert1en);
                }
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert1en');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert1en = $filename . '.' . $extension;
                $arr['cert1en'] = $vtcert1en;
            }

            if ($request->file('vtcert2en')) {
                if (file_exists(public_path('vitrinimg/' . $vt->cert2en))) {
                    unlink('vitrinimg/' . $vt->cert2en);
                }
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert2en');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert2en = $filename . '.' . $extension;
                $arr['cert2en'] = $vtcert2en;
            }


            if ($request->file('vtcert3en')) {
                if (file_exists(public_path('vitrinimg/' . $vt->cert3en))) {
                    unlink('vitrinimg/' . $vt->cert3en);
                }
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert3en');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert3en = $filename . '.' . $extension;
                $arr['cert3en'] = $vtcert3en;
            }


            if ($request->file('vtcert4en')) {
                if (file_exists(public_path('vitrinimg/' . $vt->cert4en))) {
                    unlink('vitrinimg/' . $vt->cert4en);
                }
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert4en');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert4en = $filename . '.' . $extension;
                $arr['cert4en'] = $vtcert4en;
            }
            if ($request->file('vtcert5en')) {
                if (file_exists(public_path('vitrinimg/' . $vt->cert5en))) {
                    unlink('vitrinimg/' . $vt->cert5en);
                }
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert5en');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert5en = $filename . '.' . $extension;
                $arr['cert5en'] = $vtcert5en;
            }


            DB::table('vitrins')->where('userid', '=', Auth::user()->id)->update($arr);

            return redirect()->back()->with('message', __('messages.vitrinadded'));
        } else {

            $arr = [
                'userid' => Auth::user()->id,
                'username' => Auth::user()->name,
                'status' => 0,
                'phonenumber' => $request->phonenumber,
                'brandname' => $request->brandname,
                'brandnameen' => $request->brandnameen,
                'desc' => $request->desc,
                'descen' => $request->descen,
                'size' => $request->size,
                'country' => $request->vtcountry,
                'countryen' => $request->vtcountryen,
                'state' => $request->vtstate,
                'stateen' => $request->vtstateen,
                'city' => $request->vtcity,
                'cityen' => $request->vtcityen,
                'prop1' => $request->vtprp1,
                'prop1en' => $request->vtprp1en,
                'prop2' => $request->vtprp2,
                'prop2en' => $request->vtprp2en,
                'prop3' => $request->vtprp3,
                'prop3en' => $request->vtprp3en,
                'prop4' => $request->vtprp4,
                'prop4en' => $request->vtprp4en,
                'prop5' => $request->vtprp5,
                'prop5en' => $request->vtprp5en,
                'aboutus' => $request->aboutus,
                'aboutusen' => $request->aboutusen,
            ];
            $random = rand(1, 1000);

            if ($request->file('logo')) {
                $filename = sha1(time() + $random++);
                $file = $request->file('logo');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $logo = $filename . '.' . $extension;
                $arr['logo'] = $logo;
            }

            if ($request->file('baner')) {
                $filename = sha1(time() + $random++);
                $file = $request->file('baner');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $baner = $filename . '.' . $extension;
                $arr['baner'] = $baner;
            }

            if ($request->file('vtcert1')) {
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert1');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert1 = $filename . '.' . $extension;
                $arr['cert1'] = $vtcert1;
            }

            if ($request->file('vtcert2')) {
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert2');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert2 = $filename . '.' . $extension;
                $arr['cert2'] = $vtcert2;
            }


            if ($request->file('vtcert3')) {
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert3');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert3 = $filename . '.' . $extension;
                $arr['cert3'] = $vtcert3;
            }


            if ($request->file('vtcert4')) {
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert4');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert4 = $filename . '.' . $extension;
                $arr['cert4'] = $vtcert4;
            }
            if ($request->file('vtcert5')) {
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert5');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert5 = $filename . '.' . $extension;
                $arr['cert5'] = $vtcert5;
            }


            if ($request->file('vtcert1en')) {
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert1en');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert1en = $filename . '.' . $extension;
                $arr['cert1en'] = $vtcert1en;
            }

            if ($request->file('vtcert2en')) {
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert2en');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert2en = $filename . '.' . $extension;
                $arr['cert2en'] = $vtcert2en;
            }


            if ($request->file('vtcert3en')) {
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert3en');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert3en = $filename . '.' . $extension;
                $arr['cert3en'] = $vtcert3en;
            }


            if ($request->file('vtcert4en')) {
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert4en');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert4en = $filename . '.' . $extension;
                $arr['cert4en'] = $vtcert4en;
            }
            if ($request->file('vtcert5en')) {
                $filename = sha1(time() + $random++);
                $file = $request->file('vtcert5en');
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $file->move('vitrinimg', $filename . "." . $extension);
                $vtcert5en = $filename . '.' . $extension;
                $arr['cert5en'] = $vtcert5en;
            }


            DB::table('vitrins')->insert($arr);

            return redirect()->back()->with('message', __('messages.vitrinadded'));
        }
    }

    public function editproduct($id)
    {
        $factor = DB::table('factors')->where('userid', '=', Auth::user()->id)->orderBy('id', 'DESC')->first();
        if ($factor != null) {
            $v1 = new Verta();
            $v2 = Verta::parse($factor->prwhen);

            if ($v1->diffDays($v2) > 0) {
                $factorstatus = true;
            } else {
                $factorstatus = false;
            }
        } else {
            $factorstatus = false;
        }
        $categorys = DB::table('categorys')->get();
        $product = DB::table('products')->where('id', '=', $id)->first();
        return view('producer.editproduct', compact('categorys', 'factorstatus', 'product', 'id'));
    }

    public function deleteproduct($id)
    {
        $n = DB::table('products')->where('id', '=', $id)->first();
        unlink('productimages/' . $n->image);
        DB::table('products')->where('id', '=', $id)->where('userid', '=', Auth::user()->id)->delete();
        return back();
    }

    public function addproductcheck(Request $request)
    {
        if ($_SESSION['lang'] == 'fa') {
            App::setLocale('fa');
        } else {
            App::setLocale('en');
        }

        $message = [
            'productname.required' => __('messages.productnameerror'),
            'productcategory.required' => __('messages.productcategoryerror'),
            'productdesc.required' => __('messages.productdescerror'),
            'productimage.required' => __('messages.productimageerror'),
            'productcolor.required' => __('messages.productcolorerror'),
            'productvazn.required' => __('messages.productvaznerror'),
            'productjens.required' => __('messages.productjenserror'),
            'productpack.required' => __('messages.productpackerror'),
            'productcustom.required' => __('messages.productcustomerror'),
            'productdeliver.required' => __('messages.productdelivererror'),
        ];
        $val = $request->validate([
            'productname' => 'required',
            'productcategory' => 'required',
            'productdesc' => 'required',
            'productimage' => 'required',
            'productcolor' => 'required',
            'productvazn' => 'required',
            'productjens' => 'required',
            'productpack' => 'required',
            'productcustom' => 'required',
            'productdeliver' => 'required',
        ], $message);


        $filename = sha1(time());
        $file = $request->file('productimage');
        $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $file->move('productimages', $filename . "." . $extension);

        $category = DB::table('categorys')->where('id', '=', $request->productcategory)->first();

        $factor = DB::table('factors')->where('userid', '=', Auth::user()->id)->orderBy('id', 'DESC')->first();
        if ($factor != null) {
            $v1 = new Verta();
            $v2 = Verta::parse($factor->prwhen);

            if ($v1->diffDays($v2) > 0) {
                $publish = 1;
            } else {
                $publish = 0;
            }
        } else {
            $publish = 0;
        }


        DB::table('products')->insert([
            'title' => $request->productname,
            'entitle' => $request->enproductname,
            'userid' => Auth::user()->id,
            'username' => Auth::user()->name,
            'categoryid' => $request->productcategory,
            'categoryname' => $category->title,
            'encategoryname' => $category->entitle,
            'desc' => $request->productdesc,
            'endesc' => $request->enproductdesc,
            'publish' => $publish,
            'image' => $filename . "." . $extension,
            'productcolor' => $request->productcolor,
            'productvazn' => $request->productvazn,
            'productjens' => $request->productjens,
            'productpack' => $request->productpack,
            'productcustom' => $request->productcustom,
            'productdeliver' => $request->productdeliver,
            'enproductcolor' => $request->enproductcolor,
            'enproductvazn' => $request->enproductvazn,
            'enproductjens' => $request->enproductjens,
            'enproductpack' => $request->enproductpack,
            'enproductcustom' => $request->enproductcustom,
            'enproductdeliver' => $request->enproductdeliver,
        ]);
        if ($_SESSION['lang'] == 'fa') {
            App::setLocale('fa');
            return redirect()->back()->with('message', __('messages.productadded'));
        } else {
            App::setLocale('en');
            return redirect()->back()->with('message', __('messages.productadded'));
        }
    }

    public function editproductcheck(Request $request, $id)
    {
        if ($_SESSION['lang'] == 'fa') {
            App::setLocale('fa');
        } else {
            App::setLocale('en');
        }

        $message = [
            'productname.required' => __('messages.productnameerror'),
            'productcategory.required' => __('messages.productcategoryerror'),
            'productdesc.required' => __('messages.productdescerror'),
            'productcolor.required' => __('messages.productcolorerror'),
            'productvazn.required' => __('messages.productvaznerror'),
            'productjens.required' => __('messages.productjenserror'),
            'productpack.required' => __('messages.productpackerror'),
            'productcustom.required' => __('messages.productcustomerror'),
            'productdeliver.required' => __('messages.productdelivererror'),
        ];
        $val = $request->validate([
            'productname' => 'required',
            'productcategory' => 'required',
            'productdesc' => 'required',
            'productcolor' => 'required',
            'productvazn' => 'required',
            'productjens' => 'required',
            'productpack' => 'required',
            'productcustom' => 'required',
            'productdeliver' => 'required',
        ], $message);

        $pr = DB::table('products')->where('id', '=', $id)->first();
        if ($request->file('productimage')) {
            if (file_exists(public_path('productimages/' . $this->$pr->image))) {
                unlink('productimages/' . $this->$pr->image);
            }

            $filename = sha1(time());
            $file = $request->file('productimage');
            $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
            $file->move('productimages', $filename . "." . $extension);
            DB::table('products')->where('id', '=', $id)->update([
                'image' => $filename . "." . $extension,
            ]);
        }

        $category = DB::table('categorys')->where('id', '=', $request->productcategory)->first();

        $factor = DB::table('factors')->where('userid', '=', Auth::user()->id)->orderBy('id', 'DESC')->first();
        if ($factor != null) {
            $v1 = new Verta();
            $v2 = Verta::parse($factor->prwhen);

            if ($v1->diffDays($v2) > 0) {
                $publish = 1;
            } else {
                $publish = 0;
            }
        } else {
            $publish = 0;
        }


        DB::table('products')->where('id', '=', $id)->update([
            'title' => $request->productname,
            'entitle' => $request->enproductname,
            'userid' => Auth::user()->id,
            'username' => Auth::user()->name,
            'categoryid' => $request->productcategory,
            'categoryname' => $category->title,
            'encategoryname' => $category->entitle,
            'desc' => $request->productdesc,
            'endesc' => $request->enproductdesc,
            'publish' => $publish,
            'productcolor' => $request->productcolor,
            'productvazn' => $request->productvazn,
            'productjens' => $request->productjens,
            'productpack' => $request->productpack,
            'productcustom' => $request->productcustom,
            'productdeliver' => $request->productdeliver,
            'enproductcolor' => $request->enproductcolor,
            'enproductvazn' => $request->enproductvazn,
            'enproductjens' => $request->enproductjens,
            'enproductpack' => $request->enproductpack,
            'enproductcustom' => $request->enproductcustom,
            'enproductdeliver' => $request->enproductdeliver,
        ]);
        if ($_SESSION['lang'] == 'fa') {
            App::setLocale('fa');
            return redirect()->back()->with('message', __('messages.productaddededit'));
        } else {
            App::setLocale('en');
            return redirect()->back()->with('message', __('messages.productaddededit'));
        }
    }
}
