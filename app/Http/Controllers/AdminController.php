<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\Auth;

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
