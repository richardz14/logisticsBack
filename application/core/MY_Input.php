
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Input extends CI_Input {

    function __construct(){
        parent::__construct();

		$this->bootstrap();
	}
  /* Bootstrap */
	function bootstrap(){
	
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
		header('Access-Control-Max-Age: 1000');
		header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
	}

}