@extends('layout.main')
@section('styles')
<link rel="stylesheet" href="css/style.css">
@endsection

@section('content')

<div class="row">
	<div class="col-md-8 form-div">
		<h2><span class="glyphicon glyphicon-user"></span> User Profile </h2>
		<hr>

		<div class="row">
			<div class="col-md-4">
				<div class="text-center">
					<img src="img\user.jpg" class="img-square" id="userpic" alt="user-pic">
					<h4><i>Melanie Laurent</i></h4>
					<div class="list-group">
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
						<p><italic>mel.laurent</italic></p>	
						<p><italic>Melanie Laurent</italic></p>
						<p><italic>Female</italic></p>
						<p><italic>France</italic></p>
						<p><italic>1<sup>st</sup> February 1992</italic></p>
						<p><italic>Bachelor of Arts</italic></p>
						<p><italic>Nothing will stop me from learning. I have faith that education will make people wiser, wealthier and sometimes scarier.</italic></p>
						<a href="#"  class="btn btn-default btn-sm option-btn pull-right"><span class="glyphicon glyphicon-edit"></span> Update</a>
					</div><!--end of about-me-desc-div-->
				</div><!--end of about-me-div-->
			</div><!--end of quote-div-->
		</div>
	</div>

	<div class="col-md-4 tag-div">
		<div class="well">
			<h2 class="text-center">Interests</h2>
			<hr>
			<div class="text-center">
				<h4><span class="label label-default">Hello</span></h4>
				<h4><span class="label label-default">CUHK</span></h4>
				<h4><span class="label label-default">Mathematics</span></h4>
				<h4><span class="label label-default">Geography</span></h4>
				<h4><span class="label label-default">Hello</span></h4>
				<h4><span class="label label-default">CUHK</span></h4>
				<h4><span class="label label-default">Mathematics</span></h4>
				<h4><span class="label label-default">Geography</span></h4>
				<h4><span class="label label-default">Hello</span></h4>
				<h4><span class="label label-default">CUHK</span></h4>
				<h4><span class="label label-default">Mathematics</span></h4>
				<h4><span class="label label-default">Geography</span></h4>
				<hr>
				<a href=""><span class="glyphicon glyphicon-plus-sign"></span> Add More</a>
			</div>

		</div>
	</div>
</div>

@endsection