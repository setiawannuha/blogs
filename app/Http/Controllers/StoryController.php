<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Http\Requests\BlogsRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class StoryController extends Controller
{
    public function index()
    {
      $user = Session::get('user');
      $data['data'] = Blogs::where('users_id', $user->id)->get();
      $data['user'] = Session::get('user');
      $data['menu'] = "my_story";
      return view('story.index', $data);
    }
    public function create()
    {
      $data['menu'] = "my_story";
      $data['user'] = Session::get('user');
      return view('story.create', $data);
    }
    public function store(BlogsRequest $request)
    {
      if($request->file('banner')){
        $extname = $request->file('banner')->extension();
        $image = date('YmdHis').'.'.$extname;
        $upload = $request->file('banner')->storeAs(
          'public/images/blogs', $image
        );
      }else{
        $image = 'default.jpeg';
      }
      $user = Session::get('user');
      $store = Blogs::create(array(
        'title' => $request->title,
        'category' => $request->category,
        'content' => $request->content,
        'tags' => $request->tags,
        'banner' => $image,
        'users_id' => $user->id
      ));
      return redirect()->route('story.index');
    }
    public function show($id)
    {
      $data['menu'] = "my_story";
      $data['user'] = Session::get('user');
      $blog = Blogs::where('id', $id)->with('users')->get();
      if(count($blog) < 1){
        return abort(404);
      }else{
        $data['data'] = $blog;
        return view('story.detail', $data);
      }
    }
    public function edit($id)
    {
      $data['data'] = Blogs::find($id);
      $data['user'] = Session::get('user');
      $data['menu'] = "my_story";
      return view('story.edit', $data);
    }
    public function update(BlogsRequest $request, $id)
    {
      $blog = Blogs::find($id);
      if($request->file('banner')){
        $extname = $request->file('banner')->extension();
        $image = date('YmdHis').'.'.$extname;
        $upload = $request->file('banner')->storeAs(
          'public/images/blogs', $image
        );
        Storage::delete('public/images/blogs/'.$blog->image);
      }else{
        $image = $blog->banner;
      }
      $store = Blogs::find($id)->update(array(
        'title' => $request->title,
        'category' => $request->category,
        'content' => $request->content,
        'tags' => $request->tags,
        'banner' => $image,
      ));
      return redirect()->route('story.index');
    }
    public function destroy($id)
    {
      $blog = Blogs::find($id);
      Storage::delete('public/images/blogs/'.$blog->image);
      Blogs::where('id', $id)->delete();
      return redirect()->route('story.index');
    }
}
