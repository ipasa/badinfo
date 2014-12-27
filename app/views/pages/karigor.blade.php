@extends('layouts/default')

@section('content')

		<!----start-side-nav---->
		<nav class="side-nav">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a href="#pasha" class="scroll">
							<img src="images/download.jpg" alt="" class="side-img img-circle"> 
						</a>
					</div>
					<div class="col-md-12">
						<a href="#robin" class="scroll">
							<img src="images/download.jpg" alt="" class="side-img img-circle"> 
						</a>
					</div>
					<div class="col-md-12">
						<a href="#goodbye-section" class="scroll">
							<img src="images/download.jpg" alt="" class="side-img img-circle"> 
						</a>
					</div>
				</div>
			</div>
			</div>
		</nav>
		<!-----start-container----->
		<!-----header-section------>
		<div class="header-section">
			<!----- start-header---->
			<div id="pasha" class="header fullpage">
				<div class="container fill">
					<div class="top-header">
						<div class="logo">
							<a href="{{ URL::route('home') }}"><img src="images/logo.png" title="logo" /></a>
						</div>
						<!----start-top-nav---->
						<nav class="top-nav">
							<ul class="top-nav">
								<li class="active"><a href="{{ URL::route('home') }}">Home </a></li>
								<li class="page-scroll"><a href="{{ URL::route('home') }}#team">TEAM </a></li>
								<li class="page-scroll"><a href="{{ URL::route('schudule') }}">Schedule &amp; Result </a></li>
								<li><a href="{{ URL::route('register') }}">Registration</a></li>
								<li class="contatct-active" class="page-scroll"><a href="#contact" class="scroll">Contact</a></li>
							</ul>
							<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
					</div>
					
					<!-- Personal Profile hasan hafiz Pasha -->
					<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 team-box margin-right margin-top">
									<div class="team-name">
										<h3>Hasan Hafiz Pasha</h3>
									</div>
									<div class="team-image">
										<div class="row">
											<div class="col-md-4 border-right">
												<img src="images/download.jpg" alt="" class="fix-img img-circle">
											</div>
											<div class="col-md-8">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo voluptatem in, sint vitae architecto magnam corrupti repudiandae ducimus autem voluptates. Maiores illum, nobis rem! Corporis neque, dolore dignissimos ut odio.</p>
											</div>
										</div><br>
									</div>

									<div class="team-love">
										<div class="row">
											<div class="col-md-6">
												<h6 class="text-left"><span class="glyphicon glyphicon-heart"></span> 0</h6>
											</div>
											<div class="col-md-6">
												<a href=""><h6 class="text-right"><span class="glyphicon glyphicon-heart-empty"></span> Vote - Team Looser</h6></a>
											</div>
										</div>																
									</div>
								</div>
							</div>
						</div><!-- End Personal Profile hasan hafiz Pasha -->

				</div>
			</div>
			<!-----End-header---->

			<!-----header-section------>
			<div id="robin" class="header-section">
				<!-- Personal Profile hasan hafiz Pasha -->
				<div class="container fill">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 team-box margin-right margin-top-robin">
							<div class="team-name">
								<h3>Hasan Hafiz Pasha</h3>
							</div>
							<div class="team-image">
								<div class="row">
									<div class="col-md-4 border-right">
										<img src="images/download.jpg" alt="" class="fix-img img-circle">
									</div>
									<div class="col-md-8">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo voluptatem in, sint vitae architecto magnam corrupti repudiandae ducimus autem voluptates. Maiores illum, nobis rem! Corporis neque, dolore dignissimos ut odio.</p>
									</div>
								</div><br>
							</div>

							<div class="team-love">
								<div class="row">
									<div class="col-md-6">
										<h6 class="text-left"><span class="glyphicon glyphicon-heart"></span> 0</h6>
									</div>
									<div class="col-md-6">
										<a href=""><h6 class="text-right"><span class="glyphicon glyphicon-heart-empty"></span> Vote - Team Looser</h6></a>
									</div>
								</div>																
							</div>
						</div>
					</div>
				</div><!-- End Personal Profile hasan hafiz Pasha -->
			</div>
			<!-----End-header---->


			<div id="goodbye-section" class="header-section">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
						<h2 class="text-center">Thank you!</h2>
						</div>
					</div>
				</div>
				
			</div>
	</body>
</html>
