<?php

namespace App\Http\Controllers;

use App\PositionModel;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table_position - PositionModel ::select_all();
        $data = ["table_position" => $table_position];
        return view('position/index',$data);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PositionModel  $positionModel
     * @return \Illuminate\Http\Response
     */
    public function show(PositionModel $positionModel)
    {
        $sql="SELECT * FROM table_position"
        WHERE position select_by_id($id)
        return DB::select($sat,[]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PositionModel  $positionModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PositionModel $positionModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PositionModel  $positionModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PositionModel $positionModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PositionModel  $positionModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PositionModel $positionModel)
    {
        //
    }
}
