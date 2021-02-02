<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact.contactus');
    }
    public function store()
    {
        $data=request()->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email',
            'remarks'=>'required|min:10',
        ]);
        Contact::create($data);
        session()->flash('save','Request has been send!!');
        return back();
    }
}
