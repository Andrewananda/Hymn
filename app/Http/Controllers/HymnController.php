<?php

namespace App\Http\Controllers;

use App\Category;
use App\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HymnController extends Controller
{
    public function create_edit(Request $request,$id) {
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

    public function edit_hymn($id) {
        $song = Song::where(['id'=>$id])->first();

        if (!$song) {
            return redirect()->back()->with(['warning'=>'Song cannot be found']);
        }else{
            return view('hymn.edit_song',['song'=>$song]);
        }
    }

    public function delete_hymn($id) {
        $song = Song::where(['id'=>$id])->first();
        if (!$song){
            return redirect()->back()->with(['warning'=>'Song you selected does not exist']);
        }else{
            $song->delete();
            return redirect()->back()->with(['success'=>'Song deleted successfully']);
        }
    }

    public function create_hymn(Request $request) {
        $validation = Validator::make($request->all(), [
            'title'=>'required',
            'number'=>'required',
            'chorus'=>'required',
            'category_id'=>'required',
            'description'=>'required'
        ]);

        if ($validation->fails()) {
            return redirect()->back()->with(['warning'=>'All fields are required']);
        } else {
            $category_id = $request->post('category_id');
            $category = Category::where(['id'=>$category_id])->first();

            if (!$category){
                return redirect()->back()->with(['warning'=>'The song category you selected does not exist']);
            }else {
                $song = new Song();

                $song->title = $request->post('title');
                $song->number = $request->post('number');
                $song->chorus = $request->post('chorus');
                $song->song = $request->post('description');
                $song->category_id = $request->post('category_id');

                $song->save();

                return redirect()->back()->with(['success'=>'Hymn created successfully']);
            }
        }
    }

    public function add_hymn() {
        return view('hymn.add_song');
    }

    public function all_hymns() {
        $songs = Song::all();

        return view('hymn.all_songs', ['songs'=>$songs]);
    }

}
