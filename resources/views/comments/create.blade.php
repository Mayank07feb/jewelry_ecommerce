@extends('backend.layouts.master')
@section('title','post || post')
@section('main-content')
    <h1>Add Comment</h1>

    <form action="{{ route('comments.store') }}" method="POST">
        @csrf

        <!-- Post ID -->
        <input type="hidden" name="post_id" value="{{ $post->id }}">

        <!-- Comment Text -->
        <div class="form-group mb-3">
            <label for="comment">Comment</label>
            <textarea name="comment" id="comment" class="form-control" rows="5">{{ old('comment') }}</textarea>
        </div>

        <!-- Status -->
        <div class="form-group mb-3">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Add Comment</button>
    </form>

@endsection




