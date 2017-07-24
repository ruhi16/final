@extends('layouts.baselayout')
@section('title','Home Page')

@section('header')
	@include('layouts.navbar')
@endsection

@section('content')
<h1>Login Page</h1>
<form method="post" class="form-horizontal" action="{!! url('login-submit') !!}"" value="{{ csrf_token() }}">  {{ csrf_field() }}
<div class="row">
	<div class="col-md-offset-2 col-md-8 col-md-offset-2">
		<div class="panel panel-primary">
		  	<div class="panel-heading">Login Form</div>
		  	<div class="panel-body">
				<div class="form-group">
		    		<label class="control-label col-sm-2" for="email">Email:</label>
		    		<div class="col-sm-10">
		      			<input name="email" type="email" class="form-control" id="email"  placeholder="Enter email">
		    		</div>
		  		</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Password:</label>
				    <div class="col-sm-10">
				    	<input name="password" type="password" class="form-control" id="pwd" placeholder="Enter password">
				    </div>
				</div>
				<div class="form-group">
		    		<div class="col-sm-offset-2 col-sm-10">
		      			<div class="checkbox">
		        			<label><input type="checkbox"> Remember me</label>
		      			</div>
		    		</div>
		  		</div>
		  		<div class="form-group">
		    		<div class="col-sm-offset-2 col-sm-10">
		      			<button type="submit" class="btn btn-default">Submit</button>
		    		</div>
		  		</div>
		  	</div>
		</div>
	</div>
</div>
</form>
@endsection


@section('footer')
	@include('layouts.footer')
@endsection