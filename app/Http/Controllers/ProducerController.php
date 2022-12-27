<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProducerController extends Controller
{
    public function checklang()
    {
        if ($_SESSION['lang'] == 'fa') {
            App::setLocale('fa');
        } elseif ($_SESSION['lang'] == 'en') {
            App::setLocale('en');
        }
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

    public function addcategory()
    {
        return view('producer.addcategory');
    }

    public function categorylist()
    {
        $categorys = DB::table('categorys')->where('userid', '=', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('producer.categoryslist', compact('categorys'));
    }

    public function deletecategory($id)
    {
        $category = DB::table('categorys')->where('id', '=', $id)->first();
        if ($category->userid == Auth::user()->id) {
            DB::table('categorys')->where('id', '=', $id)->delete();
        }
        return back();
    }

    public function addcategorycheck(Request $request)
    {
        if ($_SESSION['lang'] == 'fa') {
            App::setLocale('fa');
            $message = [
                'title.required' => __('messages.categorytitleerror'),
            ];
            $val = $request->validate([
                'title' => 'required',
            ], $message);
        } else {
            App::setLocale('en');
            $message = [
                'title.required' => __('messages.categorytitleerror'),
            ];
            $val = $request->validate([
                'title' => 'required',
            ], $message);
        }


        DB::table('categorys')->insert([
            'title' => $request->title,
            'userid' => Auth::user()->id,
            'username' => Auth::user()->name,
        ]);
        if ($_SESSION['lang'] == 'fa') {
            App::setLocale('fa');
            return redirect()->back()->with('message', __('messages.categoryadded'));
        } else {
            App::setLocale('en');
            return redirect()->back()->with('message', __('messages.categoryadded'));
        }
    }
}
