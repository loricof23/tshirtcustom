<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Contact;

class ViewController extends Controller
{
    public function front() {
        $products = Product::all();

        return view ('admin.view', ['baju' => $products]);
    }

    public function hist() {
        $products = Product::all();

        return view ('admin.history', ['baju' => $products]);
    }


    public function dashboard(){
        return view ('admin.homeadmin');
    }

    public function contactadmin(){
        $contacts = Contact::all();

        return view ('admin.contactadmin', ['pesan' => $contacts]);
    }

}
