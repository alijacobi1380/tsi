<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\App;

use Stichoza\GoogleTranslate\GoogleTranslate;

class Producerchats extends Component
{

    public $text;
    public $reciverid;
    public $recivername;
    public $users;
    public $chats = [];
    public $f;

    public function render()
    {
        // dd(strval($this->text));
        $this->users = DB::table('users')->where('id', '!=', Auth::user()->id)->get();
        // $this->chats = DB::table('chats')->where('senderid', '=', Auth::user()->id)->where('reciverid', '=', $this->reciverid)->orWhere('senderid', '=', $this->reciverid)->where('reciverid', '=', Auth::user()->id)->get()->toArray();
        return view('livewire.producerchats');
    }

    public function setid($id)
    {
        $this->reciverid = $id;
        $d = DB::table('users')->where('id', '=', $this->reciverid)->first();
        $this->recivername = $d->name;
        $this->chats = "";
        $this->chats = DB::table('chats')->where('senderid', '=', Auth::user()->id)->where('reciverid', '=', $this->reciverid)->orWhere('senderid', '=', $this->reciverid)->where('reciverid', '=', Auth::user()->id)->get()->toArray();
    }

    public function showtext($t)
    {
        if (!isset($_SESSION['lang'])) {
            return GoogleTranslate::trans(strval($t), 'fa');
        } elseif ($_SESSION['lang'] == 'fa') {
            return GoogleTranslate::trans(strval($t), 'fa');
        } elseif ($_SESSION['lang'] == 'en') {
            return GoogleTranslate::trans(strval($t), 'en');
        }
    }

    public function showdate($d, $pd)
    {
        if (!isset($_SESSION['lang'])) {
            echo $d;
        } elseif ($_SESSION['lang'] == 'fa') {
            echo $d;
        } elseif ($_SESSION['lang'] == 'en') {
            echo Verta::parse($pd)->datetime()->format('d - m - Y  /  H:i');
        }
    }

    public function addchat()
    {
        if ($this->text != "") {
            $fatxt = GoogleTranslate::trans(strval($this->text), 'fa');
            $entxt = GoogleTranslate::trans(strval($this->text), 'en');
            $this->text = "";
            $date = new Verta;
            $date->timezone('Asia/Tehran');
            $reciver = DB::table('users')->where('id', $this->reciverid)->first();
            DB::table('chats')->insert([
                'senderid' => Auth::user()->id,
                'sendername' => Auth::user()->name,
                'reciverid' => $reciver->id,
                'recivername' => $reciver->name,
                'desc' => $fatxt,
                'endesc' => $entxt,
                'date' => $date->format('j    F    Y  /  H:i'),
                'prdate' => $date
            ]);
            $this->chats = DB::table('chats')->where('senderid', '=', Auth::user()->id)->where('reciverid', '=', $this->reciverid)->orWhere('senderid', '=', $this->reciverid)->where('reciverid', '=', Auth::user()->id)->get()->toArray();
        }
    }

    public function getchats()
    {
        $this->chats = DB::table('chats')->where('senderid', '=', Auth::user()->id)->where('reciverid', '=', $this->reciverid)->orWhere('senderid', '=', $this->reciverid)->where('reciverid', '=', Auth::user()->id)->get()->toArray();
    }
}
