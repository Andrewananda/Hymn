<?php

namespace App\Http\Controllers;

use App\Category;
use App\Song;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function createCategory(Request $request) {
      $validation = $request->validate(['name'=>'required' ]);
      if (!$validation){
          return response()->json(['message'=>'Input field name'],401);
      }
      $category = new Category();
      $category->name = $request->name;
      $category->save();
      return response()->json(['message'=>'Insert Category Successfully'],200);
    }

    public function createSong(Request $request) {
        $validation = $request->validate([
            'title'=>'required',
            'number'=>'required',
            'chorus'=>'required',
            'song'=>'required',
            'category_id'=>'required'
        ]);
        if (!$validation) {
            return response()->json(['message'=>'Input error, kindly fill all fields'],401);
        }
        $song = new Song();
        $song->title = $request->title;
        $song->number = $request->number;
        $song->chorus = $request->chorus;
        $song->song = $request->song;
        $song->category_id = $request->category_id;
        $song->save();
        return response()->json(['message'=>'Insert Song Successfully'],200);
    }

    public function updateSong(Request $request,$id) {
        $updateValidation = $request->validate([
            'title'=>'required',
            'number'=>'required',
            'chorus'=>'required',
            'song'=>'required',
            'category_id'=>'required'
        ]);
        if (!$updateValidation) {
            return response()->json(['message'=>'Input error, kindly fill all fields'],401);
        }
        $song = Song::where(['id'=>$id]);
        $song->title = $request->title;
        $song->number = $request->number;
        $song->chorus = $request->chorus;
        $song->song = $request->song;
        $song->category_id = $request->category_id;
        $song->update();
        return response()->json(['message'=>'Updated successfully'],200);

    }

    public function allSongs() {
        $songs = Song::all();
        return response()->json($songs);
    }

    public function filterSong($id) {
        $song = Song::query()
            ->where(['id'=>$id])
            ->first();
        return response()->json($song,200);
    }

}
