<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function showUser(){
        return view('welcome');
    }

    public function showabout(string  $id){
        return view('about',['id'=> $id]);
    }
}
