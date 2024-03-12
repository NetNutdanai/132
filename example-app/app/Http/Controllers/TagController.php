<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tags;

class TagController extends Controller
{
    //
    public function index()
    {
        $tag = Tags::all();
        return view('tags.index', compact('tag'));
    }
}
