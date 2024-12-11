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
            'password' => 'min:8',
            'UserType' => 'required'
        ]);

        $values['username'] = strip_tags($values['username']);
        $values['fullname'] = strip_tags($values['fullname']);
        $values['email'] = strip_tags($values['email']);
        $values['password'] = strip_tags($values['password']);
        $values['UserType'] = strip_tags($values['UserType']);

        $values['password'] = bcrypt($values['password']);

        User::create($values);

        return redirect('/');

    }



    public function login(Request $req){
       $values = $req->validate([
            'username' => 'required',
            'password' => 'required',
            'UserType' => 'required'
       ]);

       if(auth()->attempt(['username'=> $values['username'] ,  'password'=> $values['password'] ])){
        $req->session()->regenerate();
        
        if ($req->UserType === 'admin') {
            return redirect('/1'); // Route for welcome.blade
        } elseif ($req->UserType === 'hslrc') {
            return redirect('/3'); // Route for library.blade
        } else {
            auth()->logout();
            return redirect('/')->withErrors(['usertype' => 'Invalid user type.']);
        }





       }
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
