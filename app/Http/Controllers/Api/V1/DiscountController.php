<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use Illuminate\Http\Request;

use App\Http\Resources\V1\DiscountResource;
use App\Http\Resources\V1\DiscountCollection;
use App\Http\Requests\V1\StoreDiscountRequest;
use App\Http\Requests\V1\UpdateDiscountRequest;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return (new DiscountCollection(Discount::all()))
        ->additional([
            'msg'=>'Discount successful listed',
            'Error'=>0,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiscountRequest  $request)
    {
        return (new DiscountResource(Discount::create($request->all())))
        ->additional([
            'msg'=>'Discount successful stored',
            'Error'=>0,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(Discount $discount)
    {
        return (new DiscountResource($discount))
        ->additional([
            'msg'=>'Resource Discount successful',
            'Error'=>0,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiscountRequest  $request, Discount $discount)
    {
        $discount->update($request->all());
        return (new DiscountResource($discount))
        ->additional([
            'msg'=>'Discount successful Updated',
            'Error'=>0,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discount $discount)
    {
        $discount->delete();
        return (new DiscountResource($discount))
        ->additional([
            'msg'=>'Discount successful deleted',
            'Error'=>0,
        ]);
    }
}
