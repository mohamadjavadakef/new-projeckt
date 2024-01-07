<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.market.payment.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function online()
    {
        return view('admin.market.payment.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function offline()
    {
        return view('admin.market.payment.index');
    }

    /**
     * Display the specified resource.
     */
    public function attendance()
    {
        return view('admin.market.payment.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function confirm()
    {
        return view('admin.market.payment.index');
    }

}
