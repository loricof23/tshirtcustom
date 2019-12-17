<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShirtController extends Controller
{

    public function front(){
        return view('pages.create');
    }

    public function goCreate(Request $request){
        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'name' => 'required',
                'size' => 'required',
                'neck' => 'required',
                'sleeve' => 'required',
                'colour' => 'required',
                'file_upload' => 'required',
            ]);

            $newProduct = new Product;

            $newProduct->name = $request->name;
            $newProduct->size = $request->size;
            $newProduct->neck = $request->neck;
            $newProduct->sleeve = $request->sleeve;
            $newProduct->colour = $request->colour;
            $newProduct->image = $request->file_upload;
            $newProduct->user_id = '1';

            $newProduct->save();


            return redirect('/create')->with('success', 'Data inserted Successfully');
        }else{
            return redirect('/');
        }
    }

    public function up($id){

        $product = Product::findOrFail($id);
        return view('admin.update', ['product' =>$product]);
    }

    public function goUpdate($id, Request $request){
        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'name' => 'required',
                'size' => 'required',
                'neck' => 'required',
                'sleeve' => 'required',
                'colour' => 'required',
                'file_upload' => 'required',
            ]);

            try{
                $newProduct = Product::findOrFail($id);
                $newProduct->name = $request->name;
                $newProduct->size = $request->size;
                $newProduct->neck = $request->neck;
                $newProduct->sleeve = $request->sleeve;
                $newProduct->colour = $request->colour;
                $newProduct->image = $request->file_upload;
                $newProduct->save();
                return redirect('/dashboard/products')->with('success','Data Updated Successfully');
            }catch(Exception $e){
                dd($e);
            }

        }else{
            return redirect('/');
        }
    }
    public function delete($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/dashboard/products');
    }
}
