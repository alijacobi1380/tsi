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

    public function showname($name)
    {
        if (!isset($_SESSION['lang'])) {
            echo GoogleTranslate::trans(strval($name), 'fa');
        } elseif ($_SESSION['lang'] == 'fa') {
            echo GoogleTranslate::trans(strval($name), 'fa');
        } elseif ($_SESSION['lang'] == 'en') {
            echo GoogleTranslate::trans(strval($name), 'en');
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

    public function payfactor()
    {

        $factor = DB::table('factors')->where('userid', '=', Auth::user()->id)->orderBy('id', 'DESC')->first();

        if ($factor != null) {
            $v1 = new Verta();
            $v2 = Verta::parse($factor->prwhen);
            if ($v1->diffDays($v2) > 0) {
                return redirect()->route('producer.dashboard');
            } else {
                return view('producer.payfactor');
            }
        } else {
            return view('producer.payfactor');
        }
    }

    public function paygo()
    {
        return Payment::purchase(
            (new Invoice)->amount(500000),
            function ($driver, $transactionId) {
                $_SESSION['transid'] = $transactionId;
            }
        )->pay()->render();
    }

    public function verifypay()
    {
        try {
            $receipt = Payment::amount(500000)->transactionId($_SESSION['transid'])->verify();

            $prdate = new Verta;
            $date = new Verta;
            $date->timezone = 'Asia/Tehran';
            $prtime = new Verta;
            $prtime->addYear(1);
            $time = new Verta;
            $time->timezone = 'Asia/Tehran';
            $time->addYear(1);
            // You can show payment referenceId to the user.
            DB::table('factors')->insert([
                'transid' => $_SESSION['transid'],
                'username' => Auth::user()->name,
                'userid' => Auth::user()->id,
                'price' => 500000,
                'when' => $time->format('j    F    Y  /  H:i'),
                'prwhen' => $prtime,
                'date' => $date->format('j    F    Y  /  H:i'),
            ]);
            $_SESSION['transid'] = "";
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
        $products = DB::table('products')->where('userid', '=', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('producer.getproducts', compact('products'));
    }

    public function addproduct()
    {
        $categorys = DB::table('categorys')->where('userid', '=', Auth::user()->id)->get();
        return view('producer.addproduct', compact('categorys'));
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
            $message = [
                'productname.required' => __('messages.productnameerror'),
                'productcategory.required' => __('messages.productcategoryerror'),
                'productdesc.required' => __('messages.productdescerror'),
                'productimage.required' => __('messages.productimageerror'),
            ];
            $val = $request->validate([
                'productname' => 'required',
                'productcategory' => 'required',
                'productdesc' => 'required',
                'productimage' => 'required',
            ], $message);
        } else {
            App::setLocale('en');
            $message = [
                'productname.required' => __('messages.productnameerror'),
                'productcategory.required' => __('messages.productcategoryerror'),
                'productdesc.required' => __('messages.productdescerror'),
                'productimage.required' => __('messages.productimageerror'),
            ];
            $val = $request->validate([
                'productname' => 'required',
                'productcategory' => 'required',
                'productdesc' => 'required',
                'productimage' => 'required',
            ], $message);
        }


        $filename = sha1(time());
        $file = $request->file('productimage');
        $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $file->move('productimages', $filename . "." . $extension);

        $category = DB::table('categorys')->where('id', '=', $request->productcategory)->first();

        DB::table('products')->insert([
            'title' => $request->productname,
            'userid' => Auth::user()->id,
            'username' => Auth::user()->name,
            'categoryid' => $request->productcategory,
            'categoryname' => $category->title,
            'desc' => $request->productdesc,
            'image' => $filename . "." . $extension,
        ]);
        if ($_SESSION['lang'] == 'fa') {
            App::setLocale('fa');
            return redirect()->back()->with('message', __('messages.productadded'));
        } else {
            App::setLocale('en');
            return redirect()->back()->with('message', __('messages.productadded'));
        }
    }
}
