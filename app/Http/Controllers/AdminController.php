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


    public function addserviceprice(Request $request, $id)
    {
        dd($id);
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

    public function addfactor(Request $request, $id, $userid, $username, $serviceid)
    {
        $prdate = new Verta;
        $date = new Verta;
        $date->timezone = 'Asia/Tehran';
        $prtime = new Verta;
        $prtime->addYear(1);
        $time = new Verta;
        $time->timezone = 'Asia/Tehran';
        $time->addYear(1);
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
