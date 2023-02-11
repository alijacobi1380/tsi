<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;

use Hekmatinasser\Verta\Verta;
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
    }

    public function showticket($id)
    {
        $id = $id;
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


        return redirect()->back()->with('message', __('messages.ticketadded'));
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
        if ($order != null) {
            $factor = DB::table('factors')->where('orderid', '=', $order->id)->where('serviceid', '=', $serviceid)->first();
        } else {
            $factor = null;
        }
        if ($factor && $factor->paystatus != 1) {
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
        return view('producer.service', compact('serviceid', 'order', 'factorstatus', 'factor'));
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
                'when' => $time->format('j    F    Y  /  H:i'),
                'prwhen' => $prtime,
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

        return view('producer.addvitrin', compact('factorstatus'));
    }

    public function addvitrincheck()
    {
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


        if ($request->file('productimage')) {
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
