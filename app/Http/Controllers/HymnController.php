<?php

namespace App\Http\Controllers;

use App\Category;
use App\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HymnController extends Controller
{
    public function edit_hymn(Request $request,$id) {
        $song = Song::where(['id'=>$id])->first();

        if(!$song) {
            return redirect()->back()->with(['warning'=>'This song cannot be found']);
        } else {
            $validation = Validator::make($request->all(), [
                'title'=>'required',
                'number'=>'required',
                'chorus'=>'required',
                'song'=>'required',
                'category_id'=>'required'
            ]);

            if ($validation->fails()) {
                return redirect()->back()->with(['warning'=>'All fields are required']);
            }else {
                $checkCategory = Category::where(['id'=>$request->category_id])->first();
                if (!$checkCategory){
                    return redirect()->back()->with(['warning'=>'Cannot find the song category you chose']);
                }else {
                    $song->title = $request->post('title');
                    $song->number = $request->post('number');
                    $song->chorus = $request->post('chorus');
                    $song->song = $request->post('song');
                    $song->category_id = $request->post('category_id');

                    $song->update();
                    return redirect()->route('home')->with(['success'=>'Updated successfully!']);
                }
            }
        }
    }

    public function delete_hymn($id) {
        $song = Song::where(['id'=>$id])->first();
        if (!$song){
            return redirect()->back()->with(['warning'=>'Song you selected does not exist']);
        }else{
            $song->delete();
            return redirect()->route('home')->with(['success'=>'Song deleted successfully']);
        }
    }

    public function create_song(Request $request) {
        $validation = Validator::make($request->all(), [
            'title'=>'required',
            'number'=>'required',
            'chorus'=>'required',
            'song'=>'required',
            'category_id'=>'required'
        ]);

        if ($validation->fails()) {
            return redirect()->back()->with(['error'=>'All fields are required']);
        } else {
            $category = Category::where(['id'=>$request->category_id])->first();

            if (!$category){
                return redirect()->back()->with(['error'=>'The song category you selected does not exist']);
            }else {
                $song = new Song();

                $song->title = $request->post('title');
                $song->number = $request->post('number');
                $song->chorus = $request->post('chorus');
                $song->song = $request->post('song');
                $song->category_id = $request->post('category_id');

                $song->save();

                return redirect()->back()->with(['success'=>'Hymn created successfully');
            }
        }
    }


}
