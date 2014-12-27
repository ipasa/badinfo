@extends('layouts/default')

@section('content')

		@include('layouts.partials.navigation')				

		<div class="container info-text">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="caption text-center info">
						<h1>Lat's Play <span>Badminton.</span></h1>
						<h2>Made to modify and use anywhere</h2>
					</div>
				</div>
			</div>
		</div><!-- End of info-text -->

		<div class="container notification-box">
			<div class="row">
				<div class="col-md-4 col-md-offset-1 notifi-box">
					<h4 class="caption text-center">
						<span class="first"></span>
						Today's Match
						<span class="second"></span>
					</h4>
					<ul>
						@foreach($todays_matchs as $todays_match)
						<li>
							<span></span>
							{{ $todays_match->getsomethings() }} VS {{ $todays_match->getsomethings1() }}
						</li>
						@endforeach
					</ul>
				</div>
				<div class="col-md-4 col-md-offset-2 notifi-box">
					<h4 class="caption text-center">
						<span class="first"></span>
						Today's Winner
						<span class="second"></span>
					</h4>
					<ul>
						@foreach($todays_matchs as $todays_match)
						<li>
							<span></span>
							{{ $todays_match->result() }}
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-----End-header---->	

	<!-- Start Team-Section -->	
	<div class="team-section">
		<div id="team" class="team-all">
			<div class="container-fluid">
				<?php $i=1; ?> 
				<div class="row">
					@foreach($teams as $team)

					@if ($i%2 === 1)
					<div class="col-md-5 col-md-offset-1 team-box margin-right">
						<div class="team-name">
							<h3>{{ $team->teamName}}  </h3>
						</div>
						<div class="team-image">
							<div class="row">
								<div class="col-md-6 border-right">
									<img src="images/download.jpg" alt="" class="fix-img img-circle">
									<h4>Hasan Hafiz Pasha</h4>
								</div>
								<div class="col-md-6">
									<img src="images/download.svg" alt="" class="fix-img img-circle">
									<h4>Anwarul Islam Abir</h4>
								</div>
							</div>
						</div>
						<div class="team-desc">
							<p>Batch - 2nd</p>
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
					<?php $i=$i+1; ?>
					
					@else
					<div class="col-md-5 team-box">
						<div class="team-name">
							<h3>{{ $team->teamName}}  </h3>
						</div>
						<div class="team-image">
							<div class="row">
								<div class="col-md-6 border-right">
									<img src="images/download.jpg" alt="" class="fix-img img-circle">
									<h4>Hasan Hafiz Pasha</h4>
								</div>
								<div class="col-md-6">
									<img src="images/download.svg" alt="" class="img-circle">
									<h4>Anwarul Islam Abir</h4>
								</div>
							</div>
						</div>
						<div class="team-desc">
							<p>Batch - 2nd</p>
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
					<?php $i=$i+1; ?>
					@endif
					@endforeach
				</div>	
			</div>
		</div>
	</div>
@stop