@extends('layouts.admin.app')
@section('title','Color List')

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
                                    <h4 class="page-title float-left">Colors </h4>
            <div class="breadcrumb float-right">
            <a href="{{ url('colorForm') }}" class="btn btn-custom waves-effect waves-light btn-md">{{-- <i class="fa-plus-square-o"> --}}</i>
             Add new Color</a>
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
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    
                                @if(Session::has('success'))
                                <p class="alert alert-success">{{Session::get('success')}}</p>
                                @endif
                                    <table id="datatable" class="table table-bordered ">
                                        <center>
                                        <thead>
                                        <tr>
                                            <th><b>Id</b></th>
                                            <th><b>Color Name</b></th>
                                            <th><b>Status</b></th>
                                            <th><b>Created At</b></th>
                                            {{-- <th><b>Updated At</b></th> --}}
                                            <th><b>Action</b></th>
                                            
                                        </tr>
                                        </thead>
                                    </center>

@foreach($colors as $color)
<tr align="center">
	<td><b>{{$color->id}}</b></td>
	<td>{{$color->color_name}}</td>
    {{-- <td>
        {{$color->status}}
    </td> --}}
    <td>
      <div class="switchery-demo">
            <input type="checkbox" data-plugin="switchery" data-color="#039cfd" name="toggle" class="toggle" id="{{$color->id}}" @if($color->status == 'Y') checked 
            @else ''
             @endif value="{{$color->id}}"/>
      </div>
    </td>
    <td><span>{{$color->created_at}}</span></td>
    {{-- <td><span class="pull-left">{{$color->updated_at}}</span></td> --}}

	{{-- <td>{{$category->created_at}}</td> --}}
    {{-- <td>{{$category->updated_at}}</td> --}}
   

    <td><a href="{{ url('editColor',$color['id']) }}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true">&nbsp;&nbsp;</i></a>
    
   {{--  <a href="{{ url('deleteColor',$color['id']) }}"><i class="fa fa-trash fa-2x deleteCol" aria-hidden="true" id="{{$color->id}}">&nbsp;&nbsp;</i></a></td>
 --}}
 {{-- @foreach($products as $product) --}}

 <i class="fa fa-trash fa-2x deleteCol " aria-hidden="true" id="{{$color->id}}" >&nbsp;&nbsp;</i>
 {{-- <input type="text" name="id" value="{{$products['id']}}"> --}}
{{-- @endforeach --}}

</td>
</tr>
@endforeach
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->
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
          //alert(mode);

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
                url : "toggleColor/"+id,
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

          $(document).on('click','.deleteCol',function(){

            var id = $(this).attr('id'); 
            // alert(id);
             $.ajax({
                type : "POST",
                dataType : "html",
                url : "{{url('/')}}/deleteColor/"+id,
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
