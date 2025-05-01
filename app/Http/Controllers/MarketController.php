<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function pay(Request $request)
    {
        return view('market.pay');
    }
}
