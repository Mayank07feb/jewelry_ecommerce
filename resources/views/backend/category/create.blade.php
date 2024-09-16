@extends('backend.layouts.master')

@section('title','E-SHOP || Category Create')

@section('main-content')

    <div class="card">
        <h5 class="card-header">Add Category</h5>
        <div class="card-body">
            <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="{{old('title')}}" class="form-control">
                    @error('title')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputDesc" class="col-form-label">Summary</label>
                    <textarea class="form-control" id="summary" name="summary">{{old('summary')}}</textarea>
                    @error('summary')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input id="thumbnail" class="form-control" type="file" name="photo" value="{{old('photo')}}">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="is_parent">Is Parent</label><br>
                    <input type="checkbox" name='is_parent' id='is_parent' value='1' checked> Yes
                </div>

                <div class="form-group">
                    <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    @error('status')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="parent_id" class="col-form-label">Parent <span class="text-danger"></span></label>
                    <select name="parent_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                    @error('parent_id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
@endpush
@push('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#summary').summernote({
                placeholder: "Write detail summary.....",
                tabsize: 2,
                height: 150
            });
        });
    </script>
    <script>
        $('#lfm').filemanager('image');

        $(document).ready(function() {
            $('#description').summernote({
                placeholder: "Write short description.....",
                tabsize: 2,
                height: 150
            });
        });
    </script>
@endpush
