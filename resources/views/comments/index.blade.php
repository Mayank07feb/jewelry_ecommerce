@extends('backend.layouts.master')
@section('title','post || post')
@section('main-content')
    <!-- DataTales Example -->
{{--    <div class="card shadow mb-4">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                @include('backend.layouts.notification')--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card-header py-3">--}}
{{--            <h6 class="m-0 font-weight-bold text-primary float-left">post</h6>--}}
{{--            <a href="{{route('comments.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add comments</a>--}}
{{--        </div>--}}

{{--        <div class="container mt-5">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header bg-primary text-white">--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <h1>comments</h1>--}}
{{--                                <a href="{{route('comments.create')}}" class="btn btn-light">Create comments </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card-body">--}}
{{--                            <form action="" method="GET" class="mb-4">--}}
{{--                                <div class="input-group">--}}
{{--                                    <input type="text" name="keyword" class="form-control" placeholder="Search...">--}}
{{--                                    <div class="input-group-append">--}}
{{--                                        <button type="submit" class="btn btn-primary">Search</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}

{{--                            <div class="table-responsive">--}}
{{--                                <table class="table table-bordered ">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th>Title</th>--}}
{{--                                        <th>Category</th>--}}
{{--                                        <th>Author</th>--}}
{{--                                        <th>Summary</th>--}}
{{--                                        <th>Status</th>--}}
{{--                                        <th>Tags</th>--}}
{{--                                        <th>Photo</th>--}}
{{--                                        <th>Actions</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    @forelse($commentsData as $comments)--}}
{{--                                        <tr>--}}
{{--                                            <td>{{ $comments->title }}</td>--}}
{{--                                            <td>{{ $comments->category->title ?? 'No Category' }}</td>--}}
{{--                                            <td>{{ $comments->user->first_name ?? 'Unknown' }}</td>--}}
{{--                                            <td>{{ Str::limit($comments->summary, 50) }}</td>--}}
{{--                                            <td>{{ ucfirst($comments->status) }}</td>--}}
{{--                                            <td>{{ $comments->tags }}</td>--}}
{{--                                            <td>--}}
{{--                                                @if($comments->photo)--}}
{{--                                                    <img src="{{ asset('storage/' . $comments->photo) }}" alt="{{ $comments->title }}" width="100">--}}
{{--                                                @else--}}
{{--                                                    No Image--}}
{{--                                                @endif--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                --}}{{----}}{{--                                                <a href="{{ route('comments.show', $comments->id) }}" class="btn btn-info btn-sm">View</a>--}}
{{--                                                <a href="{{ route('comments.edit', $comments->id) }}" class="btn btn-warning btn-sm">Edit</a>--}}

{{--                                                <!-- Delete Button -->--}}
{{--                                                <form action="{{ route('comments.delete', $comments->id) }}" method="POST" style="display:inline;">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('DELETE')--}}
{{--                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this comments?')">Delete</button>--}}
{{--                                                </form>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    @empty--}}
{{--                                        <tr>--}}
{{--                                            <td colspan="8" class="text-center">No commentss found.</td>--}}
{{--                                        </tr>--}}
{{--                                    @endforelse--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card-footer">--}}
{{--                            {{$commentsData->links()}}--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="container">
        <h1>Comments for Post: {{ $post->title }}</h1>

        <!-- Display Success Messages -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Display Comments Table -->
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>User</th>
                <th>Comment</th>
                <th>Replied Comment</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($comments as $comment)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $comment->user->name ?? 'Guest' }}</td>
                    <td>{{ $comment->comment }}</td>
                    <td>{{ $comment->replied_comment ?? 'N/A' }}</td>
                    <td>
                        <span class="badge bg-{{ $comment->status == 'active' ? 'success' : 'danger' }}">
                            {{ ucfirst($comment->status) }}
                        </span>
                    </td>
                    <td>
                        <!-- Edit Button -->
                        <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <!-- Delete Button -->
{{--                        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display: inline-block;">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this comment?');">Delete</button>--}}
{{--                        </form>--}}
                    </td>
                </tr>

                <!-- Display Replies -->
                @if($comment->replies->count())
                    @foreach ($comment->replies as $reply)
                        <tr>
                            <td></td>
                            <td>{{ $reply->user->name ?? 'Guest' }}</td>
                            <td class="ps-4">↳ {{ $reply->comment }}</td>
                            <td>{{ $reply->replied_comment ?? 'N/A' }}</td>
                            <td>
                                <span class="badge bg-{{ $reply->status == 'active' ? 'success' : 'danger' }}">
                                    {{ ucfirst($reply->status) }}
                                </span>
                            </td>
                            <td>
                                <!-- Edit Reply Button -->
                                <a href="{{ route('comments.edit', $reply->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                <!-- Delete Reply Button -->
{{--                                <form action="{{ route('comments.destroy', $reply->id) }}" method="POST" style="display: inline-block;">--}}
{{--                                    @csrf--}}
{{--                                    @method('DELETE')--}}
{{--                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this reply?');">Delete</button>--}}
{{--                                </form>--}}
                            </td>
                        </tr>
                    @endforeach
                @endif
            @empty
                <tr>
                    <td colspan="6" class="text-center">No comments found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        <!-- Add New Comment Button -->
        <a href="{{ route('comments.create', ['post_id' => $post->id]) }}" class="btn btn-primary">Add New Comment</a>
    </div>
@endsection




