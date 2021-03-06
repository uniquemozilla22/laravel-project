<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetching all the elequonts 
        // $posts= Post::orderBy('title','desc')->get(); fetching the data through orders

        // $post =Post ::where('title','two')->get(); to get the data by title having the 'two' as in

        // $posts = Post::all(); getting tall the datas randomly

        // $posts= DB::select('SELECT * FROM posts'); getting all the datas by the help of query


        $posts = Post::orderBy('created_at','desc')->paginate(3);


        // Returning the page  that has been created
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);

        // Creating the post in the database

        $post = new Post;
        
        $post->title = $request->input('title');
        $post->body= $request->input('body');
        $post->save();

        return redirect('./posts')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id);

        return view('posts.show')->with('posts',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post= Post::find($id);
        return view('posts.edit')->with('posts',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //tHIS IS THE SAME AS CREATING WE JUST REPLACE THE VALUE by finding the ID

        
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);

        // Updating the post in the database

        $post =  Post::find($id);
        
        $post->title = $request->input('title');
        $post->body= $request->input('body');
        $post->save();

        return redirect('./posts')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //It takes the id and destroys the id from the database method 1(Self Done)

        // $posts= DB::delete("DELETE FROM posts WHERE id = $id");

        // if($posts)
        // {
        //     return redirect('./posts')->with('success','Post Deleted');

        // }
        // else{
        // return redirect('./posts')->with('error','Post not removed');

        // }

            // Guided Method of doing the delete(Method 2) By finding the ID 
        $posts=Post::find($id);
        $posts->delete();
        return redirect('./posts')->with('success','Post Deleted');

        

        
    }
}
