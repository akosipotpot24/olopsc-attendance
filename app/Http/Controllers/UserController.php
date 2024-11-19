<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $req){
        $values = $req->validate([
            'username' => 'required',
            'fullname' => 'required',
            'email' => 'email',
            'password' => 'min:8'
        ]);

        $values['username'] = strip_tags($values['username']);
        $values['fullname'] = strip_tags($values['fullname']);
        $values['email'] = strip_tags($values['email']);
        $values['password'] = strip_tags($values['password']);

        $values['password'] = bcrypt($values['password']);

        User::create($values);

        return redirect('/');

    }



    public function login(Request $req){
       $values = $req->validate([
            'username' => 'required',
            'password' => 'required'
       ]);

       if(auth()->attempt(['username'=> $values['username'] ,  'password'=> $values['password'] ])){
        $req->session()->regenerate();
        return redirect ('1');
       }
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
