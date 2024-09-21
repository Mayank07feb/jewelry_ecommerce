@extends('backend.layouts.master')

@section('main-content')

    <div class="card">
        <h5 class="card-header">Edit Product</h5>
        <div class="card-body">
            <form method="post" action="{{route('product.update',$product->id)}}">
                @csrf
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="{{$product->title}}" class="form-control">
                    @error('title')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="summary" class="col-form-label">Summary <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="summary" name="summary">{{$product->summary}}</textarea>
                    @error('summary')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description" class="col-form-label">Description</label>
                    <textarea class="form-control" id="description" name="description">{{$product->description}}</textarea>
                    @error('description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="is_featured">Is Featured</label><br>
                    <input type="checkbox" name='is_featured' id='is_featured' value='{{$product->is_featured}}' {{(($product->is_featured) ? 'checked' : '')}}> Yes
                </div>
                {{-- {{$categories}} --}}

                <div class="form-group">
                    <label for="cat_id">Category <span class="text-danger">*</span></label>
                    <select name="cat_id" id="cat_id" class="form-control">
                        <option value="">--Select any category--</option>
                        @foreach($categories as $key=>$cat_data)
                            <option value='{{$cat_data->id}}' {{(($product->cat_id==$cat_data->id)? 'selected' : '')}}>{{$cat_data->title}}</option>
                        @endforeach
                    </select>
                </div>
                @php
                    $sub_cat_info=App\Models\Category::where('parent_id', $product->category->id)->get();
                  // dd($sub_cat_info);

                @endphp
                {{-- {{$product->child_cat_id}} --}}
                <div class="form-group {{(($product->child_cat_id)? '' : 'd-none')}}" id="child_cat_div">
                    <label for="child_cat_id">Sub Category</label>
                    <select name="child_cat_id" id="child_cat_id" class="form-control">
                        <option value="">--Select any sub category--</option>
                        @foreach($sub_cat_info as $cat)
                            <option value="{{$cat->id}}">{{$cat->title}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group" id="child_cat_div">
                    <label for="child_cat_id">Sub Category</label>
                    <select name="child_cat_id" id="child_cat_id" class="form-control">
                        <option value="">--Select any sub category--</option>


                    </select>
                </div>

                <div class="form-group">
                    <label for="weight">Product Weight (Grams)</label><br>
                    <input type="number" name='weight' id='weight' placeholder="Product Weight"  value="{{$product->weight}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="discount" class="col-form-label">Discount(%)</label>
                    <input id="discount" type="number" name="discount" min="0" max="100" placeholder="Enter discount"  value="{{$product->discount}}" class="form-control">
                    @error('discount')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                {{--        <div class="form-group">--}}
                {{--          <label for="size">Size</label>--}}
                {{--          <select name="size[]" class="form-control selectpicker"  multiple data-live-search="true">--}}
                {{--              <option value="">--Select any size--</option>--}}
                {{--              @foreach($items as $item)              --}}
                {{--                @php --}}
                {{--                $data=explode(',',$item->size);--}}
                {{--                // dd($data);--}}
                {{--                @endphp--}}
                {{--              <option value="S"  @if( in_array( "S",$data ) ) selected @endif>Small</option>--}}
                {{--              <option value="M"  @if( in_array( "M",$data ) ) selected @endif>Medium</option>--}}
                {{--              <option value="L"  @if( in_array( "L",$data ) ) selected @endif>Large</option>--}}
                {{--              <option value="XL"  @if( in_array( "XL",$data ) ) selected @endif>Extra Large</option>--}}
                {{--              @endforeach--}}
                {{--          </select>--}}
                {{--        </div>--}}

                <div class="form-group">
                    <label for="brand_id">Brand</label>
                    <select name="brand_id" class="form-control">
                        <option value="">--Select Brand--</option>
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}" {{(($product->brand_id==$brand->id)? 'selected':'')}}>{{$brand->title}}</option>
                        @endforeach
                    </select>
                </div>

                {{--        <div class="form-group">--}}
                {{--          <label for="condition">Condition</label>--}}
                {{--          <select name="condition" class="form-control">--}}
                {{--              <option value="">--Select Condition--</option>--}}
                {{--              <option value="default" {{(($product->condition=='default')? 'selected':'')}}>Default</option>--}}
                {{--              <option value="new" {{(($product->condition=='new')? 'selected':'')}}>New</option>--}}
                {{--              <option value="hot" {{(($product->condition=='hot')? 'selected':'')}}>Hot</option>--}}
                {{--          </select>--}}
                {{--        </div>--}}

                <div class="form-group">
                    <label for="stock">Quantity <span class="text-danger">*</span></label>
                    <input id="quantity" type="number" name="stock" min="0" placeholder="Enter quantity"  value="{{$product->stock}}" class="form-control">
                    @error('stock')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="d-flex flex-wrap gap-5">
                    @foreach($product->images as $image)
                        <div class="position-relative" style="width: 100px; height: 100px;">
                            <form action="{{route('product.image.delete', ['image' => $image->id])}}" method="post">
                                @csrf
                            <button type="submit" href="#"  class="btn btn-danger btn-sm position-absolute top-0 start-0 m-1">x</button>
                            </form>

                            <img src="{{ asset('storage/' . $image->image) }}" alt="" class="img-fluid rounded shadow-sm" style="object-fit: cover; width: 100%; height: 100px;">
                        </div>
                    @endforeach
                </div>

                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Images <span class="text-danger">*</span></label>
                    <div class="input-group">

                        <input id="thumbnail" class="form-control" type="file" name="image[]" value="{{$product->photo}}">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="material" class="col-form-label">Materials <span class="text-danger">*</span></label>
                    <select name="material" class="form-control">
                        <option value="diamond" {{$product->material == 'diamond' ? 'selected' : ''}}>Diamond</option>
                        <option value="gold" {{$product->material == 'gold' ? 'selected' : ''}}>Gold</option>
                        <option value="silver" {{$product->material == 'platinum=' ? 'selected' : ''}}>Silver</option>
                        <option value="platinum" {{$product->material == 'platinum' ? 'selected' : ''}}>Platinum</option>
                    </select>
                    @error('material')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control">
                        <option value="active" {{(($product->status=='active')? 'selected' : '')}}>Active</option>
                        <option value="inactive" {{(($product->status=='inactive')? 'selected' : '')}}>Inactive</option>
                    </select>
                    @error('status')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="row justify-content-between">
                    <div class="col-md-5 ">
                        <h3>Product Variations</h3>
                    </div>
                    <div class="col-md-2">
                        <a href="" class="btn btn-primary"> Add Variation</a>

                    </div>

                    @foreach($product->variations as $variation)
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="carat">Carat</label>
                                <select name="carats[]" class="form-control">
                                    <option value="">--Select Carat--</option>
                                    <option value="24" {{$variation->carat == '24' ? 'selected' : ''}}>24 Carat</option>
                                    <option value="22" {{$variation->carat == '22' ? 'selected' : ''}}>22 Carat</option>
                                    <option value="20" {{$variation->carat == '20' ? 'selected' : ''}}>20 Carat</option>
                                    <option value="18" {{$variation->carat == '18' ? 'selected' : ''}}>18 Carat</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="price" class="col-form-label">Price(NRS) <span class="text-danger">*</span></label>
                                <input id="price" type="number" name="prices[]" placeholder="Enter price"  value="{{$variation->price}}" class="form-control">
                                @error('prices[]')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    @endforeach
                    <div id="productVariation">

                    </div>
                </div>
                <div class="form-group mb-3">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

@endpush
@push('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#summary').summernote({
                placeholder: "Write detail summary.....",
                tabsize: 2,
                height: 150
            });
        });

        $(document).ready(function() {
            $('#description').summernote({
                placeholder: "Write detail description.....",
                tabsize: 2,
                height: 150
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#cat_id').change(function() {
                var cat_id = $(this).val();
                if (cat_id) {
                    $.ajax({
                        url: "/category/child/" + cat_id,
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: cat_id
                        },
                        type: "POST",
                        success: function(response) {
                            console.log(response);
                            if (typeof(response) != 'object') {
                                response = $.parseJSON(response);
                            }
                            if (typeof(response) != 'object') {
                                response = $.parseJSON(response);
                            }

                            var html_option = "<option value=''>----Select sub category----</option>";
                            if (response.status) {  // Check for success
                                var data = response.data;
                                if (data) {

                                    $('#child_cat_div').removeClass('d-none');
                                    $.each(data, function(index, category) {
                                        html_option += "<option value='" + category.id + "'>" + category.title + "</option>";
                                    });
                                }
                            } else {
                                $('#child_cat_div').addClass('d-none');
                            }
                            $('#child_cat_id').html(html_option);
                        },
                        error: function(xhr, status, error) {
                            console.error("Ajax error:", error);
                        }
                    });
                }
            });
        });
    </script>
@endpush
