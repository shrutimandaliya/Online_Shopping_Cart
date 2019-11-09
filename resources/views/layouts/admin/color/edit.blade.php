{{-- @extends('layouts.admin.common.topheader')
@extends('layouts.admin.common.header') --}}

@extends('layouts.admin.app')
@section('title','Edit Color ')

@section('content')
 <div class="content-page">
                <!-- Start content -->

                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Color</h4>
            <div class="breadcrumb float-right">
            <a href="{{ url('colorDetails') }}" class="btn btn-custom waves-effect waves-light btn-md">Back</a>
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
<div class="col-lg-6">  

		<div class="card-box table-responsive">
    <h4 class="page-title float-left">Change Color</h4>
    <br><br>
					 <div align="pull-left">
						<form action="{{ url('updateColor/'.$id) }}" method="post" id="form">
						{{csrf_field()}}
		<div class="form-group-row{{ $errors->has('colorName') ? ' has-error' : '' }}">

				
			 	<b>	Change Color Name:<span class="text-danger">*</span></b> &nbsp;
						<input type="text" name="colorName" value="{{$edit->color_name}}" class="form-control" parsley-trigger="change" required data-parsley-pattern="/[A-Z a-z\\_\\-]+$/"><br>	{{-- category_name is a name of db column --}}
							{{-- @if ($errors->has('colorName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('colorName') }}</strong>
                                    </span>
                                @endif --}}
            </div>
    <button type="submit" class="btn btn-custom waves-effect waves-light btn-md pull-right">Change</button>
						
					</form>
			        </div>
				</div>
			</div>
		</div>

	</div>
</div>

@endsection