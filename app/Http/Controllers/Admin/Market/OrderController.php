<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function newOrders()
    {
        return view('admin.market.order.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function sending()
    {
        return view('admin.market.order.index');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function unpaind()
    {
        return view('admin.market.order.index');

    }

    /**
     * Display the specified resource.
     */
    public function canceled()
    {
        return view('admin.market.order.index');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function all()
    {
        return view('admin.market.order.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function returned()
    {
        return view('admin.market.order.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function show()
    {
        return view('admin.market.order.index');

    }
    /**
     * Remove the specified resource from storage.
     */
    public function chengeSendStatus()
    {
        return view('admin.market.order.index');

    }
    public function chengeOrderStatus()
    {
        return view('admin.market.order.index');

    }
    public function cancelOrder()
    {
        return view('admin.market.order.index');

    }
}
