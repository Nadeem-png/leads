<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        return view('student.create');
    }

    public function store(){

        $data=request()->validate([
            'fname' =>'required',
            'lname' =>'required',
            'gender' =>'required',
            'email' =>'required|email',
            'number' =>'required',
            'date' =>'required',
            'cnic' =>'required',
            'reference' =>'nullable',
            'city' =>'nullable',
            'image' => 'required|image|max:5000',

        ],
            [
                'fname.required' =>'First Name is Required',
                'lname.required' =>'Last Name is Required',
                'gender.required' =>'Gender is Required',
                'email.required' =>'Email is Required',
                'number.required' =>'Mobile number is Required',
                'date.required' =>'Date of Birth is Required',
                'cnic.required' =>'CNIC number is Required',
                'image.required' =>'image is Required',
            ]);
//        dd($data);
        $student =Student::create($data);
        $this->storeImage($student);
        session()->flash('save','Request has been send!!');
        return back();

    }
    private function storeImage( $student){
        if(request()->has('image')){
       $student->update(['image' =>request()->image->store('uploads','public')]);
        }
    }

}
