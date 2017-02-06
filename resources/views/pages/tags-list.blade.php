@extends('layout.main')
@section('styles')
<link rel="stylesheet" href="css/style.css">
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>Related Courses</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Course Name</th>
						<th>Price</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					@foreach($courses as $key=>$course)
					<tr>
						<th>{{$key+1}}</th>
						<td>
							<a href="#"  id="course-name">{{ $course }}</a>
						</td>
						<td>USD 20.00</td>
						<td>
							<a href="#" class="btn btn-default btn-sm option-btn"><span class="glyphicon glyphicon-search"></span> Enroll</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div><!--End of col-md -8-->

	{{-- 	<div class="col-md-3">
			<div class="well">
				{!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
					<h2>New Tag</h2>
					{{ Form::label('name', 'Name') }}
					{{ Form::text('name', null, ['class' => 'form-control'])}}

					{{ Form::submit('Create New Tag', ['class' => 'btn btn-primary btn-block btn-h1-spacing'])}}
				{!! Form::close() !!}
			</div>
		</div> --}}
	</div>
@endsection