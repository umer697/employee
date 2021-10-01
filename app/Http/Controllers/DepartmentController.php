<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $table =   Department::get();
        return view('department.index',['table' =>$table]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table= new Department();
        $table->title = $request->title;
        $table->save();
        return redirect('depart')->with('status','Record has been added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department ,$id)
    {
        $table = Department::find($id);
        return view('Department.show',['table'=>$table]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department,$id)
    {
        $table = Department::find($id);
        return view('department.edit',['table'=>$table]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department,$id)
    {
        $table=  Department::find($id);
        $table->title = $request->title;
        $table->save();
        return redirect('depart')->with('status','Record has been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department ,$id)
    {
        Department::where('id',  $id)->delete();
        return redirect('depart')->with('status','Record has been Deleted Successfully');
    }
    
}
