<?php
	/*
		SETTINGS
	*/


	/*
		Development mode: 
		Turns on file into development mode which will display certain info which is not meant for public.
		NOTE: REMEMBER to set to FALSE before publishing your files LIVE
	*/
	$objSettings -> isDEVMODE = false;

	//If TRUE, viewport tag is included
	$objSettings -> isMobileResponsive = false;

	//if TRUE, allow session
	$objSettings -> isSession= false;

	//Viewport values
	$objSettings -> strMobileViewport = '<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=yes" />';
	
	
	if ($objSettings -> isDEVMODE){
		print_r('Loaded file ==> '.__FILE__);
	}
	

	//Session starts here
	if ($objSettings -> isSession){
		session_start(); 
	}
?>