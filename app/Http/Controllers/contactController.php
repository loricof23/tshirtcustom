<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class contactController extends Controller
{
    public function front(){
        return view('pages.contact');
    }

    public function goInsert(Request $request){
        if ($request->isMethod('post')){
            $validatedData = $request->validate([
                'name'=> 'required',
                'email' => 'required',
                'message' => 'required'
            ]);


            $newContact = new Contact;

            $newContact->name = $request->name;
            $newContact->email = $request->email;
            $newContact->message = $request->message;


            $newContact->save();

            return redirect('/contact')->with('success','data inserted Successfully');
        }else{
            return redirect('/');
        }
    }
}
