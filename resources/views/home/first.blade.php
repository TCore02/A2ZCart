@extends('layout.header')

@section('content')
<center><br><br>
@if(Session::has('message') && Session::has('success'))
	<div class="alert {{ Session::get('success') ? 'alert-success' : 'alert-danger' }}">
		{{Session::get('message')}}
	</div>
@endif
<div>
  <a href="/welcome" class="btn btn-info">Proceed</a><br>
  <center><img src="{{asset('image/logo.png')}}" height="500px" width="900px" class="img-responsive"></center>
</div>
</center>
@endsection

@section('footer')
	@include('layout.footer')
@endsection
