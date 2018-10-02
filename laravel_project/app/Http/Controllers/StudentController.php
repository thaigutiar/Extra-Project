<?php

namespace App\Http\Controllers;

use App\Studentmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table_employee = StudentModel::select_all();
    $data = [
    "table_student" => $table_student
    ];
    return view('student/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $table_position = StudentModel::select_all();
     $data = [
        "table_student" => $table_student
     ];
    return view('student/create',$data);
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
     * @param  \App\Studentmodel  $studentmodel
     * @return \Illuminate\Http\Response
     */
    public function show(Studentmodel $studentmodel)
    {
           $table_student = StudentModel::select_by_id($id);
    $data = [
    "table_student" => $table_student
    ];
    return view('student/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Studentmodel  $studentmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Studentmodel $studentmodel)
    {
            $table_student = StudentModel::select_by_id($id);
    $data = [
    'table_student' => $table_student ,
    ];
    return view('student/edit',$data);
    }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Studentmodel  $studentmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studentmodel $studentmodel)
    {
         $name = $request->input('name');
    $age = $request->input('age');
    $address = $request->input('address');
    $salary = $request->input('salary');
    $student_id = $request->input('student_id');
    
    EmployeeModel::update_by_id($name, $age, $address, $salary, $position_id, $id);
    return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Studentmodel  $studentmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studentmodel $studentmodel)
    {
        //
    }
}
