@extends('layout.header')

@section('content')
<center><br><br>
@if(Session::has('message') && Session::has('success'))
	<div class="alert {{ Session::get('success') ? 'alert-success' : 'alert-danger' }}">
		{{Session::get('message')}}
	</div>
@endif
<div class="card text-white bg-dark mb-3" style="max-width: 40rem;">
	<div class="card-header"><h4>Choose category of product that you want to buy</h4></div>
</div><br>
@if(Auth::check() && Auth::user()->role == '1')
	<a href="/welcome/create"><i class="fa fa-star"></i><span "><h3>Add</h3> </span></a>
@endif

<div class="card text-white bg-info mb-3" style="max-width: 20rem;"><br>
	@foreach ($items as $item)
		<center>
			<tr>
					<div class="card text-black bg-dark " style="max-width: 10rem;">
						<div class="card btn btn-dark ">
							<a type="btn btn-dark" href="{{'welcome/'.($item->id)}}" class="card ">{{$item->category}}</a>
						</div>
					</div><br>
			</tr>
		</center>
	@endforeach
</div>
</center>
@endsection

@section('footer')
	@include('layout.footer')
@endsection
