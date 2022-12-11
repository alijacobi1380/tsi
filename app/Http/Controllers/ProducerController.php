<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProducerController extends Controller
{
    public function getproduct()
    {
        return view('producer.getproducts');
    }
}
