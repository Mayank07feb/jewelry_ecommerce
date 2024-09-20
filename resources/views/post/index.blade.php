@extends('backend.layouts.master')
@section('title','post || post')
@section('main-content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="row">
            <div class="col-md-12">
                @include('backend.layouts.notification')
            </div>
        </div>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary float-left">post</h6>
            <a href="{{route('post.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add post</a>
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <h1>post</h1>
                                <a href="{{route('post.create')}}" class="btn btn-light">Create post </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="" method="GET" class="mb-4">
                                <div class="input-group">
                                    <input type="text" name="keyword" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </form>

                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Summary</th>
                                        <th>Status</th>
                                        <th>Tags</th>
                                        <th>Photo</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($postData as $post)
                                        <tr>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->category->title ?? 'No Category' }}</td>
                                            <td>{{ $post->user->first_name ?? 'Unknown' }}</td>
                                            <td>{{ Str::limit($post->summary, 50) }}</td>
                                            <td>{{ ucfirst($post->status) }}</td>
                                            <td>{{ $post->tags }}</td>
                                            <td>
                                                @if($post->photo)
                                                    <img src="{{ asset('storage/' . $post->photo) }}" alt="{{ $post->title }}" width="100">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>
{{--                                                <a href="{{ route('post.show', $post->id) }}" class="btn btn-info btn-sm">View</a>--}}
                                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                                <!-- Delete Button -->
                                                <form action="{{ route('post.delete', $post->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">No posts found.</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer">
                            {{$postData->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




