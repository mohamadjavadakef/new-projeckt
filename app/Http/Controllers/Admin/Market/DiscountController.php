<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function copan()
    {
        return view('admin.market.discount.copan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function copanCreate()
    {
        return view('admin.market.discount.copan-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function commonDiscount()
    {
        return view('admin.market.discount.common');
    }

    /**
     * Display the specified resource.
     */
    public function commonDiscountCreate()
    {
        return view('admin.market.discount.common-create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function amazingSale()
    {
        return view('admin.market.discount.amazing');
    }

    /**
     * Update the specified resource in storage.
     */
    public function amazingSaleCreate()
    {
        return view('admin.market.discount.amazing-create');
    }
}
