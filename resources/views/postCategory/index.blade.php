@extends('backend.layouts.master')
@section('title','post || category')
@section('main-content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="row">
            <div class="col-md-12">
                @include('backend.layouts.notification')
            </div>
        </div>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary float-left">post category</h6>
            <a href="{{route('postCategory.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add postCategory</a>
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <h1>postCategory</h1>
                                <a href="{{route('postCategory.create')}}" class="btn btn-light">Create post </a>
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
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($postCategoryData as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->title }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>
                                <span class="badge {{ $category->status == 'active' ? 'badge-success' : 'badge-danger' }}">
                                    {{ ucfirst($category->status) }}
                                </span>
                                            </td>
                                            <td>{{ $category->created_at->format('Y-m-d') }}</td>
                                            <td>
                                                <a href="{{ route('postCategory.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                                <form action="{{ route('postCategory.delete', $category->id) }}" method="get" style="display:inline-block;">
                                                    @csrf

                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                                </form>
{{--                                                <a href="{{ route('postCategory.duplicate', $category->id) }}" class="btn btn-warning btn-sm">Copy</a>--}}

                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No categories available.</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer">
                           {{$postCategoryData->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




