<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class CharacterController extends Controller
{
    public function index(){
        $query=DB::table('characters')
            ->join('houses', 'characters.houseId','=','houses.houseId');
        $characters=$query->get();

        return view('characters',[
            'characters' => $characters
        ]);
    }

    public function create(){
        $houses=DB::Table('houses')->get();
        return view('createCharacters',[
            'houses'=>$houses
        ]);
    }

    public function store(Request $request){
        $input=$request->all();
        $validation = Validator::make($input, [
            'name'=>'required',
            'gender'=>'required'
        ]);
        
        if ($validation->fails()){
            return redirect('/characters/new')
                ->withInput()
                ->withErrors($validation);
        }

        DB::table('characters')->insert([
            'name' => $request->name,
            'gender'=> $request->gender,
            'houseId'=>$request->house
        ]);

        // redirect back to /playlists
        return redirect('/');
    }
}
