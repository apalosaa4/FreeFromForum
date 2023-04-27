<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gender=Gender::all();
        return GenderResource::collection($gender);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGenderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGenderRequest $request)
    {
        $gender = new Gender();
        $gender->gender_id = $request->input('gender_id');
        $gender->gender_name = $request->input('gender_name');
        if($gender->save()){
            return new GenderResource($gender);
        }
    }

    public function storedetails($gender_id, $gender_name)
    {
        $gender = new Gender();
        $gender->gender_id = $gender_id;
        $gender->gender_name = $gender_name;
        if($gender->save()){
            return new GenderResource($gender);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $gender_id
     * @return \Illuminate\Http\Response
     */
    public function show($gender_id)
    {
        $gender=Gender::all()->where('gender_id',$gender_id)->firstOrFail();
        return new GenderResource($gender);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function edit(Gender $gender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGenderRequest  $request
     * @param  int $gender_id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGenderRequest $request, $gender_id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $gender_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($gender_id)
    {
        //
    }
}
