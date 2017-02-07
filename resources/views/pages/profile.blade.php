@extends('layout.main')
@section('styles')
<link rel="stylesheet" href="css/style.css">
@endsection

@section('content')

<div class="row">
	<div class="col-md-8 form-div">
		<h2><span class="glyphicon glyphicon-user"></span> User Profile </h2>
		<hr>
		<!--There is something wrong with this layout on mobile. Gotta change it if accepted-->

		<div class="row">
			<div class="col-md-4">
				<div class="text-center">
					<img src="img\default-profile.png" class="img-square" id="userpic" alt="user-pic">
					<h4><i>Roland Marshall</i></h4>
					<div class="list-group">
						<a href="#" class="list-group-item" id="active">Profile</a>
						<a href="{{route('page.dashboard')}}" class="list-group-item">Enrolled Courses <span class="badge">78</span></a>
						<a href="#" class="list-group-item">My Institution <span class="badge">4</span></a>
						<a href="#" class="list-group-item">My Social Media <span class="badge">3</span></a>
					</div>
				</div>	
			</div><!--end of image-div-->

			<div class="col-md-8 quote-div">
				<blockquote class="blockquote-reverse">
					<p><i>The Object of Education is to prepare the young to educate themselves throughout their lives</i></p>
					<footer>Robert M. Hutchins</footer>
				</blockquote>

				<div class="row about-me-div">
					<div class="col-md-4">
						<p><strong>Username</strong></p>
						<p><strong>Name</strong></p>
						<p><strong>Gender</strong></p>
						<p><strong>Country</strong></p>
						<p><strong>Birthday</strong></p>
						<p><strong>Education Level</strong></p>
						<strong>About Me</strong>
					</div><!--end of about-me-title-div-->

					<div class="col-md-8">
						<p><italic>roland.marshall</italic></p>	
						<p><italic>Roland Marshall</italic></p>
						<p><italic>Secret</italic></p>
						<p><italic>France</italic></p>
						<p><italic>1<sup>st</sup> February 1992</italic></p>
						<p><italic>Bachelor of Arts in Music</italic></p>
						<p><italic>Nothing will stop me from learning. I have faith that education will make people wiser, wealthier and sometimes scarier.</italic></p>
						<a href="{{route('page.editprofile')}}"  class="btn btn-default btn-sm option-btn pull-right"><span class="glyphicon glyphicon-edit"></span> Update</a>
					</div><!--end of about-me-desc-div-->
				</div><!--end of about-me-div-->
			</div><!--end of quote-div-->
		</div>
	</div>

	<div class="col-md-4 tag-div">
		<div class="well">
			<h2 class="text-center">Tags of Interests</h2>
			<hr>
			<div class="text-center">
				@foreach($tags as $tag)
				<h4><span class="label label-default tag-btn"><a href="{{route('page.courses')}}" class="tags">{{ $tag }}</a></span></h4>
				@endforeach
				<hr>
				<a href=""><span class="glyphicon glyphicon-plus-sign"></span> Add More</a>
			</div>

		</div>
	</div>
</div>

<hr id="bottom-hr">

@endsection