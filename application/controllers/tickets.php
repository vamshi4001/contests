<?php defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class Tickets extends REST_Controller
{
	
	function generateTicket_get(){
		// taskId, validity
	}
	function getAllTickets_get(){
		//taskId
	}
	function invalidateTickets_get(){
		//taskId
	}
}