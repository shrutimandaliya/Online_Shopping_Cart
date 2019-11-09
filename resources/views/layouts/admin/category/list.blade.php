@extends('layouts.admin.app')
@section('title','Category List')
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
                                    <h4 class="page-title float-left">Category </h4>
            <div class="breadcrumb float-right">
            <a href="{{ url('categoryForm') }}" class="btn btn-custom waves-effect waves-light btn-md"> Add new Category</a>
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
                    </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                @if(Session::has('success'))
                                <p class="alert alert-success">{{Session::get('success')}}</p>
                                @endif
                                    
                                    <table id="datatable" class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th><b>Id</b></th>
                                            <th><b>Category Name</b></th>
                                            <th><b>Status</b></th>
                                            <th><b>Created At</b></th>
                                            {{-- <th><b>Updated At</b></th> --}}
                                            <th><b>Action</b></th>
                                            
                                        </tr>
                                        </thead>
@foreach($categories as $category)
<tr align="center">
	<td><b>{{$category->id}}</b></td>
	<td>{{$category->category_name}}</td>
   {{--  <td>
        {{$category->status}}
    </td> --}}
    <td>
      <div class="switchery-demo">
            <input type="checkbox" data-plugin="switchery" data-color="#039cfd" class="toggle" name="toggle" id="{{$category->id}}" @if($category->status == 'Y') checked 
            @else ''
             @endif value="{{$category->id}}" /> {{-- onchange="category('{{$category->id}}')" @if($category->status == 'Y') checked 
            @else ''
             @endif value="{{$category->id}}"  --}}
      </div>
    </td>
    <td><span>{{$category->created_at}}</span></td>
    {{-- <td><span class="pull-left">{{$category->updated_at->diffForHumans()}}</span></td> --}}

	{{-- <td>{{$category->created_at}}</td> --}}
    {{-- <td>{{$category->updated_at}}</td> --}}
   

    <td><a href="{{ url('editCategory',$category['id']) }}" ><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true">&nbsp;&nbsp;</i></a>
    
    {{-- <a href="{{ url('deleteCategory',$category['id']) }}"><i class="fa fa-trash fa-2x" aria-hidden="true">&nbsp;&nbsp;</i></a></td>
 --}}
 
 <i class="fa fa-trash fa-2x deleteCat" aria-hidden="true" id="{{$category->id}}">&nbsp;&nbsp;</i></td>


    
    
    {{-- <td><a href="{{ url('delete',$category['id']) }}" class="btn btn-info">Delete</a></td> --}}

</tr>
@endforeach
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->

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
                url : "toggleCat/"+id,
                data : {checkvar:status}, 
                success : function()
                {
                    alert( "Your Status successfully Changed");
                 //   var category = eval(data);
                    // msg = data.msg;
                    // success = data.success;
                    // $("#heading").html()
                }
            });
           
        });
        $(document).on('click','.deleteCat',function(){

            var id = $(this).attr('id'); 
            // alert(id);
             $.ajax({
                type : "POST",
                dataType : "html",
                url : "{{url('/')}}/deleteCat/"+id,
                data : {'_token':'{{csrf_token()}}',id}, 
                success : function(response)
                {
                    // alert( "Your Status successfully Changed");
                    console.log('success');
                    window.location.reload();
                }
            });



        });

});
                  

</script>
@endsection 
