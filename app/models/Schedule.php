<?php

class Schedule extends Eloquent
{	
	public function getsomethings(){
		return Teamdescription::where('id',$this->teamName1)->first()->teamName;
	}
	public function getsomethings1(){
		return Teamdescription::where('id',$this->teamName2)->first()->teamName;
	}
	public  function result(){
		return Teamdescription::where('id',$this->winner)->first()->teamName;
	}
}