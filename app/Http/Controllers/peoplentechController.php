<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class peoplentechController extends Controller
{
    public function index(){
    $title = 'PeopleNTech';
    $details = 'More more nafal  amal increase.Plan kora how to celebrate Ramadan';
    return view('peoplentechView',compact('title','details'));
}
    public function about(){
        $title = 'PeopleNTech';
        return view('about',compact('title'));
    }
    public function form(){
        return view('form');
    }
    public function preview(Request $request){
//    echo dd($request->all());
        //dd($request->all());
        $data = [];
        $data['name'] = $request->full_name;
        $data['email'] = $request->email_address;
        $data['phone'] = $request->phone_number;
        // DB::table('about')->insert($data);
        //$result = DB::table('about')->first();
        $result = DB::table('about')->get();
//        $name=$request->name;
//        $email=$request->email;
//        $phone=$request->phone;
//        $name=$result->name;
//        $email=$result->email;
//        $phone=$result->phone;

        return view('preview',compact('result'));
    }
}
