<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{


    public function index()
    {
        $abc=Student::all();
        return view('multiauth::student.index',compact('abc'));
    }

    public function show(Student $student)
    {

        return view('multiauth::student/show', compact('student'));
    }
    public function edit(Student $student){
        return view('multiauth::student/edit',compact('student'));
    }
    public function update(Student $student){

        $data=request()->validate([
            'fname' =>'required',
            'lname' =>'required',
            'gender' =>'required',
            'email' =>'required|email',
            'number' =>'required',
            'date' =>'required',
            'cnic' =>'required',
            'reference' =>'nullable',
            'city' =>'nullable'

        ],
            [
                'fname.required' =>'First Name is Required',
                'lname.required' =>'Last Name is Required',
                'gender.required' =>'Gender is Required',
                'email.required' =>'Email is Required',
                'number.required' =>'Mobile number is Required',
                'date.required' =>'Date of Birth is Required',
                'cnic.required' =>'CNIC number is Required'
            ]);
//        dd($data);

        $student->update($data);
        session()->flash('save','Request has been send!!');
        return redirect('admin/student/'.$student->id);
    }
    public function destroy(Student $student){
        $student->delete();
        $abc=Student::all();
        return view('multiauth::student.index',compact('abc'));
    }
    private function storeImage( $student){
        if(request()->has('image')){
            $student->update(['image' =>request()->image->store('uploads','public')]);
        }
    }
}
