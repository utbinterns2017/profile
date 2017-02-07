@extends('layout.main')
@section('styles')
<link rel="stylesheet" href="css/style.css">
@endsection

@section('content')
<h2><span class="glyphicon glyphicon-user"></span> User Profile </h2>
<hr>
<div class="row">
	<div class="col-md-4"><!-- picture and menu column -->
		<div class="text-center">
			<img src="img\default-profile.png" class="img-square" id="userpic" alt="user-pic">
			<h4><i>Hanif Jumat</i></h4>
			<div class="list-group">
				<a href="#" class="list-group-item" id="active">Profile</a>
				<a href="{{route('page.dashboard')}}" class="list-group-item">Enrolled Courses <span class="badge">78</span></a>
				<a href="#" class="list-group-item">My Institution <span class="badge">4</span></a>
				<a href="#" class="list-group-item">My Social Media <span class="badge">3</span></a>
			</div>
		</div>	
	</div><!-- end of picture and menu column -->

	<div class="col-md-5"> <!-- user info should be here -->
		<blockquote class="blockquote-reverse quote-div">
			<p>The Object of Education is to prepare the young to educate themselves throughout their lives	</p>
			<footer>Robert M. Hutchins</footer>
		</blockquote>

		<table class="table table-borderless">
			<tbody>
				<tr>
					<th>Username</th>
					<td>macintosh.windows</td>
				</tr>				
				<tr>
					<th>Full Name</th>
					<td>Macintosh Windows II</td>
				</tr>
				<tr>
					<th>Gender</th>
					<td>Male</td>
				</tr>
				<tr>
					<th>Country</th>
					<td>Brunei</td>
				</tr>
				<tr>
					<th>Birthday</th>
					<td>1<sup>st</sup> February 1992</td>
				</tr>
				<tr>
					<th>Education Level</th>
					<td>Bachelor</td>
				</tr>
				<tr>
					<th>About Me</th>
					<td>Nothing will stop me from learning. I have faith that education will make people wiser, wealthier and sometimes scarier.</td>
				</tr>
			</tbody>
		</table>
		<a href="{{route('page.editprofile')}}"  class="btn btn-default btn-sm option-btn pull-right"><span class="glyphicon glyphicon-edit"></span> Update</a>

	</div><!-- End of user info div -->

	<div class="col-md-3"> <!-- Tags div -->
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
	</div><!-- end of tags div -->
	
</div> <!--End of row-->


<hr id="bottom-hr">

@endsection