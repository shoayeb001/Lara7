<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AuthorController extends Controller
{
    public function index(){
      $authors=DB::table('authors')->get();
      //dd($author);
      return view('author/index',compact('authors'));
    }
    public function create(){
        return view('author/create');
    }
    public function store(Request $request){
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['date_of_birth']=$request->date_of_birth;
        DB::table('authors')->insert($data);
        return redirect()->route('author.index');
    }
    public function edit($id){
        //dd($id);
        $authors=DB::table('authors')->where('id',$id)->first();
        //dd($authors);
//        $author=DB::table('authors',$id);
        return view('author/edit',compact('authors'));
    }
    public function update(Request $request,$id){
    //dd($id);
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['date_of_birth']=$request->date_of_birth;
        DB::table('authors')->where('id',$id)->update($data);
        return redirect()->route('author.index');
    }
    public function destroy($id){
        //dd($id);
        //DB::table('authors')->where('id',$id)->delete();
        DB::table('authors')->delete($id);
        return redirect()->route('author.index');
    }
}
