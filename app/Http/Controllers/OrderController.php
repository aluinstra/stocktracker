<?php

namespace App\Http\Controllers;

use App\Enums\TradingExchange;
use App\Http\Resources\OrderResource;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrderResource::collection(Order::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trading_exchange = TradingExchange::fromKey($request->trading_exchange);

        dd($trading_exchange);

        $validated = $request->validate([
            'stock_id' => ['required', 'min:1'],
            'trading_exchange' => ['required'],
            'stock_amount' => ['required', 'min:1'],
            'total_price' => ['required', 'min:2'],
            'trading_fee' => ['required', 'min:2'],
            'execution_date' => ['required']
        ]);

        $validated['trading_exchange'] = $trading_exchange;

        Order::create($validated);

        return OrderResource::collection(Order::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $trading_exchange = TradingExchange::fromKey($request->trading_exchange);

        $validated = $request->validate([
            'stock_id' => ['required', 'min:1'],
            'trading_exchange' => ['required'],
            'stock_amount' => ['required', 'min:1'],
            'total_price' => ['required', 'min:2'],
            'trading_fee' => ['required', 'min:2'],
            'execution_date' => ['required']
        ]);

        $validated['trading_exchange'] = $trading_exchange;

        $order->update($validated);

        return OrderResource::collection(Order::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return 204;
    }
}
