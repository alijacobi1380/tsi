<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\Auth;
use File;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function __construct()
    {
        if (!isset($_SESSION['lang'])) {
            App::setLocale('fa');
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
        $products = DB::table('products')->count();
        $users = DB::table('users')->count();
        $tickets = DB::table('tickets')->where('tid', '=', 0)->count();
        $factors = DB::table('factors')->count();
        $vitrins = DB::table('vitrins')->count();
        $orders = DB::table('orders')->count();
        return view('admin.dashboard', compact('products', 'users', 'tickets', 'factors', 'vitrins', 'orders'));
    }

    public function notfications()
    {
        $notfications = DB::table('notfications')->get();
        return view('admin.notfications', compact('notfications'));
    }

    public function deletenotfication($id)
    {
        DB::table('notfications')->where('id', '=', $id)->delete();
        return back();
    }

    public function addnotif()
    {
        return view('admin.addnotif');
    }

    public function products()
    {
        $products = DB::table('products')->get();
        return view('admin.products', compact('products'));
    }

    public function changeproductstatus($id, $status)
    {
        DB::table('products')->where('id', '=', $id)->update([
            'publish' => $status
        ]);
        return back();
    }

    public function editproduct($id)
    {
        $product = DB::table('products')->where('id', '=', $id)->first();
        $categorys = DB::table('categorys')->get();
        return view('admin.editproduct', compact('product', 'categorys'));
    }

    public function editproductcheck($id, Request $request)
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
            $pr = DB::table('products')->where('id', '=', $id)->first();

            if (file_exists(public_path('productimages/' . $pr->image))) {
                unlink('productimages/' . $pr->image);
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

    public function addnotifcheck(Request $request)
    {
        $message = [
            'title.required' => __('messages.adaddnofiffarsierror'),
            'titleen.required' => __('messages.adaddnofifenglisherror'),
        ];
        $val = $request->validate([
            'title' => 'required',
            'titleen' => 'required',
        ], $message);


        DB::table('notfications')->insert([
            'title' => $request->title,
            'titleen' => $request->titleen,
        ]);

        return redirect()->back()->with('message', __('messages.adnotifadded'));
    }

    public function vitrins()
    {
        $vitrins = DB::table('vitrins')->orderBy('id', 'DESC')->get();
        return view('admin.vitrins', compact('vitrins'));
    }

    public function changevitrinstatus($id, $status)
    {
        DB::table('vitrins')->where('id', '=', $id)->update([
            'status' => $status
        ]);
        return back();
    }

    public function editvitrin($id)
    {
        $vitrin = DB::table('vitrins')->where('id', '=', $id)->first();
        return view('admin.addvitrin', compact('vitrin'));
    }

    public function editvitrincheck($id, Request $request)
    {

        $arr = [
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

        if (!$request->taeed) {
            $arr['taeed'] = 0;
        } else {
            $arr['taeed'] = 1;
        }
        if (!$request->danesh) {
            $arr['danesh'] = 0;
        } else {
            $arr['danesh'] = 1;
        }
        if (!$request->konsers) {
            $arr['konsers'] = 0;
        } else {
            $arr['konsers'] = 1;
        }
        if (!$request->esalat) {
            $arr['esalat'] = 0;
        } else {
            $arr['esalat'] = 1;
        }

        $random = rand(1, 1000);
        $vt = DB::table('vitrins')->where('id', '=', $id)->first();


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


        DB::table('vitrins')->where('id', '=', $id)->update($arr);

        return redirect()->back()->with('message', __('messages.vitrinadded'));
    }

    public function users()
    {
        $users = DB::table('users')->orderBy('id', 'DESC')->get();
        return view('admin.users', compact('users'));
    }

    public function edituser($id)
    {
        $user = DB::table('users')->where('id', '=', $id)->first();
        return view('admin.edituser', compact('user'));
    }

    public function editusercheck($id, Request $request)
    {
        $message = [
            'password.required' => __('messages.adedituserpassworderror'),
            'password.confirmed' => __('messages.adedituserpassworderrorconfmin'),
            'password_confirmation.required' => __('messages.adedituserpassworderrorconf'),
            'password.min' => __('messages.adedituserpassworderrormin'),
        ];
        $val = $request->validate([
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required',
        ], $message);

        DB::table('users')->where('id', '=', $id)->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('message', __('messages.adedituserok'));
    }

    public function deleteuser($id)
    {
        $vt = DB::table('vitrins')->where('userid', '=', $id)->first();
        if ($vt) {
            $this->deleteimagevitrin($vt->logo, 1);
            $this->deleteimagevitrin($vt->baner, 1);
            $this->deleteimagevitrin($vt->cert1, 1);
            $this->deleteimagevitrin($vt->cert2, 1);
            $this->deleteimagevitrin($vt->cert3, 1);
            $this->deleteimagevitrin($vt->cert4, 1);
            $this->deleteimagevitrin($vt->cert5, 1);
            $this->deleteimagevitrin($vt->cert1en, 1);
            $this->deleteimagevitrin($vt->cert2en, 1);
            $this->deleteimagevitrin($vt->cert3en, 1);
            $this->deleteimagevitrin($vt->cert4en, 1);
            $this->deleteimagevitrin($vt->cert5en, 1);
            DB::table('vitrins')->where('userid', '=', $id)->delete();
        }


        $products = DB::table('products')->where('userid', '=', $id)->get();
        if ($products) {
            foreach ($products as $product) {
                $this->deleteimagevitrin($product->image, 2);
                DB::table('products')->where('id', '=', $product->id)->delete();
            }
        }

        $tickets = DB::table('tickets')->where('senderid', '=', $id)->get();
        if ($tickets) {
            foreach ($tickets as $ticket) {
                $this->deleteimagevitrin($ticket->file, 3);
                DB::table('tickets')->where('id', '=', $ticket->id)->delete();
            }
        }

        DB::table('factors')->where('userid', '=', $id)->delete();
        DB::table('orders')->where('userid', '=', $id)->delete();
        DB::table('users')->where('id', '=', $id)->delete();

        return back();
    }

    public function deleteimagevitrin($file, $id)
    {
        if ($file != null && $id == 1) {
            if (file_exists(public_path('vitrinimg/' . $file))) {
                unlink('vitrinimg/' . $file);
            }
        } elseif ($file != null && $id == 2) {
            if (file_exists(public_path('productimages/' . $file))) {
                unlink('productimages/' . $file);
            }
        } elseif ($file != null && $id == 3) {
            if (file_exists(public_path('ticketsfile/' . $file))) {
                unlink('ticketsfile/' . $file);
            }
        }
    }

    public function addfactor(Request $request, $id, $userid, $username, $serviceid)
    {
        $prdate = new Verta;
        $date = new Verta;
        $date->timezone = 'Asia/Tehran';
        $prtime = new Verta;
        $prtime->addDays($request->day);
        $time = new Verta;
        $time->timezone = 'Asia/Tehran';
        $time->addDay($request->day);
        // You can show payment referenceId to the user.
        DB::table('orders')->where('id', '=', $id)->update([
            'paystatus' => 1,
        ]);
        DB::table('factors')->insert([
            'transid' => 0,
            'paystatus' => 1,
            'orderid' => $id,
            'serviceid' => $serviceid,
            'username' => $username,
            'userid' => $userid,
            'price' => $request->price,
            'when' => $time->format('j    F    Y  /  H:i'),
            'prwhen' => $prtime,
            'date' => $date->format('j    F    Y  /  H:i'),
            'prdate' => $prdate,
        ]);
        return back();
    }

    public function orders()
    {
        $orders = DB::table('orders')->orderBy('id', 'DESC')->get();
        return view('admin.orders', compact('orders'));
    }
}
