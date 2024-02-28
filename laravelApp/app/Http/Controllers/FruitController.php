<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FruitController extends Controller
{
    public function index(){
        $fruits = DB::table('fruits')->orderBy('id','desc')->get();

        return view('fruits.index', [
            'fruits' => $fruits
        ]);
    }

    public function fruitDetail($id) {
        $fruit = DB::table('fruits')->where('id','=',$id)->first();

        return view('fruits.detail', [
            'fruit' => $fruit
        ]);
    }

    public function fruitCreate() {
        return view('fruits.create');
    }

    public function saveFruitForm(Request $request) {
        $fruitname = $request->input('fruitname');
        $fuitdescr = $request->input('fruitdescr');
        $fruitprice = $request->input('fruitprice');

        $fruitID = DB::table('fruits')->insertGetId([
            'name' => $fruitname,
            'descr' => $fuitdescr,
            'price' => $fruitprice,
            'date' => date('Y-m-d')
        ]);

        if($fruitID) {
            return redirect()->route('fruits.detail', $fruitID)->with('status','Fruit Created');;
        } else {
            return redirect()->route('fruits.index');
        }
    }
    
    public function deleteFruit($id) {
        $fruitDB = DB::table('fruits')->where('id',$id)->delete();
        return redirect()->route('fruits.index')->with('status','Fruit deleted');
    }

    public function editFruit($id) {
        $fruitDB = DB::table('fruits')->where('id','=',$id)->first();

        return view('fruits.create', ['fruit' => $fruitDB]);
    }

    public function updateFruit($id, Request $request) {
        $fruitname = $request->input('fruitname');
        $fuitdescr = $request->input('fruitdescr');
        $fruitprice = $request->input('fruitprice');

        $fruit = DB::table('fruits')->where('id',$id)->update(array(
            'name' => $fruitname,
            'descr' => $fuitdescr,
            'price' => $fruitprice
        ));
        
        if($fruit) {
            return redirect()->route('fruits.detail', $id)->with('status','Fruit Edited');;
        } else {
            return redirect()->route('fruits.index');
        }
    }
}
