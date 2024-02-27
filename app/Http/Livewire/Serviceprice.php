<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Serviceprice extends Component
{
    public $price;
    public function mount($order)
    {
        // dd($order);
    }

    public function render()
    {
        return view('livewire.serviceprice');
    }
}
