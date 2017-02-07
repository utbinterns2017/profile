@extends('layout.main')
@section('styles')
<link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
@endsection

@section('content')
<h2><span class="glyphicon glyphicon-edit"></span> Edit Profile</h2>
<hr>
<div class="row">
	<div class="col-lg-3">
		<div class="text-center">
			<img src="img\default-profile.png" class="img-square" id="userpic" alt="user-pic">
			<h4 id="flip"><span class="glyphicon glyphicon-camera"></span> Update Picture</h4>
			<div id="upload-btn">
						{{-- {!! Form::open(['files' => true]) !!}
						{!! Form::file('upload', ['class' => 'form-control uploadbtn', 'style' => 'margin-top:10px;'] ) !!}
						{!! Form::close() !!} --}}
						<input type="file" onchange="readURL(this);" id="img-read"/>
					</div>
					{{-- 		 --}}
					<hr>
					<div class="list-group">
						<a href="#" class="list-group-item" id="active">Profile</a>
						<a href="#" class="list-group-item">Reset Password</a>
						<a href="#" class="list-group-item">My Institution</a>
						<a href="#" class="list-group-item">My Social Media</a>
					</div>
				</div>
			</div>

			<div class="col-lg-9">
				{!! Form::open(['class' => 'form-horizontal']) !!}
				<!--username-->
				<div class="form-group">
					{!! Form::label('username', 'Username', ['class' => 'col-lg-3 control-label']) !!}
					<div class="col-lg-9">
						{!! Form::text('username', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255' )) !!}
					</div>
				</div> <!--end-username-->

				<!--login email-->
				<div class="form-group">
					{!! Form::label('email', 'Login Email', ['class' => 'col-lg-3 control-label']) !!}
					<div class="col-lg-9">
						{!! Form::email('username', null, ['class' => 'form-control']) !!}
					</div>
				</div> <!--end-login email-->

				<!--first name-->
				<div class="form-group">
					{!! Form::label('firstname', 'First Name', ['class' => 'col-lg-3 control-label']) !!}
					<div class="col-lg-9">
						{!! Form::text('firstname', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255' )) !!}
					</div>
				</div> <!--end-first name-->

				<!--last name-->
				<div class="form-group">
					{!! Form::label('lastname', 'Last Name', ['class' => 'col-lg-3 control-label']) !!}
					<div class="col-lg-9">
						{!! Form::text('lastname', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255' )) !!}
					</div>
				</div> <!--end-last name-->
				
				<!--gender-->
				<div class="form-group">
					{!! Form::label('gender', 'Gender', ['class' => 'col-lg-3 control-label']) !!}
					<div class="col-lg-9">
						{!! Form::select('gender', ['Secret' => 'Secret', 'Male' => 'Male', 'Female' => 'Female'], 'Male', ['class' => 'form-control']) !!}
					</div>
				</div> <!--end-gender-->


				<!--country-->
				<div class="form-group">
					{!! Form::label('country', 'Country', ['class' => 'col-lg-3 control-label']) !!}
					<div class="col-lg-9">
						{!! Form::select('country', ['Brunei' => 'Brunei', 'Malaysia' => 'Malaysia', 'Indonesia' => 'Indonesia', 'Singapore' => 'Singapore', 'Philippines' => 'Philippines', 'Thailand' => 'Thailand' ], 'Brunei', ['class' => 'form-control']) !!}
					</div>
				</div> <!--end-country-->

				<!--birthday-->
				<div class="form-group">
					{!! Form::label('birthday', 'Birthday', ['class' => 'col-lg-3 control-label']) !!}
					<div class="col-md-9">
						<div class="row">
							<div class="col-lg-4">
								{!! Form::select('birthday-year', ['1991' => '1991', '1992' => '1992', '1993' => '1993'],'1991',['class' => 'form-control']) !!}
							</div>
							<div class="col-lg-4">
								{!! Form::select('birthday-month', ['January' => 'January', 'February' => 'February', 'March' => 'March'], 'February', ['class' => 'form-control']) !!}
							</div>
							<div class="col-lg-4">
								{!! Form::select('birthday-date', ['1' => '1', '2' => '2', '3' => '3'], '1', ['class' => 'form-control']) !!}
							</div>
						</div>
					</div>
				</div><!--end-birthday-->

				<!--education-->
				<div class="form-group">
					{!! Form::label('education', 'Education Level', ['class' => 'col-lg-3 control-label']) !!}
					<div class="col-lg-9">
						{!! Form::select('education', ['Primary School' => 'Primary School', 'High School' => 'High School', 'Bachelor' => 'Bachelor', 'Doctoral' => 'Doctoral'], 'Bachelor', ['class' => 'form-control']) !!}
					</div>
				</div> <!--end-education-->

				<!--about-me-->
				<div class="form-group">
					{!! Form::label('aboutme', 'About Me', ['class' => 'col-lg-3 control-label']) !!}
					<div class='col-lg-9'>
						{!! Form::textarea('aboutme', null, ['class' => 'form-control', 'rows'=>'3']) !!}
					</div>
				</div>

				<div class="form-group">
					<div class="col-lg-9 col-lg-offset-3">
						<a class="btn btn-lg btn-default" href="{{ route('page.index') }}">Cancel</a>
						{!! Form::submit('Save Changes', ['class' => 'btn btn-lg edit-save']) !!}
					</div>
				</div>
				
				{!! Form::close() !!}
			</div>
		</div>
		<br>

		@section('scripts')
		<script>
			$(document).ready(function(){
				$("#flip").click(function(){
					$("#upload-btn").slideToggle("slow");
				});
			});

			function readURL(input){
				if(input.files && input.files[0]){
					var reader = new FileReader();
					

					reader.onload = function (e) {
						$('#userpic').attr('src', e.target.result).width(250).height(250);
					};

					reader.readAsDataURL(input.files[0]);
				}
			}
		</script>
		@endsection
		@endsection