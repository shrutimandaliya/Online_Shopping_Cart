
@extends('layouts.admin.app')
@section('title','Add Product')

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
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    {{-- <h4 class="btn btn-custom waves-effect waves-light btn-md"><b>Add new Product</b></h4> --}}

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
                                                <form action="{{ url('addNewProduct') }}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data" id="form" name="form">

                                                    {{csrf_field()}}
                                                    <div class="form-group row">
                                           
                                                    <label class="col-2 col-form-label">Select Category</label>
                                                    <div class="col-7">
                                                        <select name="category_id" class="form-control">
                                                            <option selected="selected" >Select Category</option>
                                                    @foreach($categories as $category)
                                                        
                                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                    @endforeach
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                                                                            
                                                    <div class="form-group row">

                                                    <label class="col-2 col-form-label">Select Color</label>
                                                     <div class="col-7">
                                                        <select name="color_id" class="form-control">
                                                             <option selected="selected" >Select Color</option>
                                                            @foreach($colors as $color)

                                                        <option value="{{$color->id}}">{{$color->color_name}}</option>
                                                    @endforeach
                                                        </select>
                                                        </div>
                                                    </div>

                                                     

                  <div class="form-group-row{{ $errors->has('productName') ? ' has-error' : '' }}">

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Product Name</label>
                                                        <div class="col-7">
                                                            <input type="text" class="form-control" name="product_name"  parsley-trigger="change" required />
                                                            @if ($errors->has('productName'))
                                                     <span class="help-block">
                                                    <strong>{{ $errors->first('productName') }}</strong>
                                                   </span>
                                                     @endif
                                                        </div>
                                                    </div>
                     </div>

                     <div class="form-group-row{{ $errors->has('ram') ? ' has-error' : '' }}">

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Ram</label>
                                                        <div class="col-7">
                                                            <input type="text" class="form-control" name="ram" parsley-trigger="change" required>
                                                    @if ($errors->has('ram'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('ram') }}</strong>
                                                    </span>
                                                    @endif
                                                        </div>
                                                    </div>
                    </div>


                     <div class="form-group-row{{ $errors->has('battery') ? ' has-error' : '' }}">

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Battery</label>
                                                        <div class="col-7">
                                                            <input type="text" class="form-control" name="battery" parsley-trigger="change" required >
                                                    @if ($errors->has('battery'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('battery') }}</strong>
                                                    </span>
                                                    @endif
                                                        </div>
                                                    </div>
                    </div>


                     <div class="form-group-row{{ $errors->has('processor') ? ' has-error' : '' }}">
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Processor</label>
                                                        <div class="col-7">
                                                            <input type="text" class="form-control" name="processor" parsley-trigger="change" required >
                                                   @if ($errors->has('processor'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('processor') }}</strong>
                                                    </span>
                                                    @endif
                                                        </div>
                                                    </div>
                    </div>

                 <div class="form-group-row{{ $errors->has('description') ? ' has-error' : '' }}">

                                                   <div class="form-group row">
                                                        <label class="col-2 col-form-label">Product Description</label>
                                                        <div class="col-7">
                                                            <textarea rows="5" cols="7" name="product_description" class="form-control" parsley-trigger="change" required >
                                                            </textarea>
                                                    @if ($errors->has('description'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                    @endif
                                                        </div>
                                                    </div>
                </div>

                 <div class="form-group-row{{ $errors->has('price') ? ' has-error' : '' }}">

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Price</label>
                                                        <div class="col-7">
                                                            <input type="text" class="form-control" name="product_price" parsley-trigger="change" required >
                                                   @if ($errors->has('price'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('price') }}</strong>
                                                    </span>
                                                    @endif
                                                        </div>
                                                    </div>
                </div>

                 <div class="form-group-row{{ $errors->has('quantity') ? ' has-error' : '' }}">


                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Quantity</label>
                                                        <div class="col-7">
                                                            <input type="text" class="form-control" name="product_quantity" parsley-trigger="change" required >
                                                            
                                                   @if ($errors->has('quantity'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('quantity') }}</strong>
                                                    </span>
                                                    @endif
                                                        </div>
                                                    </div>
                </div>

               
                 <div class="form-group-row{{ $errors->has('upc') ? ' has-error' : '' }}">
                 
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">UPC</label>
                                                        <div class="col-7">
                                                            <input type="text" class="form-control" name="upc" parsley-trigger="change" required >
                                                            
                                                   @if ($errors->has('upc'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('upc') }}</strong>
                                                    </span>
                                                    @endif
                                                        </div>
                                                    </div>
                </div>


                  <div class="form-group-row{{ $errors->has('thumbnail') ? ' has-error' : '' }}">


                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Upload file</label>
                                                        <div class="col-7">
                                                            <input type="file" class="form-control" name="thumbnail">


                                                   @if ($errors->has('thumbnail'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('thumbnail') }}</strong>
                                                    </span>
                                                    @endif
                                                        </div>
                                                    </div>
                </div>


             {{--    <div class="container">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                    <strong>Whoops!
                    </strong> There were some problems with your input.<br><br>
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                    </div>
                @endif

                    @if(session('success'))
                    <div class="alert alert-success">
                      {{ session('success') }}
                    </div> 
                    @endif

        
        <div class="input-group control-group increment" >
          {{-- <input type="file" name="filename[]" class="form-control"> --}}
          {{-- <div class="input-group-btn">  --}}
            {{-- <input type="text" name="sort"> --}}
            {{-- <button class="btn btn-success" type="button" id="add"><i class="glyphicon glyphicon-plus"></i>Add</button> --}}
          {{-- </div> --}}
        {{-- </div> --}}
       {{--  <div class="clone hide">
          <div class="control-group input-group">
           <div class="form-group row">
            <label class="col-3 col-form-label">Multiple Upload File</label>
            
            <input type="file" name="image_name[]" class="form-control" id="clone">
            {{-- <div class="input-group-btn">  --}}
            {{-- <input type="text" name="sort_no[]" class="form-control col-2" id="clone">
              <button class="btn btn-info" type="button" id="add"><i class="glyphicon glyphicon-plus"></i>Add</button>
              <button class="btn btn-danger" type="button" id="remove"><i class="glyphicon glyphicon-minus"></i> Remove</button><br>

          </div>
      </div>
  </div>
    </div>
    </div>
        <br> --}}

<div class="form-group row">
    <label class="col-2 col-form-label">Upload Multiple file</label>
    <div class="form-group">
            {{-- <div class="table-responsive">   --}}

                <table class="table table-bordered responsive" id="dynamic_field">  
                    <div class="col-8">
                    <tr>  
                        <td><input type="file" name="image_name[]"class="form-control name_list" /></td>

                        <td><input type="text" name="sort_no[]" placeholder="Enter Sort Number" class="form-control name_list" /></td>  

                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td> 


                    </tr> 
                    </div> 

                </table>  
            {{-- </div> --}}
        </div>
    </div>





 <button type="submit" class="btn btn-custom waves-effect waves-light btn-md">ADD</button>
    

                                                  
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->
{{-- 
                <footer class="footer text-right">
                    2017 © Adminox. - Coderthemes.com
                </footer>
 --}}
            </div>
      


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

