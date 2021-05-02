<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function add_category(Request $request){
        $validation = Validator::make($request->all(), [
            'name'=>'required'
        ]);

        if ($validation->fails()){
            return redirect()->back()->with(['warning'=>'Category name field is required']);
        } else {
            $category = new Category();
            $category->name = $request->post('name');

            $category->save();
            return redirect()->back()->with(['success'=>'Category created successfully']);
        }
    }
}
