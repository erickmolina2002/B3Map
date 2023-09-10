<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class StocksController extends Controller
{
    public function index(Request $request): View
    {
        $stocks = Stock::all();
        return view('stocks.index')->with("stocks",$stocks);
    }

    public function add(): View
    {
        return view('stocks.add');
    }

    public function store(Request $request): Redirector|Application|RedirectResponse
    {
        Stock::create($request->all());
        return redirect(route('stocks.index'));
    }
}
