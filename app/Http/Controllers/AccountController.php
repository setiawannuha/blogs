<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function detail(){
      $user = Session::get('user');
      $data['user'] = $user;
      $data['menu'] = 'account';
      $data['data'] = $user;
      return view('account.detail', $data);
    }
    public function update(Request $request, $id){
      $user = User::find($id);
      if($request->file('photo')){
        $extname = $request->file('photo')->extension();
        $image = date('YmdHis').'.'.$extname;
        $upload = $request->file('photo')->storeAs(
          'public/images/photo', $image
        );
        if($user->photo !== 'default.png'){
          Storage::delete('public/images/photo/'.$user->photo);
        }
      }else{
        $image = $user->photo;
      }
      User::where('id', $id)->update(array(
        'name' => $request->name,
        'email' => $request->email,
        'bio' => $request->bio,
        'photo' => $image,
        'link_instagram' => $request->link_instagram,
        'link_facebook' => $request->link_facebook,
        'link_twitter' => $request->link_twitter,
      ));
      $user = User::find($id);
      Session::put('user', $user);
      return redirect('/account');
    }
}
