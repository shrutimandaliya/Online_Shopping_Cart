@extends('layouts.admin.app')
@section('title','Edit Image')

@section('content')

     <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left"> Product</h4>
                                    <div class="breadcrumb float-right">
                        <a href="{{ url('productDetails') }}"  class="btn btn-custom waves-effect waves-light btn-md">Back</a>
                            </div>
                                    {{-- <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                        <li class="breadcrumb-item active">Datatable</li>
                                    </ol> --}}

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                
                        <!-- end row -->
<div class="row">
<div class="col-lg-6">  
    
<div class="card-box">
    <h4 class="page-title float-left">Edit Image</h4>
        <br><br>

        <form action="{{ url('updateMultipleImg/'.$id) }}" method="post" id="form" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="product_id" value="{{$edit->product_id}}">    
        <input type="hidden" name="id" value="{{$edit->id}}">    
        
         <img src="{{ url('resources/assets/images/multipleImg/'.$edit->product_id.'/'.$edit->image_name) }}" width="100" height="100" alt="">
         <input type="hidden" name="image" value="{{$edit->image_name}}">

         <div class="form-group row">
            <label class=" col-form-label">Change Uploaded Image</label>
            {{-- <div class="col-7"> --}}
                <input type="file" class="form-control" name="image_name" ><br>
                {{-- <input type="hidden" name="text" value="{{$edit->image_name}}"> --}}
            {{-- </div> --}}
        </div>

        <div class="form-group {{ $errors->has('sort_no') ? ' has-error' : '' }}">
        {{-- <label class="col-2 col-form-label">Category Name:</label>                           <div class="col-10">
            <input type="text" class="form-control" name="categoryName">             </div> --}}
        <div class="form-group row">

        <b>Sort No <span class="text-danger">*</span></b> &nbsp;
                <input type="text" name="sort_no" class="form-control"
                         parsley-trigger="change" required value="{{$edit->sort_no}}"><br>
        </div>
                                {{-- @if ($errors->has('categoryName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('categoryName') }}</strong>
                                    </span>
                                @endif --}}
                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md float-right"  id="sa-success">Change</button><br>
        </div>
    
        </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</div>



@endsection

