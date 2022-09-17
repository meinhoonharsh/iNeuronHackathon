<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\blog_category;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function myblogs()
    {
        $blogs = blog::where('user', Auth::id())->get();
        $param = ['blogs' => $blogs];
        return view('pages/ablogs', $param);
    }

    public function addblog()
    {
        $data = [
            "way" => 'Add',
            "categories" => blog_category::where('active', 1)->get(),
        ];
        return view('pages/editblog', $data);
        // return $param;
    }
    public function edit(int $id)
    {
        $blog = blog::where('id', $id)->first();
        if ($blog->user != Auth::id() || Auth::user()->role_id == 1) {
            return redirect(route('/myblogs'))->with('error', 'You are not allowed to edit this blog');
        }

        $data = [
            "blog" => $blog,
            "way" => 'Edit',
            "categories" => blog_category::where('active', 1)->get(),
        ];
        return view('pages/editblog', $data);
    }

    public function addblogtodb(Request $req)
    {
        $fileName = '';
        if (!empty($req->main_image) || $req->main_image != '') {
            $data = explode(';', $req->main_image);
            $part = explode("/", $data[0]);
            $image = $req->main_image; // your base64 encoded
            $image = str_replace('data:image/' . $part[1] . ';base64,', '', $image);
            $image = str_replace(' ', '+', $image);
            $fileName = md5(microtime()) . '.' . $part[1];
            Storage::disk('public')->put('/ft_img/' . $fileName, base64_decode($image));
            $fileName = '/public/uploads/ft_img/' . $fileName;
        }
        $blog = new blog;
        $blog->title = $req->title;
        $blog->user = Auth::id();
        $blog->slug = $req->slug;
        $blog->tags = $req->tags;
        $blog->category = $req->category;
        $blog->readtime = $req->readtime;
        $blog->active = ($req->active == 'on') ? 1 : 0;
        $blog->content = $req->content;
        $blog->image = $fileName;
        $blog->save();
        return redirect(route('edit', ['id' => $blog->id]))->with('success', 'Blog Added Successfully');
        // return $user->active;
    }

    public function editblog(int $id, Request $req)
    {
        $blog = blog::where('id', $id)->first();
        if ($blog->user != Auth::id()) {
            return redirect(route('myblogs'))->with('error', 'You are not allowed to edit this blog');
        }

        $fileName = '';
        if (!empty($req->main_image) || $req->main_image != '') {
            $data = explode(';', $req->main_image);
            $part = explode("/", $data[0]);
            $image = $req->main_image; // your base64 encoded
            $image = str_replace('data:image/' . $part[1] . ';base64,', '', $image);
            $image = str_replace(' ', '+', $image);
            $fileName = md5(microtime()) . '.' . $part[1];
            Storage::disk('public')->put('/ft_img/' . $fileName, base64_decode($image));
            $fileName = '/public/uploads/ft_img/' . $fileName;
        }

        $blog = blog::find($id);
        $blog->title = $req->title;
        $blog->user = Auth::id();
        $blog->slug = $req->slug;
        $blog->tags = $req->tags;
        $blog->category = $req->category;
        $blog->readtime = $req->readtime;
        $blog->active = ($req->active == 'on') ? 1 : 0;
        $blog->content = $req->content;
        if ($fileName) {
            $blog->image = $fileName;
        }
        $blog->save();
        return redirect(route('edit', ['id' => $blog->id]))->with('success', 'Blog Updated Successfully');
        // return $user->active;
    }

    public function changeBlogStatus(int $id)
    {
        $blog = blog::where('id', $id)->first();
        if ($blog->user != Auth::id()) {
            return redirect(route('myblogs'))->with('error', 'You are not allowed to edit this blog');
        }
        $blog = blog::find($id);
        $blog->active = !($blog->active);
        $blog->save();
        return redirect()->back()->with('success', 'Blog Status Changed Successfully');
    }

    // save user to

}
