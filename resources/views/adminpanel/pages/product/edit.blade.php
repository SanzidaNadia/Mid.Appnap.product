
@extends('adminpanel.layouts.template')
@section('style')
    <style>
        .submit {
            padding: 5px 10px;
            float: right;
        }
    </style>
@endsection
@section('body-content')
    <div class="container-fluid">
        <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
            <h3>Product Edit</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Products</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            </div>
            <div class="col-sm-6">

            </div>
        </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid general-widget">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                      <form action="{{ route('product.update', $product->id) }}" method="POST" class="needs-validation" novalidate=""enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                          <div class="col-6">
                            <label class="form-label" for="validationCustom01">Product Name</label>
                            <input class="form-control" id="validationCustom01" type="text" name="name" value="{{ $product->name }}" placeholder="Enter Product Name" required="">
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please Enter Name</div>

                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                     <div class="col-6">
                                <label class="form-label" for="validationCustom01">Long Description</label>
                                <textarea class="form-control" name="long_description" id="validationCustom01" placeholder="Enter Long Description" required="">{{ $product->long_description }}</textarea>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>

                            <div class="row mt-3">
                            <div class="col-6">
                                <label class="form-label" for="validationCustom01">Short Description</label>
                                <textarea class="form-control" name="short_description" id="validationCustom01" placeholder="Enter Short Description" required="">{{ $product->short_description }}</textarea>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <label class="form-label" for="validationCustom04">Featured</label>
                                <div class="media-body text-left">
                                    <label class="switch">
                                    <input type="checkbox" id="validationCustom04" name="featured" value="1"  @if( $product->featured== 1) checked @elseif( $product->featured== 0) unchecked @endif><span class="switch-state"></span>
                                    </label>
                                </div>
                                <div class="invalid-feedback">Please select a valid state.</div>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label" for="validationCustom04">Status</label>
                                <div class="media-body text-left">
                                    <label class="switch">
                                    <input type="checkbox" id="validationCustom04" name="status" value="1" @if( $product->status== 1) checked @elseif( $product->status== 0) unchecked @endif><span class="switch-state"></span>
                                    </label>
                                </div>
                                <div class="invalid-feedback">Please select a valid state.</div>
                            </div>

                        </div>
{{--
                        <div class="row mt-3">
                            <div class="col-6">
                                <label class="form-label" for="validationCustom01">Image <span class="text-danger">*</span>(550x420)</label>
                                <input class="form-control" type="file" name="image" onchange="previewFile(this);">
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please Choose Image</div>
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 mb-2">
                                {{-- <img class="shadow-sm shadow-showcase" style="width:150px; height:160px;" id="previewImg" src="{{ asset('backend/assets/images/products/default.jpg')}}" alt=""> --}}
                                {{-- @if ( !is_null($product->image) )
                                    <img class="shadow-sm shadow-showcase" style="width:150px; height:160px;" id="previewImg" src="{{ asset('backend/assets/images/products/' . $product->image)}}" alt="">
                                @else
                                    <img class="shadow-sm shadow-showcase" style="width:150px; height:160px;" id="previewImg" src="{{ asset('backend/assets/images/products/default.jpg')}}" alt="">
                                @endif
                            </div>
                        </div> --}}
                       <div class="row ">
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <button class="btn btn-primary submit" type="submit">Submit form</button>
                        </div>

                       </div>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('script')
<script src="{{ asset('backend/assets/js/form-validation-custom.js') }}"></script>

@endsection

