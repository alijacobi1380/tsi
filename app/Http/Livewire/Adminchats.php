<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\App;

class Adminchats extends Component
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
        $this->users = DB::table('users')->where('id', '!=', Auth::user()->id)->where('rule', '=', '1')->get();
        // $this->chats = DB::table('chats')->where('senderid', '=', Auth::user()->id)->where('reciverid', '=', $this->reciverid)->orWhere('senderid', '=', $this->reciverid)->where('reciverid', '=', Auth::user()->id)->get()->toArray();
        $this->chats = DB::table('chats')->where('senderid', '=', Auth::user()->id)->where('reciverid', '=', $this->reciverid)->orWhere('senderid', '=', $this->reciverid)->where('reciverid', '=', Auth::user()->id)->get()->toArray();

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



    public function addchat()
    {
        if ($this->text != "") {
            $date = new Verta;
            $prdate = new Verta();
            $date->timezone('Asia/Tehran');
            $reciver = DB::table('users')->where('id', $this->reciverid)->first();
            DB::table('chats')->insert([
                'senderid' => Auth::user()->id,
                'sendername' => Auth::user()->name,
                'reciverid' => $reciver->id,
                'recivername' => $reciver->name,
                'desc' => $this->text,
                'date' => $date->format('j    F    Y  /  H:i'),
                'prdate' => $prdate->toCarbon(),
            ]);
            $this->text = "";
        }
        $this->chats = DB::table('chats')->where('senderid', '=', Auth::user()->id)->where('reciverid', '=', $this->reciverid)->orWhere('senderid', '=', $this->reciverid)->where('reciverid', '=', Auth::user()->id)->get()->toArray();
    }

    public function getchats()
    {
        $this->chats = DB::table('chats')->where('senderid', '=', Auth::user()->id)->where('reciverid', '=', $this->reciverid)->orWhere('senderid', '=', $this->reciverid)->where('reciverid', '=', Auth::user()->id)->get()->toArray();
    }
}
