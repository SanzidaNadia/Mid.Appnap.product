
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
            <h3>Products</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Products</li>
                <li class="breadcrumb-item active">Create</li>
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
                      <form action="{{ route('product.store') }}" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-6">
                                <label class="form-label" for="validationCustom01">Product Name</label>
                                <input class="form-control" id="validationCustom01" type="text" name="name" placeholder="Enter Product Name" required="">
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please Enter Name</div>

                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="validationCustom01">Long Description</label>
                                <textarea class="form-control" name="long_description" id="validationCustom01" placeholder="Enter Long Description" required=""></textarea>
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
                                <textarea class="form-control" name="short_description" id="validationCustom01" placeholder="Enter Short Description" required=""></textarea>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                        </div>

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
<script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];

        if(file){
            var reader = new FileReader();

            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }

            reader.readAsDataURL(file);
        }
    }
</script>

@endsection

