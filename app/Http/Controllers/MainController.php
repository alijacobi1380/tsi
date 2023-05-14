<?php

namespace App\Http\Controllers;

use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $product = DB::table('products')->where('publish', '=', 2)->where('id', '=', $id)->first();
        $products = DB::table('products')->where('publish', '=', 2)->where('categoryid', '=', $product->categoryid)->where('id', '!=', $product->id)->orderBy('id', 'DESC')->limit(7)->get();
        return view('showproduct', compact('product', 'products'));
    }

    public function showvitrin($id)
    {
        $vitrin = DB::table('vitrins')->where('status', '=', 1)->where('userid', '=', $id)->first();
        if (isset($vitrin) && $vitrin->status == 1) {
            $products = DB::table('products')->where('publish', '=', 2)->where('userid', '=', $vitrin->userid)->orderBy('id', 'DESC')->limit(8)->get();
            return view('vitrin', compact('vitrin', 'products'));
        } else {
            return redirect()->route('index');
        }
    }

    public function searchproduct(Request $request)
    {
        $products = DB::table('products')->where('publish', '=', 2)->where('title', 'LIKE', '*' . $request->name . '*')->orderBy('id', 'DESC')->get();
        $categorys = DB::table('categorys')->orderBy('id', 'DESC')->get();
        $txt = $request->name;
        return view('products', compact('products', 'categorys', 'txt'));
    }

    public function productscategory($id)
    {
        $products = DB::table('products')->where('publish', '=', 2)->orderBy('id', 'DESC')->where('categoryid', '=', $id)->get();
        $categorys = DB::table('categorys')->orderBy('id', 'DESC')->get();
        return view('products', compact('products', 'categorys'));
    }

    public function productsuser($id)
    {
        $products = DB::table('products')->where('publish', '=', 2)->orderBy('id', 'DESC')->where('userid', '=', $id)->get();
        $categorys = DB::table('categorys')->orderBy('id', 'DESC')->get();
        return view('products', compact('products', 'categorys'));
    }

    public function supplier()
    {
        $vitrins = DB::table('vitrins')->where('status', '=', 1)->inRandomOrder()->limit(3)->get();
        // $category1 = DB::table('categorys')->where('subcat', '=', 0)->orderBy('id', 'DESC')->first();
        // $category2 = DB::table('categorys')->where('subcat', '>=', $category1->id)->orderBy('id', 'DESC')->first();
        // $category3 = DB::table('categorys')->where('subcat', '>=', $category2->id)->orderBy('id', 'DESC')->first();
        // $category4 = DB::table('categorys')->where('subcat', '>=', $category3->id)->orderBy('id', 'DESC')->first();
        // $category5 = DB::table('categorys')->where('subcat', '>=', $category4->id)->orderBy('id', 'DESC')->first();

        $categorys = DB::table('categorys')->where('subcat', '=', 0)->orderBy('id', 'DESC')->limit(5)->get()->toArray();
        // dd($categorys[0]['title']);
        return view('supplier', compact('vitrins', 'categorys'));
    }

    public function suppliercat($id)
    {
        $vitrins = DB::table('vitrins')->where('status', '=', 1)->where('productcat', '=', $id)->get();
        $categorys = DB::table('categorys')->orderBy('id', 'DESC')->get();
        return view('suppliercat', compact('vitrins', 'categorys'));
    }

    public function register()
    {
        return view('register');
    }

    public function registercheck(Request $request)
    {
        $message = [
            'email.required' => 'لطفا ایمیل را خود را وارد نمایید',
            'email.unique' => 'این ایمیل قبلا استفاده شده است',
            'password.required' => 'لطفا رمز عبور را خود را وارد نمایید',
            // 'titleen.required' => __('messages.adaddnofifenglisherror'),
        ];
        $val = $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required',
            // 'titleen' => 'required',
        ], $message);



        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);
        return redirect()->route('home');
    }

    public function login()
    {
        return view('login');
    }

    public function logincheck(Request $request)
    {
        $message = [
            'email.required' => 'لطفا ایمیل را خود را وارد نمایید',
            'password.required' => 'لطفا رمز عبور را خود را وارد نمایید',
            // 'titleen.required' => __('messages.adaddnofifenglisherror'),
        ];
        $val = $request->validate([
            'email' => 'required',
            'password' => 'required',
            // 'titleen' => 'required',
        ], $message);



        $user = DB::table('users')->where('email', '=', $request->email)->first();
        if (isset($user) && Hash::check($request->password, $user->password)) {
            Auth::loginUsingId($user->id);
            return redirect()->route('home');
        } else {
            return redirect()->back()->with('message', 'چنین کاربری یافت نشد');
        }
    }

    public function products()
    {
        $products = DB::table('products')->where('publish', '=', 2)->orderBy('id', 'DESC')->get();
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
