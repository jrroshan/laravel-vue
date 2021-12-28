<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addTag(Request $request)
    {
        // Validate
        $this->validate($request ,[
            'tagName' =>'required'
        ]);
        return Tag::create([
            'tagName' => $request->tagName
        ]);
    }

    public function editTag(Request $request){
        // Validate
        $this->validate($request ,[
            'tagName' =>'required',
            'id'=>'required',
        ]);
        return Tag::where('id',$request->id)->update([
            'tagName' =>$request->tagName,
        ]);
    }
    
    public function getTag(){
        return Tag::orderBy('id','desc')->get();
    }

    public function deleteTag(Request $request){
        $this->validate($request,[
            'id' => 'required',
        ]);
        return Tag::where('id',$request->id)->delete();
    }

    public function upload(Request $request){
        $picName = time().'.'.$request->file->extension();
        $request->file->move(public_path('uploads'),$picName);
        return $picName;
    }
}
