<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostComment;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
//    public function index(Request $request){
//        $keyword = $request->input('keyword');
//        $comments = PostComment::query();
//
//        if (!empty($keyword)) {
//            $comments->where('title', 'like', "%$keyword%");
//        }
//        $commentsData = $comments->paginate(5);
//
//        return view('comments.index',compact('commentsData'));
//    }


    public function index($postId)
    {
        $post = Post::findOrFail($postId);
        $comments = $post->comments()->with('user', 'replies')->get();

        return view('comments.index', compact('post', 'comments'));
    }


    public function create($postId)
    {
        // Find the post for which the comment is being added
        $post = Post::findOrFail($postId);

        return view('comments.create', compact('post'));
    }

    public function store(CommentRequest $request)
    {
        // Get validated data
        $data = $request->validated();
        $data['user_id'] = auth()->id();  // Optionally associate the logged-in user

        // Create the comment
        PostComment::create($data);
        return redirect()->back()->with('success', 'Comment added successfully.');

//        return redirect()->route('posts.show', $request->post_id)->with('success', 'Comment added successfully.');
    }



    public function edit(PostComment $comments){
//        $categories =PostCommentCategory::all();
        return view('comments.edit',compact('comments'));
    }

    public function update(CommentRequest $request, $id)
    {
        // Find the comments by ID
        $comments = PostComment::findOrFail($id);

        // Update the comments with the validated data from the request
        $data = $request->all();
        $data['added_by'] = auth()->id(); // Assuming the current user is editing the comments

        // If a new photo is uploaded, handle the photo upload
        if ($request->hasFile('photo')) {
            // Delete the old photo if it exists
            if ($comments->photo && \Storage::exists('public/' . $comments->photo)) {
                \Storage::delete('public/' . $comments->photo);
            }

            // Store the new photo and update the photo path in the database
            $photo = $request->file('photo')->store('public/comments');
            $data['photo'] = str_replace('public/', '', $photo);
        }

        // Update the comments with the new data
        $comments->update($data);

        // Redirect to the commentss index page with a success message
        return redirect()->route('comments.index')->with('success', 'PostComment updated successfully.');
    }



    public function delete(PostComment $comments){
        $comments->delete();
        return redirect()->route('comments.index')->with('error','Successfully  comments items deleted');

    }
    public function duplicate(PostComment $comments){
        $productDuplicate=$comments->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
