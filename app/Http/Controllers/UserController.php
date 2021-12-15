<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function authUser(request $request){
        
        
        $user = User::where('username',$request->username)
        ->where('password',$request->password)->get();
        
       

        
        


    }
}
