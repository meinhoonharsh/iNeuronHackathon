<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\blog_category;
use App\Models\Pageview;
use App\Models\report;
use App\Models\subscriber;
use App\Models\User;
use Auth;
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

    public function page($page, $type = '', $id = '')
    {

        $p = new Pageview();
        if (Auth::check()) {
            $p->user = Auth::user()->id;
        }
        $p->page = $page;
        $p->type = $type;
        $p->ipaddress = request()->ip();
        $p->page_id = $id;
        $p->user_agent = request()->header('User-Agent');
        $p->save();
    }
    public function index()
    {
        return view('welcome');
        // return view('welcome',['blogs'=> blog::skip(0)->take(6)->latest('updated_at')->where('active',1)->get()]);
    }

    public function blogs(int $id = 0)
    {

        $blogs = blog::where('active', 1)->latest('updated_at')->paginate();
        $this->page('blogs');
        foreach ($blogs as $blog) {
            $blog->user = User::where('id', $blog->user)->first();
        }

        $data = [
            'blogs' => $blogs,
            'title1' => 'All Blogs',
            'title2' => 'All Blogs',
        ];
        // return $data;
        return view('pages/Oblogs', $data);
        // return $blogs;
    }

    public function blog($slug)
    {
        $blog = blog::where('slug', $slug)->first();
        $this->page($page = 'blog', $type = 'b', $id = $blog->id);
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
    {
        $q = $q ? $q : $req->q;
        $blogs = blog::where('active', 1)
            ->where(function ($query) use ($q) {
                $query->where('title', 'like', '%' . $q . '%')
                    ->orWhere('title', 'like', '%' . $q . '%')
                    ->orWhere('slug', 'like', '%' . $q . '%')
                    ->orWhere('category', 'like', '%' . $q . '%')
                    ->orWhere('tags', 'like', '%' . $q . '%')
                    ->orWhere('content', 'like', '%' . $q . '%');
            })
            ->paginate(12);

        foreach ($blogs as $blog) {
            $blog->user = User::where('id', $blog->user)->first();
        }

        $data = [
            'blogs' => $blogs,
            'title1' => ucfirst($q),
            'title2' => 'Got ' . $blogs->count() . ' Results',
        ];
        // return $data;

        return view('pages/blogs', $data);
    }

    public function tag(Request $req, $q)
    {

        $q = $q ? $q : $req->q;

        $blogs = blog::where('active', 1)
            ->where(function ($query) use ($q) {
                $query->where('tags', 'like', '%' . $q . '%');
            })
            ->paginate(12);

        foreach ($blogs as $blog) {
            $blog->user = User::where('id', $blog->user)->first();
        }

        $param = [
            'blogs' => $blogs,
            'title1' => 'Tag: ' . $q,
            'title2' => 'Got ' . count($blogs) . ' Results',
        ];
        return view('pages/blogs', $param);
        // return $blogs;
    }

    public function category(Request $req, $q)
    {
        $q = $q ? $q : $req->q;-
        $blogs = blog::where('active', 1)
            ->where(function ($query) use ($q) {
                $query->where('category', 'like', '%' . $q . '%');
            })
            ->paginate(12);

        foreach ($blogs as $blog) {
            $blog->user = User::where('id', $blog->user)->first();
        }

        $param = [
            'blogs' => $blogs,
            'title1' => 'Category: ' . blog_category::where('id', $q)->first()->name,
            'title2' => 'Got ' . count($blogs) . ' Results',
        ];
        return view('pages/blogs', $param);
        // return $blogs;
    }

}
