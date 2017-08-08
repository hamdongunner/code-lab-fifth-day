<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
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

        $validator = Validator::make($request->all(),[
            'email'=>'required | email',
            'password'=>'required | min:6| max:10',
            'repassword'=>'required | same:password'
    ]);
        if($validator->fails()){
//            return redirect('../');
//            return redirect('/signup');
//            return redirect();
            return back()->withErrors($validator->errors()->all())->withInput();


        }

        return "ok";

//        $email = $request->email;
//        $password = $request->password;
//        return $request->all();
    }
}
