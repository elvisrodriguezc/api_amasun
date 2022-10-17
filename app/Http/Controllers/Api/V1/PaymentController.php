<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

use App\Http\Resources\V1\PaymentResource;
use App\Http\Resources\V1\PaymentCollection;
use App\Http\Requests\V1\StorePaymentRequest;
use App\Http\Requests\V1\UpdatePaymentRequest;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return (new PaymentCollection(Payment::latest()->paginate()))
        ->additional([
            'msg'=>'Payment successful listed',
            'Error'=>0,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Payment::create($request->all());
        return (new PaymentResource(Payment::create($request->all())))
        ->additional([
            'msg'=>'Payment successful stored',
            'Error'=>0,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return (new PaymentResource($payment))
        ->additional([
            'msg'=>'Resourse Payment successful',
            'Error'=>0,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $payment->update($request->all());
        return (new PaymentResource($payment))
        ->additional([
            'msg'=>'Payment successful Updated',
            'Error'=>0,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return (new PaymentResource($payment))
        ->additional([
            'msg'=>'Payment successful deleted',
            'Error'=>0,
        ]);
    }
}
