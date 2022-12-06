<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Location;
// use Illuminate\Http\Request;

use App\Http\Resources\V1\LocationResource;
use App\Http\Resources\V1\LocationCollection;
use App\Http\Requests\V1\StoreLocationRequest;
use App\Http\Requests\V1\UpdateLocationRequest;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new LocationCollection(Location::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocationRequest $request)
    {
        // Location::create($request->all());
        return (new LocationResource(Location::create($request->all())))
        ->additional([
            'msg'=>'Location successfull stored',
            'Error'=>0,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        return (new LocationResource($location))
        ->additional([
            'msg'=>'Resource Location successfull',
            'Error'=>0,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocationRequest $request, Location $location)
    {
        $location->update($request->all());
        return (new LocationResource($location))
        ->additional([
            'msg'=>'Location successfull Updated',
            'Error'=>0,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        $location->delete();
        return (new LocationResource($location))
        ->additional([
            'msg'=>'Location successfull deleted',
            'Error'=>0,
        ]);
    }
}
