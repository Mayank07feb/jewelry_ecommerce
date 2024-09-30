<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index(){
        $pages= Page::all();
        return view('backend.page.index', compact('pages'));
    }

    public function create(){
        return view('backend.page.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->title);
        if (Page::where('slug', $slug)->exists()){
            $slug = $slug.'-'.date('Ymdis').'-'.rand(0, 999);
        }
        $data['slug'] = $slug;
        $status = Page::create($data);
        if($status){
            request()->session()->flash('success', 'Page created successfully');
        }else{
            request()->session()->flash('error', 'Failed, Try again!');
        }
        return redirect('page');
    }

    public function edit(Page $page){
        return view('backend.page.edit', compact('page'));
    }

    public function update(Request $request, Page $page){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $status = $page->update($request->all());
        if($status){
            request()->session()->flash('success', 'Page updated successfully');
        }
        else{
            request()->session()->flash('error', 'Failed, Try again!');
        }
        return redirect('page');
    }

    public function delete(Page $page){
        $status = $page->delete();
        if ($status){
            request()->session()->flash('success', 'Page Deleted successfully');
        }else{
            request()->session()->flash('error', 'Failed, Try again!');
        }
        return back();
    }
}
