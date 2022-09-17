<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\blog_category;
use App\Models\blog_subcategory;
use App\Models\report;
use App\Models\subscriber;
use App\Models\User;
use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
    //  * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
        // return view('welcome',['blogs'=> blog::skip(0)->take(6)->latest('updated_at')->where('active',1)->get()]);
    }

    public function blogs(int $id = 0)
    {

        $blogs = blog::where('active', 1)->latest('updated_at')->paginate();
        foreach ($blogs as $blog) {
            $blog->user = User::where('id', $blog->user)->first();
        }

        $data = [
            'blogs' => $blogs,
            'title1' => 'All Blogs',
            'title2' => 'All Blogs',
        ];
        // return $data;
        return view('pages/blogs', $data);
        // return $blogs;
    }

    public function blog($slug)
    {
        $blog = blog::where('slug', $slug)->first();
        $blog->user = User::where('id', $blog->user)->first();
        $data = [
            'blog' => $blog,
            'title1' => $blog->title,
            'title2' => $blog->title,
        ];

        return view('pages/blog', $data);
    }
    public function addsubscriber(Request $req)
    {
        $subscriber = new subscriber;
        $subscriber->email = $req->get('email');
        $subscriber->save();
        $to_name = "My Name";
        $to_email = $req->get('email');
        $data = [
            "title" => "Random NAme - Title",
            "url" => "This is just a random message",
        ];
        Mail::send('mail.contactmail', $data, function ($message) use ($to_email) {
            $message->to($to_email)
                ->from('iamtest@gmail.com', 'Test Name');
            $message->subject('Subject');
        });

        // Mail::to($to_email)->send(new Subscribe($data));
        return redirect($req->get('route'))->with('success', 'Email has been added Successfully');
        // echo $to_email;
        // return new Subscribe();
    }
    public function bookmark(Request $req)
    {
        $to_email = $req->get('email');
        $data = [
            "id" => $req->get('id'),
        ];
        Mail::send('mail.contactmail', $data, function ($message) use ($to_email) {
            $message->to($to_email)
                ->from('iamtest@gmail.com', 'Test Name');
            $message->subject('Subject');
        });

        return redirect($req->get('route'))->with('success', 'Insight has been Bookmarked');
    }
    public function report(Request $req)
    {
        $report = new report;
        $report->name = $req->get('name');
        $report->email = $req->get('email');
        $report->report = $req->get('report');
        $report->save();
        return redirect($req->get('route'))->with('success', 'Report has been Registered Successfully');
    }

    public function search(Request $req, $q = "")
    {$q = $q ? $q : $req->q;
        $id = $req->n;
        $noofblogs = 12;
        if ($id == 0) {
            $prev = 0;
        } else {
            $prev = 1;
        }

        function make($id, $noofblogs, $q)
        {
            return blog::where('active', 1)
                ->join('users', 'blogs.author', '=', 'users.id')
                ->select('blogs.*', 'users.id as authorid', 'users.name as authorname')
                ->where(function ($query) use ($q) {
                    $query->where('title', 'like', '%' . $q . '%')
                        ->orWhere('title', 'like', '%' . $q . '%')
                        ->orWhere('slug', 'like', '%' . $q . '%')
                        ->orWhere('category', 'like', '%' . $q . '%')
                        ->orWhere('subcategory', 'like', '%' . $q . '%')
                        ->orWhere('tags', 'like', '%' . $q . '%')
                        ->orWhere('content', 'like', '%' . $q . '%');

                })
                ->skip($id * $noofblogs)
                ->take($noofblogs)
                ->latest('updated_at');
        }
        $blogs = make($id, $noofblogs, $q)->get();
        $next = blog::where('active', 1)->skip(($id + 1) * $noofblogs)->take($noofblogs)->latest('updated_at')->count();
        $param = [
            'blogs' => $blogs,
            'prev' => $prev,
            'next' => $next,
            'id' => $id,
            'title1' => $q,
            'title2' => 'Got ' . count($blogs) . ' Results',
        ];
        return view('pages/blogs', $param);
        // return $blogs;
    }

    public function tag(Request $req, $q)
    {$q = $q ? $q : $req->q;
        $id = $req->n;
        $noofblogs = 12;
        if ($id == 0) {
            $prev = 0;
        } else {
            $prev = 1;
        }

        function make($id, $noofblogs, $q)
        {
            return blog::where('active', 1)
                ->where(function ($query) use ($q) {
                    $query->where('tags', 'like', '%' . $q . '%');

                })
                ->skip($id * $noofblogs)
                ->take($noofblogs)
                ->latest('updated_at');
        }
        $blogs = make($id, $noofblogs, $q)->get();
        $next = blog::where('active', 1)->skip(($id + 1) * $noofblogs)->take($noofblogs)->latest('updated_at')->count();
        $param = [
            'blogs' => $blogs,
            'prev' => $prev,
            'next' => $next,
            'id' => $id,
            'title1' => 'Tag: ' . $q,
            'title2' => 'Got ' . count($blogs) . ' Results',
        ];
        return view('pages/blogs', $param);
        // return $blogs;
    }

    public function category(Request $req, $q)
    {
        $q = $q ? $q : $req->q;
        $id = $req->n;
        $noofblogs = 12;
        if ($id == 0) {
            $prev = 0;
        } else {
            $prev = 1;
        }

        function make($id, $noofblogs, $q)
        {
            return blog::where('active', 1)
                ->where(function ($query) use ($q) {
                    $query->where('category', '=', $q);

                })
                ->skip($id * $noofblogs)
                ->take($noofblogs)
                ->latest('updated_at');
        }
        $blogs = make($id, $noofblogs, $q)->get();
        $next = blog::where('active', 1)->skip(($id + 1) * $noofblogs)->take($noofblogs)->latest('updated_at')->count();
        $param = [
            'blogs' => $blogs,
            'prev' => $prev,
            'next' => $next,
            'id' => $id,
            'title1' => 'Category: ' . blog_category::where('id', $q)->first()->name,
            'title2' => 'Got ' . count($blogs) . ' Results',
        ];
        return view('pages/blogs', $param);
        // return $blogs;
    }

    public function subcategory(Request $req, $q)
    {
        // $q = $q? $q : $req->q;
        $id = $req->n;
        $noofblogs = 12;
        if ($id == 0) {
            $prev = 0;
        } else {
            $prev = 1;
        }

        function make($id, $noofblogs, $q)
        {
            return blog::where('active', 1)
                ->where(function ($query) use ($q) {
                    $query->where('subcategory', '=', $q);

                })
                ->skip($id * $noofblogs)
                ->take($noofblogs)
                ->latest('updated_at');
        }
        $blogs = make($id, $noofblogs, $q)->get();
        $next = blog::where('active', 1)->skip(($id + 1) * $noofblogs)->take($noofblogs)->latest('updated_at')->count();
        $param = [
            'blogs' => $blogs,
            'prev' => $prev,
            'next' => $next,
            'id' => $id,
            'title1' => 'Subcategory: ' . blog_subcategory::where('id', $q)->first()->sname,
            'title2' => 'Got ' . count($blogs) . ' Results',
        ];
        return view('pages/blogs', $param);
        // return $blogs;
    }

}