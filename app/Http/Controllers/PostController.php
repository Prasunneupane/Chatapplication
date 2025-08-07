<?php

namespace App\Http\Controllers;


use App\Services\PostServices;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function __construct(public PostServices $postServices){

    }

    public function index(){
        // Retrieve all posts using the repository
        $posts = $this->postServices->getAllPosts();
        return view('admin.post.index', compact('posts'));
    }

    public function create(){
        // Logic to show the form for creating a new post
        return view('admin.post.create_post');
    }

    public function store(Request $request){

        $data =['title' => $request->title, 'description' => $request->content];
        // dd($data);
        // Create a new post using the repository
        $post = $this->postServices->createPost($data);
        return redirect()->route('post.index')->with('success','Post Created Successfully');
    }

    public function edit($id){
        // Logic to show the form for editing a post
        // You can retrieve the post by ID and pass it to the view
        $post = $this->postServices->getPostById($id);
        // dd($post);
        return view('admin.post.edit_post', compact('post'));
    }

    public function update(Request $request){
        $data =['title'=> $request->title,'description'=> $request->content];
        $id = (int)$request->id;
        // dd($id);
        $post = $this->postServices->updatePost($data,$id);
        return redirect()->route('post.index')->with('success','Post Updated Successfully');
    }

    public function destroy(Request $request){
        // Logic to delete a post
        // You can retrieve the post by ID and delete it using the repository
        $id = (int) $request->id;
        // dd($id);
        $this->postServices->deletePost($id);
        return redirect()->route('post.index')->with('success','Post Deleted Successfully');
    }

    
}
