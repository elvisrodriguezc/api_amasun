<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Boat;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBoatRequest;

use App\Http\Resources\V1\BoatResource;
use App\Http\Request\V1\UpdateboatRequest;
use App\Http\Resources\V1\BoatCollection;

class BoatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new BoatCollection(Boat::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return (new BoatResource(Boat::create($request->all())))
        ->additional([
            'msg'=>'Boat successfull stored',
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
        return new BoatResource($boat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateboatRequest $request, Boat $boat)
    {
        $boat->update($request->all());
        return new BoatResource($boat);
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
            'msg'=>'Boat successfull deleted',
            'Error'=>0,
        ]);
    }
}
