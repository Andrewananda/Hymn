<?php

namespace App\Http\Controllers;

use App\Category;
use App\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function createCategory(Request $request) {

      $validation = Validator::make($request->all(),['name'=>'required' ]);
      if ($validation->fails()){
          return GeneralResponseController::getErrorResponse('Input name is required');
      }
      $category = new Category();
      $category->name = $request->name;
      $category->save();
      return response()->json(['message'=>'Insert Category Successfully'],200);
    }

    public function createSong(Request $request) {
        $songValidation = Validator::make($request->all(), [
            'title'=>'required',
            'number'=>'required',
            'chorus'=>'required',
            'song'=>'required',
            'category_id'=>'required'
        ]);
        if ($songValidation->fails()) {
            return GeneralResponseController::getErrorResponse('Input error, kindly provide all fields');
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
        $updateValidation = Validator::make($request->all(), [
            'title'=>'required',
            'number'=>'required',
            'chorus'=>'required',
            'song'=>'required',
            'category_id'=>'required'
        ]);
        if ($updateValidation->fails()) {
            return GeneralResponseController::getErrorResponse('Input error, kindly provide all fields');
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

    /**
     * @return \Illuminate\Http\JsonResponse
     * get songs with [category] and paginate to 10 per page
     */
    public function allSongs() {
        $songs = Song::with('category')->get();
        $count = count($songs);

        return GeneralResponseController::getSuccessResponse($songs,'Songs Fetched Successfully',$count);
    }

    public function filterSong($id) {
        $song = Song::query()
            ->where(['id'=>$id])
            ->first();
        return response()->json($song,200);
    }

}
