<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
//        Log::info('require: '.$request);

        $validator = Validator::make($request->all(),[
            'email'=>'required | email',
            'password'=>'required ',
            'repassword'=>'required | same:password',
//            'image'=>'required | image',
            'image'=>''
    ]);
        if($validator->fails()){
//            return redirect('../');
//            return redirect('/signup');
//            return redirect();
//            return back()->withErrors($validator->errors()->all())->withInput();
//            return view('errors.422');
            return abort('404');

        }


//        $request->session()->put('email',$request->email);

//        return $request->session()->get('email');
        return $request->session()->all();


//        $email = $request->email;
//        $password = $request->password;
//        return $request->all();
    }
}
