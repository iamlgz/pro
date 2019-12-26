<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index(Request $request){

        $search = $request->input('search','');
        
        
        if(!empty($search)){
            $res = DB::table('posList')->where('title','like',"%{$search}%")->paginate(20);
        }else{
            $res = DB::table('posList')->paginate(20);
        }
        

        return view('client/zp',['res'=>$res,'search'=>$search]);
    }

    public function index2(){

        return view('client/index');
    }
}
