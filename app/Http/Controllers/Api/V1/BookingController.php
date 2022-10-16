<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

use App\Http\Resources\V1\BookingResource;
use App\Http\Resources\V1\BookingCollection;
use App\Http\Requests\V1\StoreBookingRequest;
use App\Http\Requests\V1\UpdateBookingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        (new BookingCollection(Booking::latest()->paginate()))
        ->additional([
            'msg'=>'Booking successful listed',
            'Error'=>0,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookingRequest $request)
    {
        // Booking::create($request->all());
        return (new BookingResource(Booking::create($request->all())))
        ->additional([
            'msg'=>'Booking successful stored',
            'Error'=>0,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return (new BookingResource($booking))
        ->additional([
            'msg'=>'Resourse Booking successful',
            'Error'=>0,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        $booking->update($request->all());
        return (new BookingResource($booking))
        ->additional([
            'msg'=>'Booking successful Updated',
            'Error'=>0,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return (new BookingResource($booking))
        ->additional([
            'msg'=>'Booking successful deleted',
            'Error'=>0,
        ]);
    }
}
