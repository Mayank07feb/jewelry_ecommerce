<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCategoryRequest;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{

    public function index(Request $request){
        $keyword = $request->input('keyword');
        $postCategory = PostCategory::query();

        if (!empty($keyword)) {
            $postCategory->where('title', 'like', "%$keyword%");
        }
        $postCategoryData = $postCategory->paginate(5);

        return view('postCategory.index',compact('postCategoryData'));
    }

    public function create(){

        return view('postCategory.create');
    }

    public function store(PostCategoryRequest $request){
//        dd($request);

        $postCategory=PostCategory::create($request->all());
//        $image = $request->file('image')->store('public/postCategory');

//        $postCategory->image = str_replace('public/', '', $image);
//        $postCategory->save();
        return redirect()->route('postCategory.index')->with('success', 'PostCategory  created successfully.');
    }

    public function edit(PostCategory $postCategory){

        return view('postCategory.edit',compact('postCategory'));
    }

    public function update(PostCategory $postCategory , PostCategoryRequest $request){
        $postCategoryData = $request->all();

//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/postCategory');
//            $postCategoryData['image'] = str_replace('public/', '', $imagePath);
//        }

        $postCategory->update($postCategoryData);

        return redirect()->route('postCategory.index')->with('success', 'postCategory item successfully updated');
    }


    public function delete(PostCategory $postCategory){
        $postCategory->delete();
        return redirect()->route('postCategory.index')->with('error','Successfully  postCategory items deleted');

    }
    public function duplicate(PostCategory $postCategory){
        $productDuplicate=$postCategory->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }

}
