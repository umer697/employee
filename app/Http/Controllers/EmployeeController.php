<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tab =   Employee::all();
        return view('employee.index',['tab' =>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desig =Designation::get();
        $dept = Department::get();
        return view('employee.create',['dept'=>$dept,'desig'=>$desig]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imgName = '';
        if($request->photo){
            $imgName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('images'), $imgName);
        }


        $table= new Employee();
        $table->name = $request->name;
        $table->fname = $request->fname;
        $table->cnic = $request->cnic;
        $table->dob = $request->dob;
        $table->dept_id = $request->dept_id;
        $table->desig_id = $request->desig_id;
        $table->photo = $imgName;
        $table->cast = $request->cast;
        $table->address = $request->address;
        $table->city = $request->city;
        $table->state = $request->state;
        $table->country = $request->country;
        $table->save();
        return redirect('emp')->with('status','Record has been added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee,Request $request ,$id)
    {

        $table = Employee::find($id);
        $desig = Designation::get();
        $dept  = Department::get();
        return view('employee.show',['t'=>$table,'desig'=>$desig,'dept'=>$dept]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee,$id)
    {
        $table = Employee::find($id);
        $dept =  Department::get();
        $design = Designation::get();
        return view('employee.edit',['table'=>$table,'dept' =>$dept,'design'=>$design]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee,$id)
    {
        if($request->hasFile('photo')){
            $photo=$request->file('photo');
            $renamephoto= time() .'.'. $photo->getClientOriginalExtension();
            $dest=public_path('/images');
            $photo->move($dest,$renamephoto);
        }else
        {
            $renamephoto=$request->prev_photo;
        }


        $table= Employee::find($id);
        $table->name = $request->name;
        $table->fname = $request->fname;
        $table->cnic = $request->cnic;
        $table->dob = $request->dob;
        $table->dept_id  = $request->dept;
        $table->desig_id = $request->desig;
        $table->photo = $renamephoto;
        $table->cast = $request->cast;
        $table->address = $request->address;
        $table->city = $request->city;
        $table->state = $request->state;
        $table->country = $request->country;
        $table->save();
        return redirect('emp')->with('status','Record has been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee ,$id)
    {
        Employee::where('id',  $id)->delete();
        return redirect('emp')->with('status','Record has been Deleted Successfully');
    }
}
