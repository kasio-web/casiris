<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class TestController extends Controller

{

// ページ表示
 public function top(){
   return view('top/index');
   }
   public function concept(){
    return view('concept/index');
    }

    public function menu(){
     return view('system-menu/index');
     }

     public function news(){
      return view('news/index');
      }

      public function Access(){
       return view('access/index');
       }

       //投稿の処理
public function test(){
 $users = User::all();
 return view('test',compact('users'));
}
}
