<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HouseController extends Controller
{
    public function index(){
        $query=DB::table('houses');
        $houses=$query->get();

        return view('houses',[
            'houses' => $houses
        ]);
    }
}
