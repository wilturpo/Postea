<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use Datetime;
use Jenssegers\Mongodb\Eloquent\Model;
use Carbon\Carbon;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Jenssegers\Mongodb\Auth\User as Authenticatable;
//use Illuminate\Foundation\Auth\User as Authenticatable;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }
    /*
    public function index(){
        $publicaciones = Post::all();
        return view('posts.index', compact('publicaciones'));
    }*/

    //$user_dispatches = Disspath::paginate(8);
    public function index(){
        $publicaciones = Post::simplePaginate(10);
        return view('posts.index', compact('publicaciones'));
    }
    

    public function create(){
        return view('posts.create');
    }

    public function show($id){
        return view('posts.postUnico',['post' => Post::find($id)]);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required:max:120',
            'image' => 'required|image|mimes:jpeg,png,jpg|:max2048',
            'content' => 'required:max:2200',
        ]);

        //$image = $request->file('image');
        $imageName = $request->file('image')->store('posts/'.Auth::id(),'public');
        $title = $request->get('title');
        $content = $request->get('content');

        $post = $request->user()->posts()->create([
            'title'=>$title,
            'image'=>$imageName,
            //'image'=>'storage/'.$imageName,
            'content'=>$content,
        ]);

        //$request->image->move(public_path('img'),$imageName);

        return redirect()->route('post',['id' => $post->id]);
    }

    public  function userPosts(){
        $user_id = Auth::id();
        $publicaciones = Post::where('user_id','=',$user_id)->get();
        return view('posts.myPosts',compact('publicaciones'));
    }

    public function delete(Request $request){
        $id = $request->get('id');
        $post = Post::find($id);
        $post->delete();
    }
}

/*
public function index(){
        $posts = Post::all();
        return view('index', compact('posts'));
        //return view('postUnico2');
    }

    public function show($id){
        $resultado = Post::find($id);
        return view('postUnico', ['post'=>$resultado]);
    }

    public function comentarios(){
        return view('home2');
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required:max:120',
            'image' => 'required|image|mimes:jpeg,png,jpg|:max2048',
            'content' => 'required:max:2200',
        ]);

        $image = $request->file('image');
        $imageName = time().$image->getClientOriginalName();
        $title = $request->get('title');
        $content = $request->get('content');

        $post = new Post();
        $post->title = $title;
        $post->image = 'img/' . $imageName;
        $post->content = $content;
        $post->save();

        $request->image->move(public_path('img'), $imageName);
        
        return redirect()->route('post', ['id' => $post->id]);
    }
    
    
    public function today() 
    {
        $today = Carbon::today();
        $tomorrow = Carbon::tomorrow();
        $posts= Post::whereBetween('created_at',[$today, $tomorrow])
                    ->orderBy('_id')
                    ->get();
        return view('today', compact('posts', 'today'));
    }
    
*/