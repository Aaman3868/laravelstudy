<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   public function showUser(){
    $users = DB::table('users') ->get();
    return view('allusers',['data'=>$users]);
   
   }

   public function singleUser(string $Id){
    $users = DB::table('users')->where('id',$Id) ->get();
    return view('allusers',['data'=>$users]);
   
   }

   public function addUser(Request $req){
    $user = DB::table('users')
                    ->insertOrIgnore([
                        'name' => $req->username,
                        'email'=>  $req->useremail,
                        'age'=> $req->userage,
                        'city'=> $req->usercity,
                        'created_at'=> now(),
                        'updated_at'=> now()

                    ])
                   s

                    if($user){
                        return redirect()->route('home');
                    }else{
                        echo "Data insert failed";
                    }
    // return view('allusers',['data'=>$users]); 
   
   }



   public function updatePage(string $Id){
    $users = DB::table('users')->find($Id); 
     return view('updateuser',['data'=>$users]);
  

   }
   public function updateUser(Request $req,$Id){
    $user = DB::table('users')
                    ->where('id',$Id)
                    ->update([
                        'name' => $req->username,
                        'email'=>  $req->useremail,
                        'age'=> $req->userage,
                        'city'=> $req->usercity,
                        'created_at'=> now(),
                        'updated_at'=> now()

                    ]);

                    if($user){
                        return redirect()->route('home');
                    }else{
                        echo "Data Uppdate failed";
                    }

   }

   public function deleteUser(string $Id){
    $user = DB::table('users')
                    ->where('id',$Id)
                    ->delete();
                    // return view('allusers',['data'=>$user]);
                    if($user){
                       return redirect()->route('home');
                    }else{
                        echo "Data Delete failed";
                    }

   }
}