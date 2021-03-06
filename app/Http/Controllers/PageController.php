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



    public function editBlogs(Request $request, $id)
    {

        $request->session()->put('title', $request->title);
        $title2 = $request->session()->get('title');
//        return $title2;
//        return $id;
//        $title = $request->title;
       DB::table('blogs')
            ->where('id', $id)
            ->update(['title' => $title2]);

        return redirect('/get_blogs');
    }



    public function addBlog(Request $request)
    {
        $request->session()->put('add', $request->add);
        $request->session()->put('id', $request->id);
        $name = $request->session()->get('add');
        $id = $request->session()->get('id');

        DB::table('blogs')->insert([
            ['title' => $name , 'user_id' => $id]
        ]);
        return redirect('/get_blogs');
    }


    public function searchBlog(Request $request)
    {
        $request->session()->put('search', $request->search);

        $search = $request->session()->get('search');

        return DB::table('blogs')->where('title','like',$search)->get();
    }


    public function deleteBlogs($id = null)
    {
        $db = DB::table('blogs')
            ->where('id', $id)
            ->delete();

        return back();
    }






    public function editBlogsform($id = null)
    {
        $id = $id;
        return view('pages.edit',compact('id'));
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

        $users = DB::table('users')->get();
        $blogs = DB::table('blogs')
            ->join('users','blogs.user_id','=','users.id')
            ->select('blogs.*','users.name as username')
            ->paginate(10);

//        return $blogs;
        return view('pages.table',compact('blogs','users'));
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
    }
}
