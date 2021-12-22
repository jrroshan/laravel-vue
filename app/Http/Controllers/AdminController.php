<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addTag(Request $request)
    {
        // Validate
        return $create = Tag::create([
            'tagName' => $request->tagName
        ]);
    }
    
    public function getTag(){
        return Tag::orderBy('id','desc')->get();
    }
}
