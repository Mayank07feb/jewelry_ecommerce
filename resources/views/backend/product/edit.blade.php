@extends('backend.layouts.master')

@section('main-content')
    {{--    @if ($errors->any()) --}}
    {{--        @foreach ($errors->all() as $error) --}}
    {{--            {{$error}} --}}
    {{--        @endforeach --}}
    {{--    @endif --}}
    <div class="card">
        <h5 class="card-header">Edit Product</h5>
        <div class="card-body">
            <form method="post" action="{{ route('product.update', ['product' => $product->id]) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="title" placeholder="Enter title"
                           value="{{$product->title}}" class="form-control">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="summary" class="col-form-label">Summary <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="summary" name="summary">{{ $product->summary }}</textarea>
                    @error('summary')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description" class="col-form-label">Description</label>
                    <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="is_featured">Is Featured</label><br>
                    <input type="checkbox" name='is_featured' id='is_featured' value='1' checked> Yes
                </div>
                <div class="form-group">
                    <label for="is_collection">Is Collection</label><br>
                    <input type="checkbox" name='is_collection' id='is_collection' value='1' checked> Yes
                </div>
                {{-- {{$categories}} --}}

                <div class="form-group">
                    <label for="cat_id">Category <span class="text-danger">*</span></label>
                    <select name="cat_id" id="cat_id" class="form-control">
                        <option value="">--Select any category--</option>
                        @foreach ($categories as $key => $cat_data)
                            <option value='{{ $cat_data->id }}' {{$cat_data->id == $product->cat_id ? 'selected' : ''}} >{{ $cat_data->title }}</option>
                        @endforeach
                    </select>
                </div>

                @php
                    $subCats = \App\Models\Category::where('parent_id', $product->cat_id)->get();
                @endphp
                <div class="form-group " id="child_cat_div">
                    <label for="child_cat_id">Sub Category</label>
                    <select name="child_cat_id" id="child_cat_id" class="form-control">
                        <option value="">--Select any category--</option>
                        @foreach($subCats as $cat)
                            <option value="{{$cat->id}}" {{$cat->id == $product->child_cat_id ? 'selected' : ''}}>{{$cat->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group d-none" id="child_cat_div">
                    <label for="child_cat_id">Sub Category</label>
                    <select name="child_cat_id" id="child_cat_id" class="form-control">
                        <option value="">--Select any category--</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="weight">Product Weight (Grams)</label><br>
                    <input type="number" name='weight' id='weight' placeholder="Product Weight"
                           value="{{ $product->weight }}" class="form-control">
                </div>



                <div class="form-group">
                    <label for="discount" class="col-form-label">Discount(%)</label>
                    <input id="discount" type="number" name="discount" min="0" max="100"
                           placeholder="Enter discount" value="{{ $product->discount }}" class="form-control">
                    @error('discount')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                {{--        <div class="form-group"> --}}
                {{--          <label for="size">Size</label> --}}
                {{--          <select name="size[]" class="form-control selectpicker"  multiple data-live-search="true"> --}}
                {{--              <option value="">--Select any size--</option> --}}
                {{--              <option value="S">Small (S)</option> --}}
                {{--              <option value="M">Medium (M)</option> --}}
                {{--              <option value="L">Large (L)</option> --}}
                {{--              <option value="XL">Extra Large (XL)</option> --}}
                {{--          </select> --}}
                {{--        </div> --}}


                <div class="form-group">
                    <label for="brand_id">Brand</label>
                    {{-- {{$brands}} --}}

                    <select name="brand_id" class="form-control">
                        <option value="">--Select Brand--</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}" {{$brand->id == $product->brand_id ? 'selected' : ''}}>{{ $brand->title }}</option>
                        @endforeach
                    </select>
                </div>

                {{--        <div class="form-group"> --}}
                {{--          <label for="condition">Condition</label> --}}
                {{--          <select name="condition" class="form-control"> --}}
                {{--              <option value="">--Select Condition--</option> --}}
                {{--              <option value="default">Default</option> --}}
                {{--              <option value="new">New</option> --}}
                {{--              <option value="hot">Hot</option> --}}
                {{--          </select> --}}
                {{--        </div> --}}

                <div class="form-group">
                    <label for="stock">Quantity <span class="text-danger">*</span></label>
                    <input id="quantity" type="number" name="stock" min="0" placeholder="Enter quantity"
                           value="{{ $product->stock }}" class="form-control">
                    @error('stock')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="d-flex">
                    @foreach($product->images as $image)
                        <div class="position-relative" style="width: 100px; height: 100px;">
                            <img src="{{asset('storage/'. $image->image)}}" alt="" style="width: 100%;">
                            <a href="{{route('product.image.delete', ['image' => $image->id])}}" class="btn btn-danger">x</a>
                        </div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Product Images <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input id="thumbnail" class="form-control" type="file" name="images[]" multiple>
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="material" class="col-form-label">Materials <span class="text-danger">*</span></label>
                    <select name="material" class="form-control">
                        <option value="diamond" {{$product->material == 'diamond' ? 'selected' : ''}}>Diamond</option>
                        <option value="gold" {{$product->material == 'gold' ? 'selected' : ''}}>Gold</option>
                        <option value="silver" {{$product->material == 'silver' ? 'selected' : ''}}>Silver</option>
                        <option value="platinum" {{$product->material == 'platinum' ? 'selected' : ''}}>Platinum</option>
                    </select>
                    @error('material')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control">
                        <option value="active" {{$product->status == 'active' ? 'selected' : ''}}>Active</option>
                        <option value="inactive" {{$product->status == 'inactive' ? 'selected' : ''}}>Inactive</option>
                    </select>
                    @error('status')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="container">
                    <div class="row justify-content-between align-items-center mb-3">
                        <div class="col-md-5">
                            <h3>Product Variations</h3>
                        </div>
                        <div class="col-md-2 text-right">
                            <a href="#" class="btn btn-primary" id="addVariation">Add Variation</a>
                        </div>
                    </div>

                    @foreach($product->variations as $variation)
                        <div class="row mb-3 align-items-end">
                            <input id="price" type="hidden" name="variationIds[]" value="{{ $variation->id }}">
                            <div class="col-md-5">
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
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="price" class="col-form-label">Price (NRS) <span
                                            class="text-danger">*</span></label>
                                    <input id="price" type="number" name="prices[]" placeholder="Enter price"
                                           value="{{ $variation->price }}" class="form-control">
                                    @error('prices[]')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-end mb-3">
                                <a href="{{route('product.variation.delete', ['variation' => $variation->id])}}" class="btn btn-danger removeVariation w-100 w-md-auto">Remove</a>
                            </div>
                        </div>
                    @endforeach

                    <div id="productVariation">

                    </div>
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
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <link rel="stylesheet" href="{{ asset('backend/summernote/summernote.min.css') }}">
@endpush
@push('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="{{ asset('backend/summernote/summernote.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const productVariationContainer = document.getElementById('productVariation');
            const addVariationButton = document.getElementById('addVariation');

            function createVariationRow() {
                const variationRow = document.createElement('div');
                variationRow.classList.add('variation-row', 'row', 'mb-3', 'align-items-end');

                // Create Carat column
                const caratCol = document.createElement('div');
                caratCol.classList.add('col-md-5');
                const caratGroup = document.createElement('div');
                caratGroup.classList.add('form-group');
                const caratLabel = document.createElement('label');
                caratLabel.setAttribute('for', 'carat');
                caratLabel.textContent = 'Carat';
                const caratSelect = document.createElement('select');
                caratSelect.name = 'carats[]';
                caratSelect.classList.add('form-control');

                const caratOptions = [{
                    value: '',
                    text: '--Select Carat--'
                },
                    {
                        value: '24',
                        text: '24 Carat'
                    },
                    {
                        value: '22',
                        text: '22 Carat'
                    },
                    {
                        value: '20',
                        text: '20 Carat'
                    },
                    {
                        value: '18',
                        text: '18 Carat'
                    },
                ];

                caratOptions.forEach(option => {
                    const opt = document.createElement('option');
                    opt.value = option.value;
                    opt.textContent = option.text;
                    caratSelect.appendChild(opt);
                });

                caratGroup.appendChild(caratLabel);
                caratGroup.appendChild(caratSelect);
                caratCol.appendChild(caratGroup);
                variationRow.appendChild(caratCol);

                // Create Price column
                const priceCol = document.createElement('div');
                priceCol.classList.add('col-md-5');
                const priceGroup = document.createElement('div');
                priceGroup.classList.add('form-group');
                const priceLabel = document.createElement('label');
                priceLabel.setAttribute('for', 'price');
                priceLabel.innerHTML = 'Price (NRS) <span class="text-danger">*</span>';
                const priceInput = document.createElement('input');
                priceInput.type = 'number';
                priceInput.name = 'prices[]';
                priceInput.placeholder = 'Enter price';
                priceInput.classList.add('form-control');

                priceGroup.appendChild(priceLabel);
                priceGroup.appendChild(priceInput);
                priceCol.appendChild(priceGroup);
                variationRow.appendChild(priceCol);

                // Create Remove button column
                const buttonCol = document.createElement('div');
                buttonCol.classList.add('col-md-2', 'd-flex', 'align-items-end', 'mb-3');
                const removeButton = document.createElement('button');
                removeButton.classList.add('btn', 'btn-danger', 'removeVariation', 'w-100', 'w-md-auto');
                removeButton.textContent = 'Remove';

                // Event listener for the remove button
                removeButton.addEventListener('click', function() {
                    variationRow.remove();
                });

                buttonCol.appendChild(removeButton);
                variationRow.appendChild(buttonCol);

                return variationRow;
            }

            // Add event listener for the Add Variation button
            addVariationButton.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent default anchor behavior
                const newVariationRow = createVariationRow();
                productVariationContainer.appendChild(newVariationRow);
            });
        });
    </script>

    <script>
        // $('#lfm').filemanager('image');

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
        // $('select').selectpicker();
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

                            var html_option =
                                "<option value=''>----Select sub category----</option>";
                            if (response.status) { // Check for success
                                var data = response.data;
                                if (data) {

                                    $('#child_cat_div').removeClass('d-none');
                                    $.each(data, function(index, category) {
                                        html_option += "<option value='" + category.id +
                                            "'>" + category.title + "</option>";
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
