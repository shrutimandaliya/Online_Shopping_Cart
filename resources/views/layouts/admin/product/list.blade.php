@extends('layouts.admin.app')
@section('title','Product List')

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
                        <h4 class="page-title float-left">Product Table</h4>
                        <div class="breadcrumb float-right">
                            <a href="{{ url('productForm') }}" class="btn btn-custom waves-effect waves-light btn-md">{{-- <i class="fa-plus-square-o"> --}}</i>
                            Add new Product</a>
                        </div>
                                   {{--  <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                        <li class="breadcrumb-item active">Datatable</li>
                                    </ol>
                                    --}}
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        {{--  @if(Session::has('success'))
                         <p class="alert alert-success">{{Session::get('success')}}</p>
                         @endif --}}
                        <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><b>Id</b></th>
                                    <th><b>Product Name</b></th>
                                    <th><b>Thumbnail</b></th>
                                    <th><b>Category Name</b></th>
                                    <th><b>Color Name</b></th>
                                    <th><b>Ram</b></th>
                                    <th><b>Battery</b></th>
                                    <th><b>Processor</b></th>
                                    <th><b>Product Description</b></th>
                                    <th><b>Product Price</b></th>
                                    <th><b>Product Quantity</b></th>
                                    <th><b>UPC</b></th>
                                    <th><b>Status</b></th>
                                    <th><b>Created At</b></th>
                                    {{-- <th><b>Updated At</b></th> --}}
                                    <th><b>Action</b></th>

                                </tr>
                            </thead>
                            @foreach($products as $product)
                            <tr align="center">
                             <td><b>{{$product->id}}</b></td>
                             <td>{{$product->product_name}}</td>
                             <td>
                                <img src="{{ url('resources/assets/images/defaultThumbnail/'.$product->thumbnail) }}" width="100" height="100" alt="">
                             </td>
                             <td>{{$product->category_name}}</td>
                             <td>{{$product->color_name}}</td>
                             <td>{{$product->ram}}</td>
                             <td>{{$product->battery}}</td>
                             <td>{{$product->processor}}</td>
                             <td>{{$product->product_description}}</td>
                             <td>{{$product->product_price}}</td>
                             <td>{{$product->product_quantity}}</td>
                             <td>{{$product->upc}}</td>
                             
                           <td>
                              <div class="switchery-demo">
                                <input type="checkbox" data-plugin="switchery" data-color="#039cfd" class="toggle" name="toggle" id="{{$product->id}}" @if($product->status == 'Y') checked 
                                @else ''
                                @endif value="{{$product->id}}"/>
                            </div>
                        </td>
                        <td><span>{{$product->created_at}}</span></td>
                        {{-- <td><span class="pull-left">{{$product->updated_at}}</span></td> --}}

                        {{-- <td>{{$category->created_at}}</td> --}}
                        {{-- <td>{{$category->updated_at}}</td> --}}


                        <td><a href="{{ url('editProduct',$product->id) }}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true">&nbsp;&nbsp;</i></a>

                            <a href="{{ url('deleteProduct',$product->id) }}"><i class="fa fa-trash fa-2x deletePro" aria-hidden="true" id="{{$product->id}}">&nbsp;&nbsp;</i></a></td>
                          {{--  <i class="fa fa-trash fa-2x deletePro" aria-hidden="true" id="{{$product->id}}"> &nbsp;&nbsp;</i></td> --}}





                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div> <!-- end row -->
    </div>
</div>
    {{-- <a href="{{ url('mylogin') }}" class="btn btn-info">Back</a> --}}
@endsection

@section('scripts')
<script type="text/javascript">
        $(document).ready(function()
                {
                

        $(document).on('change','.toggle',function(){

            id = $(this).attr('id'); 
            
            var mode = (this).checked;
          // alert(mode);

            if(mode == true){
                var status = 'Y';
               // alert(status);
            }
            else
            {
                var status = 'N';
                //alert(status);
                
            }

            $.ajax({
                type : "GET",
                 dataType : "JSON",
                url : "togglePro/"+id,
                data : {checkvar:status}, 
                success : function()
                {
                    console.log('success');
                    // window.location.reload();
                    alert( "Your Status successfully Changed");
                 //   var category = eval(data);
                    // msg = data.msg;
                    // success = data.success;
                    // $("#heading").html()
                }
            });
           
        });
        //  $(document).on('click','.deletePro',function(){

        //     var proId = $(this).attr('id'); 
        //     alert(proId);
        //      $.ajax({
        //         type : "POST",
        //         dataType : "html",
        //         url : "{{url('/')}}/deleteCat/"+proId,
        //         data : {'_token':'{{csrf_token()}}',proId}, 
        //         success : function(response)
        //         {
        //             // alert( "Your Status successfully Changed");
        //             console.log('success');
        //             window.location.reload();
        //         }
        //     });
        // });

        //   $(document).on('click','.deletePro',function(){

        //     var proId = $(this).attr('id'); 
        //     // alert(proId);
        //      $.ajax({
        //         type : "POST",
        //         dataType : "html",
        //         url : "{{url('/')}}/deleteColor/"+proId,
        //         data : {'_token':'{{csrf_token()}}',proId}, 
        //         success : function(response)
        //         {
        //             // alert( "Your Status successfully Changed");
        //             console.log('success');
        //             window.location.reload();
        //         }
        //     });
        // });

        
});
                  

</script>
@endsection 




