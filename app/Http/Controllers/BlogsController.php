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
        // $this->middleware('auth');
        
    }

    public function adminmedia()
    {
        return view('admin.blogs.media.media');
    }
    public function adminnmagazine()
    {
        return view('admin.blogs.nmagazine.nmagazine');
    }
    public function adminreviews()
    {
        return view('admin.blogs.reviews.reviews');
    }
    public function adminnwritingtips()
    {
        return view('admin.blogs.newsletters.newsletters');
    }
    public function showadminmedia(Blog $blog){
        return response()->json([
            'data' => $blog
        ]); 
        // return view('admin.blogs.media.edit', compact('blog'));
    }
    
    public function updateblog(Request $request, Blog $blog){
        $blog->status = $request->status;
        $blog->save();

        if ($request->expectsJson()) {
            return response()->json([
                'data' => $blog,
                'message' => '`'.$blog->title.'` '."blog have been inactive."
            ]);
        }
        return redirect()->route('admin.media');
    }
    
    public function approve(Request $request, Blog $blog){
        $blog->post_status = $request->post_status;
        $blog->save();

        if ($request->expectsJson()) {
            return response()->json([
                'data' => $blog,
                'message' => '`'.$blog->title.'` '."blog have been approve."
            ]);
        }
        return redirect()->route('admin.media');
    }
    public function getmedia(Request $request){
        $blog = Blog::where([
            'status'            => 1, 
            'category_id'       => $request->category_id, 
            'post_status'       => $request->post_status])
            ->orderBy('blog_id', 'desc')
            ->paginate(7);
            
        return response()->json([
            'data' => $blog
        ]); 
    }
    public function getCategory(){

        $category = BlogCategory::where('status', 1)->orderBy('category_id', 'desc')->get();
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
        $datas      = Blog::where(['status' => 1, 'category_id' =>2, 'post_status' => 4])->orderBy('blog_id', 'desc')->paginate(5);
        $recent     = Blog::where(['status' => 1, 'category_id' =>2, 'post_status' => 4])->orderBy('blog_id', 'desc')->take(3)->get();

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
        $datas      = Blog::where(['status' => 1, 'category_id' => 4, 'post_status' => 4 ])->orderBy('blog_id', 'desc')->paginate(5);
        $recent     = Blog::where(['status' => 1, 'category_id' => 4, 'post_status' => 4])->orderBy('blog_id', 'desc')->take(3)->get();
        
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
        
        /* $folder = uniqid();
        if (!\Storage::exists($folder)) {
            \Storage::disk('posts')->makeDirectory($folder);
        }

        $imgpath = \Storage::disk('posts')->put($folder, request()->file('file'))->store('uploaded', 'public');

        return \Response::json(['folder' => $folder, 'location' => '/storage/blogs/posts/' . $imgpath]);
        
        $imgpath = request()->file('file')->store('uploaded', 'public');
        return response()->json(['location' => '/' . $imgpath]);
         */
        if ($request->hasFile('file')) {
            $originName = $request->file('file')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $imgpath = request()->file('file')->move(public_path('storage/blogs/newsletter'), $fileName);
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
    public function reviews()
    {
        $datas      = Blog::where(['status' => 1, 'category_id' => 3, 'post_status' => 4])->orderBy('blog_id', 'desc')->paginate(1);
        // $recent     = Blog::where(['status' => 1, 'category_id' => 3, 'post_status' => 4])->orderBy('blog_id','desc')->take(3)->get();
        // $categories = BlogCategory::where('status', 1)->orderBy('category_id','desc')->get();

        return view('blogs.reviews.index', compact('datas')); 
    }
    public function newreadermedia()
    {
        $datas      = Blog::where(['status' => 1, 'category_id' =>1, 'post_status' => 4])->orderBy('blog_id', 'desc')->paginate(5);
        $recent     = Blog::where(['status' => 1, 'category_id' =>1, 'post_status' => 4])->orderBy('blog_id','desc')->take(3)->get();
        $categories = BlogCategory::where('status', 1)->orderBy('category_id','desc')->get();

        return view('blogs.new-reader-media.index', compact(['datas', 'recent', 'categories']));    
    }
    public function formSubmit(Request $request)
    {
        $imageName = '';
        if($request->image != "null"){
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $path = $request->category == 1 ? 'nmagazine': ($request->category == 2 ? 'media': ($request->category == 3 ? 'reviews': 'newsletter'));
            $request->image->move(public_path('storage/blogs/'. $path), $path.$imageName);
        }
        $data = Blog::create([
            'image' => ($request->image != "null" ? $path.$imageName : 'nrmedia-logo2.png'),
            'category_id' => $request->category,
            'title' => $request->title,
            'meta_desc' => $request->meta_desc,
            'body'  => $request->body,
            'author'  => $request->author,
            'posted_by'  => auth()->id(),
        ]);
        if ($request->expectsJson()) {
            return response()->json([
                    'data' => $data,
                    'message' => "Your blog has been submitted."
                ]);
        }
    }
    /* public function store(Request $request)
    {
        $data = Blog::create([
                'image' => $request->input('image'),
                'category_id' => $request->input('category'),
                'title' => $request->input('title'),
                'meta_desc' => $request->input('meta_desc'),
                'body'  => $request->input('body'),
                'author'  => $request->input('author'), 
                'posted_by'  => auth()->id(), 
        ]);

        return redirect('/');

    } */

}   
