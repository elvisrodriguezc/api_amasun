<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Departure;
use Illuminate\Http\Request;

use App\Http\Resources\V1\DepartureResource;
use App\Http\Resources\V1\DepartureCollection;

class DepartureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return new DepartureCollection(Departure::latest()->paginate());
        $Departure_query = Departure::latest();
        if ($request->date){
            $Departure_query->where('depart_date',$request->date)
            ->where('status','1');
            $Departures = $Departure_query->get(['depart_time']);
            if (isset($request->time)){
                $Departure_query = Departure::with(['location','boat','service']);
                $Departure_query->where('depart_date',$request->date)
                ->where('depart_time',$request->time);
                $Departures = $Departure_query->get();
                if (isset($request->boat_id)){
                $Departure_query = Departure::with(['location','boat','service']);
                $Departure_query
                    ->where('depart_date',$request->date)
                    ->where('depart_time',$request->time)
                    ->where('boat_id',$request->boat_id);
                    $Departures = $Departure_query->get();
                }
            }
        } else {
            $Departures = "";
        }
        // if ($request->sortBy && in_array($request->sortBy,['id','created_at'])){
        //     $sortBy = $request->sortBy;
        // }else{
        //     $sortBy = 'id';
        // }
        // if ($request->sortOrder && in_array($request->sortOrder,['desc','desc'])){
        //     $sortOrder = $request->sortOrder;
        // }else{
        //     $sortOrder = 'desc';
        // }
        // if($request->perPage){
        //     $perPage = $request->perPage;
        // }else{
        //     $perPage = 5;
        // }
        // if($request->paginate){
        //     $Departures = $Departure_query->orderBY($sortBy,$sortOrder)->paginate();
        // }else{
        //     $Departures = $Departure_query->orderBY($sortBy,$sortOrder)->get();
        // }
            return response()->json([
                // 'message'=>'Departures, successfully fetched',
                // 'error' => 0,
                'data' => $Departures,
            ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return (new DepartureResource(Departure::create($request->all())))
        ->additional([
            'msg'=>'Departure successfull stored',
            'Error'=>0,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departure  $departure
     * @return \Illuminate\Http\Response
     */
    public function show(Departure $departure)
    {
        return new DepartureResource($departure);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departure  $departure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departure $departure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departure  $departure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departure $departure)
    {
        //
    }
}
