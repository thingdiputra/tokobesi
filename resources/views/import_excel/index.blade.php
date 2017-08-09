@extends('backpack::layout')

@section('header')
	<section class="content-header">
	  <h1>
	    Import Product<small>&emsp;Import all products from excel</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ url(config('backpack.base.route_prefix'), 'dashboard') }}">Admin</a></li>
	    <li><a href="{{ str_replace('/import', '', Request::url()) }}" class="text-capitalize">Products</a></li>
	    <li class="active">Import</li>
	  </ol>
	</section>
@endsection

@section('content')
<br><br>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
	  	  <a href="{{ str_replace('/import', '', Request::url()) }}"><i class="fa fa-angle-double-left"></i><span> Back to all products </span></a>
		  <br>
		  <br>

	  	  @if ($errors->any())
	      <div class="alert alert-danger">
	          <ul>
	              @foreach ($errors->all() as $error)
	                  <li>{{ $error }}</li>
	              @endforeach
	          </ul>
	      </div>
		  @endif

		  {!! Form::open(['action' => ['ExcelController@ImportClients'], 'files' => true]) !!}
		  <div class="box">
		    <div class="box-header with-border">
			    <center>
			      <h6 class="box-title"><small>Please choose excel file with extension .csv, .xls, or .xlsx</small></h6>
			    <center>
		    </div>
		    <div class="box-body row">
		    	<br><br>
			    <center>
			    	{{ Form::file('attachment', ['accept' => '.csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel']) }}
			    </center>
		    </div><!-- /.box-body -->
		    <br><br>
		    <div class="box-footer">
			    <br>
			    <center>
			    	{{ Form::button('<i class="fa fa-paperclip"><span style="font-family: Source Sans Pro, sans-serif;"> &nbsp;Import</span></i>', ['type' => 'submit', 'class' => 'btn btn-default'] )  }}
			    </center>
			    <br>
		    </div><!-- /.box-footer-->
		  </div><!-- /.box -->
		  {!! Form::close() !!}
	</div>
</div>

@endsection