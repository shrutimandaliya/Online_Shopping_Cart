@extends('layouts.admin.app')
@section('title','Users List')

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
                                    <h4 class="page-title float-left">Users</h4>
            {{-- <div class="breadcrumb float-right">
            <a href="{{ url('usersList') }}" class="btn btn-custom waves-effect waves-light btn-md"> Add new User</a>
            </div>
                    --}}                {{--  <ol class="breadcrumb float-right">
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
                                    
                                    
                                    <table id="datatable" class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th><b>Id</b></th>
                                            <th><b>First Name</b></th>
                                            <th><b>Last Name</b></th>
                                            <th><b>Username</b></th>
                                            <th><b>Email</b></th>
                                            <th><b>Contact</b></th>

                                            <th><b>Status</b></th>
                                            <th><b>Created At</b></th>
                                            {{-- <th><b>Updated At</b></th> --}}
                                            <th><b>Action</b></th>
                                            
                                        </tr>
                                        </thead>
@foreach($users as $user)
<tr align="center">
	<td><b>{{$user->id}}</b></td>
	<td>{{$user->first_name}}</td>
    <td>{{$user->last_name}}</td>
    <td>{{$user->username}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->phone_num}}</td>
   {{--  <td>
        {{$user->status}}
    </td> --}}
    <td>
      <div class="switchery-demo">
            <input type="checkbox" data-plugin="switchery" data-color="#039cfd" class="toggle" name="toggle" id="{{$user->id}}" @if($user->status == 'Y') checked 
            @else ''
             @endif value="{{$user->id}}" /> {{-- onchange="category('{{$category->id}}')" @if($category->status == 'Y') checked 
            @else ''
             @endif value="{{$category->id}}"  --}}
      </div>
    </td>
    <td><span>{{$user->created_at}}</span></td>
    {{-- <td><span class="pull-left">{{$category->updated_at->diffForHumans()}}</span></td> --}}

	{{-- <td>{{$category->created_at}}</td> --}}
    {{-- <td>{{$category->updated_at}}</td> --}}
   
<td>
    {{-- <a href="{{ url('editUser',$user['id']) }}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true">&nbsp;&nbsp;</i></a>
     --}}
    <a href="{{ url('deleteUser',$user['id']) }}"><i class="fa fa-trash fa-2x" aria-hidden="true">&nbsp;&nbsp;</i></a></td>


    
    
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
                url : "toggleUser/"+id,
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
});
                  

</script>
@endsection 
