<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function getHome()
    {
        return view('pages.home');
    }

    public function getvideos($id = null, $number = null)
    {


        return view('pages.videos',compact('id','number'));

    }


    public function getSignup()
    {
        return view('pages.signup');
    }


    public function requestSignup(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        return $request->all();
    }
}
