<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{

    public function index() {
        return view('category.add_category');
    }

    public function create_category(Request $request){
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

    public function all_category() {
        $categories = Category::all();

        return view('category.all_categories',['categories'=>$categories]);
    }

    public function save_edit(Request $request,$id) {
        $category = Category::where(['id'=>$id])->first();

        if (!$category){
            return redirect()->back()->with(['error'=>'Category cannot be found']);
        }else{
            $validation = Validator::make($request->all(), [
                'name'=>'required'
            ]);
            if ($validation->fails()) {
                return redirect()->back()->with(['error'=>'Name field is required']);
            } else {
                $category->name = $request->post('name');
                $category->update();
                return redirect()->route('category.all')->with(['success'=>'Updated successfully']);
            }
        }
    }

    public function edit_category($id) {
        $category = Category::where(['id'=>$id])->first();

        if (!$category) {
            return redirect()->back()->with(['warning'=>'Song category cannot be found']);
        }else{
            return view('category.edit_category', ['category'=>$category]);
        }
    }

    public function delete_category($id) {
        $category = Category::where(['id'=>$id])->first();
        if (!$category) {
            return redirect()->back()->with(['error'=>'Cannot find the category selected']);
        } else {
            $category->delete();
            return redirect()->back()->with(['success'=>'Deleted successfully']);
        }
    }
}
