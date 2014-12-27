@extends('layouts/default')

@section('content')

@include('layouts.partials.navigation')	

<div class="container info-text">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="caption text-center info">
				<h1><span>Schedule &amp; Result</span></h1>
			</div>
		</div>
	</div>
</div><!-- End of info-text -->

<div class="container">
	<div class="row result-table">
		<table class="table table-responsive table-hover">
			<thead>
				<tr>
					<th>Match-Number</th>
					<th>Vs</th>
					<th>Date</th>
					<th>Winner</th>
				</tr>
			</thead>
			<tbody>
				@foreach($schedules as $schedule)
				<tr>
					<th scope="row">{{ $schedule->match_id}}</th>
					<td>{{ $schedule->getsomethings() }} VS {{ $schedule->getsomethings1() }}</td>
					<td>{{ $schedule->match_date}}</td>
					<td>{{ $schedule->result() }}</td>
				</tr>
				@endforeach				
			</tbody>
		</table>
	</div>
</div>
<!-----End-header---->
@stop