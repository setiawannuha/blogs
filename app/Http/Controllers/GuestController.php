<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\Blogs;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class GuestController extends Controller
{
    public function home()
    {
      $data['menu'] = 'home';
      $data['user'] = Session::get('user');
      $data['header1'] = Blogs::with('users')->where('category', 1)->orderBy('created_at', 'desc')->take(1)->get();
      $data['header2'] = Blogs::with('users')->where('category', 0)->orderBy('created_at', 'desc')->take(2)->get();
      $data['top'] = Blogs::with('users')->orderBy('created_at', 'desc')->take(4)->get();
      $data['latest'] = Blogs::with('users')->orderBy('created_at', 'desc')->take(3)->get();
      $data['latest_blogs'] = Blogs::where('category', 0)->orderBy('created_at', 'desc')->take(3)->get();
      $data['blogs'] = Blogs::where('category', 0)->get();
      $data['latest_news'] = Blogs::where('category', 1)->orderBy('created_at', 'desc')->take(3)->get();
      $data['news'] = Blogs::where('category', 1)->get();
      return view('guest.index', $data);
    }
    public function detail($id){
      $data['menu'] = 'home';
      $data['user'] = Session::get('user');
      $data['data'] = Blogs::where('id', $id)->with('users')->get();
      return view('story.detail', $data);
    }
    public function news()
    {
      $data['menu'] = 'news';
      $data['user'] = Session::get('user');
      $data['latest_news'] = Blogs::where('category', 1)->orderBy('created_at', 'desc')->take(3)->get();
      $data['news'] = Blogs::where('category', 1)->get();
      return view('guest.news', $data);
    }
    public function blog()
    {
      $data['menu'] = 'blog';
      $data['user'] = Session::get('user');
      $data['latest_blogs'] = Blogs::where('category', 0)->orderBy('created_at', 'desc')->take(3)->get();
      $data['blogs'] = Blogs::where('category', 0)->get();
      return view('guest.blog', $data);
    }
    public function register()
    {
      $data['menu'] = 'register';
      $data['user'] = Session::get('user');
      return view('guest.register', $data);
    }
    public function registerStore(RegisterRequest $request){
      if(!$request->agree){
        return redirect()->back()->withErrors(["Register failed, you must agree the term and conditions"]);
      }
      else if($request->password !== $request->confirm_password){
        return redirect()->back()->withErrors(["Register failed, password doesn't match"]);
      }
      else{
        User::create(array(
          'name' => $request->name,
          'email' => $request->email,
          'password' => Hash::make($request->password),
          'photo' => 'default.png'
        ));
        return redirect()->back()->withSuccess(["Registration is successful, you can write whatever your story is, but don't tell a hoax"]);
      }
    }
    public function login()
    {
      $data['menu'] = 'login';
      $data['user'] = Session::get('user');
      return view('guest.login', $data);
    }
    public function loginAuth(LoginRequest $request){
      $user = User::where('email', $request->email)->get();
      if(count($user) > 0){
        $verify = Hash::check($request->password, $user[0]['password']);
        if ($verify) {
          Session::put('user',$user[0]);
          Session::put('login',TRUE);
          return redirect('/story');
        }else{
          return redirect()->back()->withErrors(['Login failed, Password wrong']);
        }
      }else{
        return redirect()->back()->withErrors(['Login failed, Email wrong']);
      }
    }
    public function show($id)
    {
        //
    }
    public function logout(){
      Session::flush();
      return redirect('/');
    }
}
