@extends('layout.hometemp')

@section('title', 'Info System');

@section('content')
    <div class="verticalAlign">
	  	<div class="input-group">
		  <input class="input-group-field" type="text" placeholder="Dela Cruz Juan">
		  <div class="input-group-button">
		    <input type="submit" class="button btnGreen" id="idSearch" value="Search">
		  </div>
		</div>
		<div class="row">
			<small> <a href="{{ url('/employees/create') }}">New Employee</a> | <a href="{{ url('/employees') }}">Employees List</a></small>
		</div>
  	</div>
@endsection