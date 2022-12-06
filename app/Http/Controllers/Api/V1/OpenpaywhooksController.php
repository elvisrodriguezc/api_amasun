<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Openpaywhooks;
use Illuminate\Http\Request;

use App\Http\Resources\V1\OpenpaywhooksResource;
use App\Http\Resources\V1\OpenpaywhooksCollection;
use App\Http\Requests\V1\StoreOpenpaywhooksRequest;
use App\Http\Requests\V1\UpdateOpenpaywhooksRequest;

class OpenpaywhooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return (new OpenpaywhooksCollection(Openpaywhooks::latest()->paginate()))
        ->additional([
            'msg'=>'Openpaywhooks successful listed',
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
                // Openpaywhooks::create($request->all());
                return (new OpenpaywhooksResource(Openpaywhooks::create($request->all())))
                ->additional([
                    'msg'=>'Openpaywhooks successful stored',
                    'Error'=>0,
                ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Openpaywhooks  $openpaywhooks
     * @return \Illuminate\Http\Response
     */
    public function show(Openpaywhooks $openpaywhooks)
    {
        return (new OpenpaywhooksResource($openpaywhooks))
        ->additional([
            'msg'=>'Resource Openpaywhooks successful',
            'Error'=>0,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Openpaywhooks  $openpaywhooks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Openpaywhooks $openpaywhooks)
    {
        $openpaywhooks->update($request->all());
        return (new OpenpaywhooksResource($openpaywhooks))
        ->additional([
            'msg'=>'Openpaywhooks successful Updated',
            'Error'=>0,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Openpaywhooks  $openpaywhooks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Openpaywhooks $openpaywhooks)
    {
        $openpaywhooks->delete();
        return (new OpenpaywhooksResource($openpaywhooks))
        ->additional([
            'msg'=>'Openpaywhooks successful deleted',
            'Error'=>0,
        ]);
    }
}
