@extends('layout.header')

@section('content')

<center><br><br>
	<form method="post" action="/welcome" enctype="multipart/form-data">
	@csrf
	<div class="card text-white bg-dark mb-3" style="max-width: 25rem;">
		<div class="card-header"><h4>Add New Categories</h4></div>
			<div class="card-body">
				<h5 class="card-title">
				<label for="category">Category</label>
				<input type="text" class="form-control" id="category" name="category" placeholder="e.g. Electronics , Home Products etc">
				</h5>
				<span>
				{{-- Display errors --}}
					@if($errors->has('category'))
						<div class="alert alert-danger">
							{{$errors->first('category')}}
						</div>
					@endif
				</span>

				<center>
					<button type="submit" class="btn btn-info ">Add</button><br><br>
				</center>
				<a href="/welcome" class="btn btn-info">Cancel</a><br>
			</div>
		</div>
	</form>
</center>

@endsection

@section('footer')
	@include('layout.footer')
@endsection
