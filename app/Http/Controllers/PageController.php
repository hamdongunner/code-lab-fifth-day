<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Validator;

class PageController extends Controller
{

    public function getHome(Request $request)
    {
        if (Session::has('email'))
            return view('pages.home');

        return view('pages.signup');

    }

    public function getAbout(Request $request)
    {
        if (Session::has('email'))
            return view('pages.about');

        return view('pages.signup');

    }



    public function requestSignout(Request $request)
    {

        if (Session::has('email')){
            $request->session()->flush();
            return view('pages.signout');
        }else{

        }

        return view('pages.signup');


    }

    public function getLoginrequist(Request $request)
    {
        return view('pages.login');
        
    }


    public function getBlogs()
    {
        return DB::table('blogs')->get(['id','title']);
    }

    public function getSignup()
    {
        return view('pages.home');
    }


    public function requestSignup(Request $request)
    {
//        Log::info('require: '.$request);

        $validator = Validator::make($request->all(),[
            'email'=>'required | email',
            'password'=>'required | min:6',
            'repassword'=>'required | same:password',
//            'image'=>'required | image'
    ]);
        if($validator->fails()){
//            return redirect('../');
//            return redirect('/signup');
//            return redirect();
            return back()->withErrors($validator->errors()->all())->withInput();
//            return view('errors.422');
//            return abort('404');

        }



        $request->session()->put('email',$request->email);

        if (Session::has('email')) {
            return view('pages.home');
        }







//        return $request->session()->get('email');
//        return $request->session()->all();


//        $email = $request->email;
//        $password = $request->password;
//        return $request->all();
    }
}
