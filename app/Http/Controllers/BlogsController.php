<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Blog;
use App\BlogCategory;

class BlogsController extends Controller
{
    use AuthenticatesUsers;
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getCategory(){

        $category = BlogCategory::where('status', 1)->orderBy('blog_category_id', 'desc')->get();
        return response()->json([
            'categories' => $category
        ]); 
    }
    public function index()
    {
        return view('blogs.index');
    }
    public function media()
    {
        $datas      = Blog::where(['status' => 1, 'category_id' => 2])->orderBy('blog_id', 'desc')->paginate(5);
        $recent     = Blog::where(['status' => 1, 'category_id' => 2])->orderBy('blog_id', 'desc')->take(3)->get();

        return view('blogs.media.index', compact(['datas','recent']));
    }
    public function show(Blog $blog)
    {
        return view('blogs.new-reader-media.show', compact('blog'));
    }
    public function shownewsletters(Blog $blog, $slug)
    {
        $datas = Blog::where('slug', $slug)->get();    
        // dd($datas);
        return view('blogs.newsletters.show', compact('datas'));
    }
    public function mediashow(Blog $blog, $slug)
    {
        $datas = Blog::where('slug', $slug)->get();
        // dd($datas);    
        return view('blogs.media.show', compact('datas'));
    }
    public function newsletters()
    {
        $datas      = Blog::where(['status' => 1, 'category_id' => 4 ])->orderBy('blog_id', 'desc')->paginate(5);
        $recent     = Blog::where(['status' => 1, 'category_id' => 4])->orderBy('blog_id', 'desc')->take(3)->get();
        
        return view('blogs.newsletters.index', compact(['datas', 'recent']));
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/login');
    }
    protected function guard()
    {
        return Auth::guard();
    }
    public function upload(Request $request)
    {
        $imgpath = request()->file('upload')->store('uploaded', 'public');
        return response()->json(['location' => '/' . $imgpath]);
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $imgpath = request()->file('upload')->move(public_path('storage/blogs/newsletter'), $fileName);
            // $imgpath = request()->file('upload')->store('storage/blogs/newsletter', 'public');
            
            return response()->json(['location' => '/' . $imgpath]);
            /* $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/blogs/newsletter/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            
            @header('Content-type: text/html; charset=utf-8');
            echo $response; */
        }
    }
    public function newreadermedia()
    {
        $datas      = Blog::where(['status' => 1, 'category_id' => 1])->orderBy('blog_id', 'desc')->paginate(5);
        $recent     = Blog::where(['status' => 1, 'category_id' => 1])->orderBy('blog_id','desc')->take(3)->get();
        $categories = BlogCategory::where('status', 1)->orderBy('blog_category_id','desc')->get();

        return view('blogs.new-reader-media.index', compact(['datas', 'recent', 'categories']));    
    }
    public function store(Request $request)
    {
        $data = Blog::create([
                'image' => $request->input('image'),
                'category_id' => $request->input('category'),
                'title' => $request->input('title'),
                'meta_desc' => $request->input('meta_desc'),
                'body'  => $request->input('body'),
                'author'  => $request->input('author'), 
        ]);

        if ($request->expectsJson()) {
            return response()->json([
                    'data' => $data,
                    'message' => "Your blog has been submitted."
                ]);
        }
        return redirect('/')->with('success', "Your blog has been submitted.");

    }
}   
