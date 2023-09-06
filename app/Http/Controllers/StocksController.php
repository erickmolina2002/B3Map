<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class StocksController extends Controller
{
    public function index(Request $request): View
    {
        $stocks =  [
            "BBSE3" => 30.34,
            "KLBN11" => 22.34,
            "BBAS3" => 46.6,
        ];
        return view('stocks.index')->with("stocks",$stocks);
    }

    public function add(): View
    {
        return view('stocks.add');
    }
}
