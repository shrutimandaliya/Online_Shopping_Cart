{{-- @extends('layouts.admin.common.topheader')
@extends('layouts.admin.common.header') --}}

@extends('layouts.admin.app')
@section('title','Edit Category')

@section('content')
 <div class="content-page">
                <!-- Start content -->

                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Category</h4>
            <div class="breadcrumb float-right">
            <a href="{{ url('categoryDetails') }}" class="btn btn-custom waves-effect waves-light btn-md">Back</a>
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
        <div class="col-lg-6">  
    
            <div class="card-box">
              <h4 class="page-title float-left">Change Category</h4>
                <br><br>

						<form action="{{ url('updateCategory/'.$id) }}" method="post" id="form">
						{{csrf_field()}}
	           	<div class="form-group{{ $errors->has('categoryName') ? ' has-error' : '' }}">

				
			 	<b>	Change Category Name:<span class="text-danger">*</span></b> &nbsp;
						<input type="text" name="category_name" value="{{$edit->category_name}}" class="form-control"  parsley-trigger="change" required data-parsley-pattern="/[A-Z a-z\\_\\-]+$/" ><br>	
                        {{-- category_name is a name of db column --}}
						{{-- 	@if ($errors->has('categoryName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('categoryName') }}</strong>
                                    </span>
                                @endif --}}
                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md float-right">Change</button><br>
            </div>
        
{{-- 
        <div class="form-group text-right m-b-0" >

        </div> --}}

						{{-- <input type="submit" name="add" class="btn btn-info waves-effect waves-light" value="Change"> --}}
					</form>
			        </div>
				</div>
			</div>
		</div>
    </div>
</div>

@endsection

