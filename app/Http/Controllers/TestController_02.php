<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class TestController_02 extends Controller
{
    public function test_02(){
        $users = User::all();
        return view('test_02',compact('users'));
    }
}