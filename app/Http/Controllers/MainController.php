<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{


    public function __construct()
    {
        $categorys = DB::table('categorys')->get();
        $products = DB::table('products')->where('publish', '=', 2)->get();
        view()->share('categorys', $categorys);
        view()->share('products', $products);
    }

    public function index()
    {
        $indexcategorys = DB::table('categorys')->where('subcat', '=', 0)->limit(12)->get();
        $lastproducts = DB::table('products')->where('publish', '=', 2)->orderBy('id', 'DESC')->limit(9)->get();
        return view('index', compact('indexcategorys', 'lastproducts'));
    }

    public function showproduct($id)
    {
        $product = DB::table('products')->where('id', '=', $id)->first();
        $products = DB::table('products')->where('categoryid', '=', $product->categoryid)->where('id', '!=', $product->id)->orderBy('id', 'DESC')->limit(7)->get();
        return view('showproduct', compact('product', 'products'));
    }

    public function showvitrin($id)
    {
        $vitrin = DB::table('vitrins')->where('userid', '=', $id)->first();
        if (isset($vitrin) && $vitrin->status == 1) {
            $products = DB::table('products')->where('userid', '=', $vitrin->userid)->orderBy('id', 'DESC')->limit(8)->get();
            return view('vitrin', compact('vitrin', 'products'));
        } else {
            return redirect()->route('index');
        }
    }

    public function productscategory($id)
    {
        $products = DB::table('products')->orderBy('id', 'DESC')->where('categoryid', '=', $id)->get();
        $categorys = DB::table('categorys')->orderBy('id', 'DESC')->get();
        return view('products', compact('products', 'categorys'));
    }

    public function productsuser($id)
    {
        $products = DB::table('products')->orderBy('id', 'DESC')->where('userid', '=', $id)->get();
        $categorys = DB::table('categorys')->orderBy('id', 'DESC')->get();
        return view('products', compact('products', 'categorys'));
    }

    public function products()
    {
        $products = DB::table('products')->orderBy('id', 'DESC')->get();
        $categorys = DB::table('categorys')->orderBy('id', 'DESC')->get();
        return view('products', compact('products', 'categorys'));
    }

    public function services()
    {
        return view('service');
    }
    public function terms()
    {
        return view('terms');
    }
    public function aboutus()
    {
        return view('aboutus');
    }
    public function contactus()
    {
        return view('contactus');
    }
}
