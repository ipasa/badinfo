<!-- start-container -->
<!-- header-section -->
<div class="header-section">
	<!----- start-header---->
	<div id="home" class="header">

<!-- manu & navigation bar -->
<div class="container fill">
	<div class="top-header">
		<div class="logo">
			<a href="{{ URL::route('home') }}"><img src="images/logo.png" title="logo" /></a>
		</div>
		<!----start-top-nav---->
		@if($class)
		<nav class="top-nav">
			<ul class="top-nav">
				<li class="active"><a href="{{ URL::route('home') }}">Home </a></li>
				<li class="page-scroll"><a href="{{ URL::route('home') }}#team" {{ $class }}>TEAM </a></li>
				<li class="page-scroll"><a href="{{ URL::route('schudule') }}">Schedule &amp; Result </a></li>
				<li><a href="{{ URL::route('register') }}">Registration</a></li>
				<li class="contatct-active" class="page-scroll"><a href="#contact" class="scroll">Contact</a></li>
			</ul>
			<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
		</nav>
		@else
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
		@endif
		<div class="clearfix"> </div>
	</div>
</div>