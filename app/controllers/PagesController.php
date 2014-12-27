<?php

class PagesController extends \BaseController {

	public function home(){		
		date_default_timezone_set("Asia/Dhaka");
		$date = date("Y-m-d");
		$todays_match = Schedule::where('match_date', $date)->get();

		return View::make('pages.home')
		->with('teams',Teamdescription::allteam())
		->with('todays_matchs',$todays_match)
		->with('class','class="scroll"');
	}

	public function schudule(){
		$schedules = Schedule::all();

		return View::make('pages.schuResult')
		->with('schedules',$schedules)
		->with('class','class="none"');;
	}

	public function register(){
		return View::make('pages.registration')
		->with('class','class="none"');;
	}
	public function karigor(){
		return View::make('pages.karigor')
		->with('class','class="scroll"');
	}
	
}
