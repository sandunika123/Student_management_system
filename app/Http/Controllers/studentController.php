<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentController extends Controller
{

    protected $student;

    public function __construct(){
        $this->student = new student();
    }




    public function showData(){
        $response['students']=$this->student->all();
        return view('pages.students.home')->with($response);
    }

    public function saveData(Request $request){

        $request->validate([
            'stu_name'=>['required'],
            'stu_dob'=>['required'],
            'stu_address'=>['required']
        ]);

        $this->student->create($request->all());
        return redirect()->back();
    }

    public function deleteData($stu_id){
        $student=$this->student->find($stu_id);
        $student->delete();
        return redirect()->back();
    }

    public function editData($stu_id){
        $response['student']=$this->student->find($stu_id);
        return view('pages.students.edit')->with($response);
    }


    public function updateData(Request $request, $stu_id){
        $student=$this->student->find($stu_id);
        $student->update(array_merge($student->toArray(),$request->toArray()));
        return redirect('students');
    }
}
