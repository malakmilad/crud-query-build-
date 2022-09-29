<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        return view('post.create');
    }
    public function create(Request $request){
        DB::table('posts')->insert([
          'title'=>$request->title,
          'description'=>$request->description
        ]);
        return redirect()->route('post.show');
    }
    public function show(){
        $posts = DB::table('posts')->get();
        return view('post\posts',compact('posts'));
    }
    public function edit($id){
        $posts = DB::table('posts')->where('id',$id)->first();
        return view('post\edit',compact('posts'));
    }
    public function update(Request $request,$id){
        DB::table('posts')->where('id',$id)->update([
            'title'=>$request->title,
            'description'=>$request->description
        ]);
        return redirect()->route('post.show');
    }
    public function delete($id){
        DB::table('posts')->where('id',$id)->delete();
        return redirect()->route('post.show');
    }
}
