@extends('layouts/default')

@section('content')
	@include('layouts.partials.navigation')	
	<!-- Registration section -->			
	<div class="container">
		<div class="registration-box">
			<h1 class="text-center">Want's to Play Badminton, <span>Register.</span></h1>
			<form class="form-registration">						
				<div class="group">      
					<input type="text" placeholder="Team Loser">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Team - Name</label>
				</div>

				<div class="group">      
					<input type="email" placeholder="Your Email Address">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Team - Email</label>
				</div>

				<div class="group">      
					<input type="text" placeholder="Abir">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Team Member - 1</label>
				</div>

				<div class="group">      
					<input type="file" placeholder="Abir">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Member - 1 Image</label>
				</div>

				<div class="group">      
					<input type="text" placeholder="Abir">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Team Member - 2</label>
				</div>

				<div class="group">      
					<input type="file" placeholder="Abir">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Member - 2 Image</label>
				</div>

				<input class="button" type="submit">
			</form>
		</div>
		<div class="clearfix"> </div>
	</div>
@stop