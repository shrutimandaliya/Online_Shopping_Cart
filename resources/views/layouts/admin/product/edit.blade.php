
@extends('layouts.admin.app')
@section('title','Edit Product')

@section('content')


<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title float-left">Product</h4>
                        <div class="breadcrumb float-right">
                          <a href="{{ url('productDetails') }}"  class="btn btn-custom waves-effect waves-light btn-md">Back</a>
                        </div>
                                   {{--  <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Product</a></li>
                                        <li class="breadcrumb-item"><a href="#">ProductForm</a></li>
                                        {{-- <li class="breadcrumb-item active">Basic Inputs</li> 
                                    </ol> --}}

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div> <!-- end row -->


            <div class="row">
                <div class="col-6">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Edit Product Details</b></h4>
                        <div class="row">
                            <div class="col-12">
                                <div class="p-20">
                                    <form action="{{ url('updateProduct/'.$id) }}" method="post" class="form-horizontal" role="form" id="form" enctype="multipart/form-data">

                                        {{csrf_field()}}
                                                   {{--  <div class="form-group row">
                                           
                                                    <label class="col-2 col-form-label">Select Category</label>
                                                    <div class="col-7">
                                                        <select name="category_id" class="form-control">
                                                            @foreach($categories as $category)
                                                        <option value="{{$category->id}}"{{$category->id == $edit->category_id ? 'selected':'' }}>{{$category->category_name}}</option>
                                                    @endforeach
                                                        </select>
                                                    </div>
                                                </div> --}}
                                                                       

                                            <input type="hidden" name="id" value="{{$edit->id}}">                 
                                        <div class="form-group row">
                                            <label class=" col-form-label">Select Color</label>
                                            {{-- <div class="col-7"> --}}           <select name="color_id" class="form-control">
                                            @foreach($colors as $color)
                                                <option value="{{$color->id}}" {{$color->id == $edit->color_id ? 'selected':'' }}>{{$color->color_name}}
                                                </option>
                                                @endforeach
                                            </select>
                                            {{-- </div> --}}
                                        </div>

                                                                                                               
                                        <div class="form-group row">
                                            <label class=" col-form-label">Category</label>
                                            {{-- <div class="col-7"> --}}
                                            <select name="category_id" class="form-control">
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{$category->id == $edit->category_id ? 'selected':'' }}>{{$category->category_name}}
                                            </option>
                                            @endforeach
                                            </select>
                                            {{-- </div> --}}
                                        </div>

                                        <div class="form-group-row{{ $errors->has('productName') ? ' has-error' : '' }}">
                                            <div class="form-group row">
                                                <label class=" col-form-label">Product Name</label>
                                                {{-- <div class="col-7"> --}}
                                                    <input type="text" class="form-control" name="product_name" value="{{$edit->product_name}}" parsley-trigger="change" required />
                                                    @if ($errors->has('productName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('productName') }}
                                                        </strong>
                                                    </span>
                                                    @endif
                                                {{-- </div> --}}
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class=" col-form-label">Ram
                                            </label>
                                            {{-- <div class="col-7"> --}}
                                                <input type="text" class="form-control" name="ram" value="{{$edit->ram}}" parsley-trigger="change" required >
                                            {{-- </div> --}}
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label">Battery</label>
                                            {{-- <div class="col-7"> --}}
                                                <input type="text" class="form-control" name="battery" value="{{$edit->battery}}" required >
                                            {{-- </div> --}}
                                        </div>

                                        <div class="form-group row">
                                            <label class=" col-form-label">Processor</label>
                                            {{-- <div class="col-7"> --}}
                                                <input type="text" class="form-control" name="processor" value="{{$edit->processor}}" required >
                                            {{-- </div> --}}
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label">Product Description
                                            </label>
                                            {{-- <div class="col-7"> --}}
                                                <textarea rows="5" cols="7" name="product_description" class="form-control" required  >{{$edit->product_description}}
                                                </textarea>
                                            {{-- </div> --}}
                                        </div>

                                        <div class="form-group row">
                                            <label class=" col-form-label">Price
                                            </label>
                                            {{-- <div class="col-7"> --}}
                                                <input type="text" class="form-control" name="product_price" value="{{$edit->product_price}}" required >
                                            {{-- </div> --}}
                                        </div>

                                        <div class="form-group row">
                                            <label class=" col-form-label">Quantity</label>
                                            {{-- <div class="col-7"> --}}
                                                <input type="text" class="form-control" name="product_quantity" value="{{$edit->product_quantity}}" required >
                                            {{-- </div> --}}
                                        </div>


                                        <div class="form-group row">
                                            <label class=" col-form-label">UPC
                                            </label>
                                            {{-- <div class="col-7"> --}}
                                                <input type="text" class="form-control" name="upc" value="{{$edit->upc}}" required >
                                            {{-- </div> --}}
                                        </div>


                                        <div class="form-group row">
                                            <label class=" col-form-label">Change Uploaded File</label>
                                            {{-- <div class="col-7"> --}}
                                                <input type="file" class="form-control" name="thumbnail" ><br>
                                                <span>{{$edit->thumbnail}}</span>
                                            {{-- </div> --}}
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-4 col-form-label">Add more Images</label>
                                            <div class="form-group">
                                                {{-- <div class="table-responsive">   --}}

                                                    <table class="table table-bordered responsive" id="dynamic_field">  
                                                        <div class="col-8">
                                                            <tr>  
                                                                <td><input type="file" name="image_name[]"class="form-control name_list" />
                                                                </td>

                                                                <td><input type="text" name="sort_no[]" placeholder="Enter Sort Number" class="form-control name_list" />
                                                                </td>  

                                                                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button>
                                                                </td>  

                                                            </tr> 
                                                        </div> 

                                                    </table>  
                                                {{-- </div> --}}
                                            </div>
                                        </div>
                                        <div class="container">
                                            <button type="submit" class="btn btn-custom waves-effect waves-light btn-md">Edit</button>
                                        </div>                  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card-box"> 
                        <div class="row">
                            <div class="col-12"> 
                                <div class="card-box table-responsive">
                                    
                                    <table id="datatable" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th><b>Id</b></th>
                                                <th><b>Image</b></th>
                                                <th><b>Sort No</b></th>
                                                <th><b>Action</b></th>
                                            </tr>                             
                                        </thead>
                                        @foreach($images as $image)
                                        <tr align="center">
                                            <td><b>{{$image->id}}</b></td>
                                            <td>
                                                <img src="{{ url('resources/assets/images/multipleImg/'.$image->product_id.'/'.$image->image_name) }}" width="100" height="100" alt=""><br>
                                                {{$image->image_name}}
                                            </td>

                                            <td><b>{{$image->sort_no}}</b></td>
                                            
                                            
                                            <td>
                                                <a href="{{ url('editMultipleImg',$image['id']) }}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true">&nbsp;&nbsp;</i></a>
    
                                                <a href="{{ url('deleteMultipleImg',$image['id']) }}"><i class="fa fa-trash fa-2x" aria-hidden="true">&nbsp;&nbsp;</i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>

                               
                            </div>
                        </div><!-- end row -->
                    </div><!-- end card-box -->
                </div> <!-- end col -->
            </div>
        </div>
        <!-- end row -->
    </div> <!-- container -->
</div> <!-- content -->


    
 <script type="text/javascript">

    $(document).ready(function(){      

      var postURL = "<?php echo url('addmore'); ?>";

      var i=1;  


      $('#add').click(function(){  

           i++;  

           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"> <td><input type="file" name="image_name[]" class="form-control name_list" /></td><td><input type="text" name="sort_no[]" placeholder="Enter Sort Number" class="form-control name_list" /></td><td><button type="button" name="Add" id="add2" class="btn btn-success btn_add">+</button></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">-</button></td></tr>');  

      });  
       $(document).on('click', '#add2', function(){ 

           i++;  

           $('#dynamic_field:last').append('<tr id="row'+i+'" class="dynamic-added"> <td><input type="file" name="image_name[]" class="form-control name_list" /></td><td><input type="text" name="sort_no[]" placeholder="Enter Sort Number" class="form-control name_list" /></td><td><button type="button" name="Add" id="add2" class="btn btn-success btn_add">+</button></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">-</button></td></tr>');  

      });  


      $(document).on('click', '.btn_remove', function(){  

           var button_id = $(this).attr("id");   

           $('#row'+button_id+'').remove();  

      });  


      $.ajaxSetup({

          headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

          }

      });


      function printErrorMsg (msg) {

         $(".print-error-msg").find("ul").html('');

         $(".print-error-msg").css('display','block');

         $(".print-success-msg").css('display','none');

         $.each( msg, function( key, value ) {

            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');

         });

      }

    });  

</script>



@endsection


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

