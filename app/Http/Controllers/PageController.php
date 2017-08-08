<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Log;
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
        Log::info('require: '.$request);
        $validator = Validator::make($request->all(),[
            'email'=>'required | email',
            'password'=>'required | min:6| max:10',
            'repassword'=>'required | same:password',
//            'image'=>'required | image',
            'image'=>'required | mimes:png,jpg,gif | max:50000'
    ]);
        if($validator->fails()){
//            return redirect('../');
//            return redirect('/signup');
//            return redirect();
//            return back()->withErrors($validator->errors()->all())->withInput();
//            return view('errors.422');
            return abort('404');

        }

        return "ok";

//        $email = $request->email;
//        $password = $request->password;
//        return $request->all();
    }
}
