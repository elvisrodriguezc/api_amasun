<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Boat;
use Illuminate\Http\Request;

use App\Http\Resources\V1\BoatResource;
use App\Http\Resources\V1\BoatCollection;
use App\Http\Requests\V1\StoreBoatRequest;
use App\Http\Requests\V1\UpdateBoatRequest;

class BoatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return (new BoatCollection(Boat::paginate()))
        ->additional([
            'msg'=>'Boat successful listed',
            'Error'=>0,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBoatRequest $request)
    {
        return (new BoatResource(Boat::create($request->all())))
        ->additional([
            'msg'=>'Boat successful stored',
            'Error'=>0,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function show(Boat $boat)
    {
        return (new BoatResource($boat))
        ->additional([
            'msg'=>'Resource Boat successful',
            'Error'=>0,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBoatRequest $request, Boat $boat)
    {
        $boat->update($request->all());
        return (new BoatResource($boat))
        ->additional([
            'msg'=>'Boat successful Updated',
            'Error'=>0,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boat $boat)
    {
        $boat->delete();
        return (new BoatResource($boat))
        ->additional([
            'msg'=>'Boat successful deleted',
            'Error'=>0,
        ]);
    }
}
