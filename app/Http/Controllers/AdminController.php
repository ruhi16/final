<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function loginSubmit(Request $request){


    	return "Submitted" . $request->email . $request->password . "hello";
    }


    public function registerSubmit(Request $request){
      echo $request->name;
      echo $request->email;
      echo $request->password;
      echo $request->confpassword;
      if($request->password == $request->confpassword){
        $user = new User;
        $user->name = $request->name;
        $user->email = md5($request->email);
        $user->password = $request->password;
        //$user->save();
        session()->forget('error');
      }else {
        session()->put('error','Confirm Password Does Not Matched, Try Again!');
        return redirect()->to('/register');
      }


    }
}
