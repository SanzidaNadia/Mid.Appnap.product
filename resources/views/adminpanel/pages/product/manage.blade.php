@extends('adminpanel.layouts.template')
@section('title')
    Product Manage
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/jsgrid.css') }}">
    <style>
      .switch {
          position: relative;
          display: inline-block;
          width: 45px;
          height: 25px;
      }
      .switch-state {
        left: 2px!impotrant;
      }
      .switch-state:before {
        position: absolute;
        content: "";
        height: 15px;
        width: 15px;
        left: 2px;
        bottom: 5px;
        background-color: #fff;
        -webkit-transition: .4s;
        transition: .4s;
        border-radius: 20px;
    }

    .action a {
      font-size: 20px;
      padding: 0px 5px;
    }

    .action a i:hover {
      font-weight: 700;

    }

    .pagination{
            float: right;
            margin-top: 10px;
        }
    </style>
@endsection

@section('body-content')
<!-- Page Sidebar Ends-->
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <h3>Products</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item">Products</li>
              <li class="breadcrumb-item active">Manage</li>
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
                  <div class="table-responsive">
                    @if ( $products->count() == 0 )
                        <div class="alert alert-danger m-0">No Products Found in our Database.</div>
                    @else
                        <table class="table table-border-vertical">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center">#Sl.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Long Description</th>
                            <th scope="col">Short Description</th>
                            <th scope="col">Featured</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $s = 1;
                            @endphp
                            @foreach($products  as $product )
                            <tr>
                                <tr>
                                    <td scope="row" class="text-center">{{ $s }}</td>

                                <td>{{  $product->name }}</td>
                                <td>{{  $product->long_description }}</td>
                                <td>{{  $product->short_description }}</td>



                                <td class="text-center action">
                                    <a href="{{ route('product.edit', $product->id) }}">
                                        <i class="fa fa-edit" data-container="body" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"></i>
                                    </a>
                                    <form method="POST" action="{{  route('product.destroy', $product->id) }}">
                                        @csrf
                                       <input type="hidden" name="id" value="{{  $product->id }}">
                                        <input type="submit" name="submit" value="Delete" class="btn-btn-danger">
                                    </form>
                                    {{-- <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">Simple</button> --}}

                                </td>
                            </tr>
                            @php
                                $s++;
                            @endphp
                            @endforeach
                        </tbody>

                        </table>
                        {!!  $products->links() !!}
                    @endif
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
<!-- Page Sidebar Ends-->
@endsection
