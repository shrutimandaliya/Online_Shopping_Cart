@extends('layouts.admin.app')
@section('title','Add Category')
@section('content')

	 <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left"> Category</h4>
                                    <div class="breadcrumb float-right">
						<a href="{{ url('categoryDetails') }}"  class="btn btn-custom waves-effect waves-light btn-md">Back</a>
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
	<h4 class="page-title float-left">Add New Category</h4>
		<br><br>

		<form action="{{ url('addNewCategory') }}" method="post" id="form">
		{{csrf_field()}}
		<div class="form-group {{ $errors->has('categoryName') ? ' has-error' : '' }}">
		{{-- <label class="col-2 col-form-label">Category Name:</label>                           <div class="col-10">
            <input type="text" class="form-control" name="categoryName">             </div> --}}
		<b>	Category Name<span class="text-danger">*</span></b> &nbsp;
				<input type="text" name="category_name" class="form-control"
                         parsley-trigger="change" required data-parsley-pattern="/[A-Z a-z\\_\\-]+$/" onkeypress="return blockSpecialChar(event)"><br>
        						{{-- @if ($errors->has('categoryName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('categoryName') }}</strong>
                                    </span>
                                @endif --}}
                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md float-right"  id="sa-success">ADD</button><br>
		</div>
	
		</form>
				</div>
			</div>
		</div>
	</div>
    </div>

</div>



@endsection

