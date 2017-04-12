<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\interfaces\PostInterface as PostInterface;

class PostController extends Controller
{
    private $post;

    public function __construct(PostInterface $post){
    $this->post = $post;

    $this->middleware('auth', ['except' => ['index', 'show']]  );

     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      $posts = $this->post->latestPosts(3);
      return view('mainpage',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('create-blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validatePost($request);
        $this->post->createPost(

            auth()->user()->id,
            request('title'),
            request('entry')

            );

        session()->flash('message','Blog has been posted successfully!');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = $this->post->findById($id);
        return view('view-specific-entry',compact('post'));
    }

    public function addComment($id)
    {
        $this->post->addComment(

             auth()->id(),
             $id,
             request('body')

            );

        session()->flash('message','Comment added successfully!');
        return back();
    }

    private function validatePost($request){
        $this->validate($request,
            [
            'title' => 'bail|required|max:25',
            'entry' => 'required'
            ]
        );
    }

}
