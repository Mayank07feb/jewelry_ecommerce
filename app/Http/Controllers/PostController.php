<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCategoryRequest;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $post = Post::query();

        if (!empty($keyword)) {
            $post->where('title', 'like', "%$keyword%");
        }
        $postData = $post->paginate(5);

        return view('post.index',compact('postData'));
    }

    public function create(){
        $categories = \App\Models\PostCategory::all();
        return view('post.create',compact('categories'));
    }

    public function store(PostRequest $request)
    {
        // Add the authenticated user's ID manually to the request data
        $data = $request->all();
        $data['added_by'] = auth()->id(); // Add the authenticated user ID
//        dd($data);
        // Create the post without the photo first
        $post = Post::create($data);

        // Handle the photo upload if a file was provided
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('public/post');
            // Remove 'public/' from the file path and save it to the post
            $post->photo = str_replace('public/', '', $photo);
            $post->save();
        }

        // Redirect to the post index with a success message
        return redirect()->route('post.index')->with('success', 'Post created successfully.');
    }


    public function edit(Post $post){
        $categories =PostCategory::all();
        return view('post.edit',compact('post','categories'));
    }

    public function update(PostRequest $request, $id)
    {
        // Find the post by ID
        $post = Post::findOrFail($id);

        // Update the post with the validated data from the request
        $data = $request->all();
        $data['added_by'] = auth()->id(); // Assuming the current user is editing the post

        // If a new photo is uploaded, handle the photo upload
        if ($request->hasFile('photo')) {
            // Delete the old photo if it exists
            if ($post->photo && \Storage::exists('public/' . $post->photo)) {
                \Storage::delete('public/' . $post->photo);
            }

            // Store the new photo and update the photo path in the database
            $photo = $request->file('photo')->store('public/post');
            $data['photo'] = str_replace('public/', '', $photo);
        }

        // Update the post with the new data
        $post->update($data);

        // Redirect to the posts index page with a success message
        return redirect()->route('post.index')->with('success', 'Post updated successfully.');
    }



    public function delete(Post $post){
        $post->delete();
        return redirect()->route('post.index')->with('error','Successfully  post items deleted');

    }
    public function duplicate(Post $post){
        $productDuplicate=$post->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
