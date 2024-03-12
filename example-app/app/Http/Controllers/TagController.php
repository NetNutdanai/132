<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tags;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    //
    public function index()
    {
        $tag = Tags::all();
        return view('tags.index', compact('tag'));
    }


    public function store(Request $request)
    {
        $tag = new Tags;
        $tag->tag_name = $request->input('label_name');
        $tag->save();
        // DB::table('oeis_tags')->where('tag_id',$tag_id)->delete();
        // DB::statement('SET @new_id = 0;');
        // DB::statement('UPDATE oeis_tags SET tag_id = @new_id:=new_id+1');
        // DB::statement('ALTER TABLE oeis_tags AUTO_INCREMENT = 1;');
        return redirect('/tags');
    }
}
