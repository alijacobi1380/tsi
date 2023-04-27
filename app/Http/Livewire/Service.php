<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Hekmatinasser\Verta\Verta;

use SoapClient;

class Service extends Component
{
    public $serviceid;
    public $check = 0;
    public $phonenumber;
    public $smsinputcheck;
    public $inputrandomnumber;
    public $randomnumber = 0;
    public $time = 30;
    public $error = false;

    public function mount($id)
    {
        $this->serviceid = $id;
    }

    public function render()
    {
        if ($this->serviceid < 0 || $this->serviceid > 6) {
            $this->serviceid = 1;
        }
        return view('livewire.service');
    }

    public function time()
    {
        if ($this->time > 0) {
            $this->time = $this->time - 1;
        }
    }

    public function addphonenumber()
    {
        $this->check = 1;
    }

    public function sendsms()
    {
        $this->check = 2;
        $this->randomnumber = rand(1000, 9999);
        $client = new SoapClient("http://ippanel.com/class/sms/wsdlservice/server.php?wsdl");
        $user = "09221314764";
        $pass = "Modir47@64";
        $fromNum = "+9890000145";
        $toNum = array("$this->phonenumber");
        $pattern_code = "fb6wwhvkgq";
        $input_data = array("date" => $this->randomnumber);

        $client->sendPatternSms($fromNum, $toNum, $user, $pass, $pattern_code, $input_data);
        // dd($this->check);
    }

    public function sendsmsagan()
    {
        $this->time = 30;
        $this->error = false;
        $this->randomnumber = rand(1000, 9999);
        $client = new SoapClient("http://ippanel.com/class/sms/wsdlservice/server.php?wsdl");
        $user = "09221314764";
        $pass = "Modir47@64";
        $fromNum = "+9810004223";
        $toNum = array("$this->phonenumber");
        $pattern_code = "fb6wwhvkgq";
        $input_data = array("date" => $this->randomnumber);

        $client->sendPatternSms($fromNum, $toNum, $user, $pass, $pattern_code, $input_data);
        // dd($this->check);
    }

    public function verifyorder()
    {
        // if ($this->inputrandomnumber == $this->randomnumber) {
            $servicename = "";
            switch ($this->serviceid) {
                case '1':
                    $servicename = 'ویترین بین الملل';
                    break;
                case '2':
                    $servicename = 'رایزن تجاری و بازاریاب اختصاصی بین الملل';
                    break;
                case '3':
                    $servicename = 'برندینگ، شبکه های اجتماعی و محتوای دیجیتال';
                    break;
                case '4':
                    $servicename = 'حمل بار بین الملل';
                    break;
                case '5':
                    $servicename = 'تدوین استراتژی بازار';
                    break;
                case '6':
                    $servicename = 'سرویس توسعه سامانه و نرم فزار ';
                    break;
            }

            $date = new Verta;
            $date->timezone = 'Asia/Tehran';
            DB::table('orders')->insert([
                'servicename' => $servicename,
                'serviceid' => $this->serviceid,
                'username' => Auth::user()->name,
                'userid' => Auth::user()->id,
                'date' => $date->format('j    F    Y  /  H:i')
            ]);
            $this->check = 3;
        // } else {
            // $this->error = true;
        // }
    }
}
