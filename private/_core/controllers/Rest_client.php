<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rest_client extends CI_Controller {
	
	 
	public function index()
	{
		$this->load->spark('curl/1.3.0');		
		// Simple call to remote URL
		echo $this->curl->simple_get('http://example.com/');
		
		// Load the library
		$this->load->library('rest');
		

		$config = array('server'            => 'http://dev.server/',
				//'api_key'         => 'Setec_Astronomy'
				//'api_name'        => 'X-API-KEY'
				//'http_user'       => 'username',
				//'http_pass'       => 'password',
				//'http_auth'       => 'basic',
				//'ssl_verify_peer' => TRUE,
				//'ssl_cainfo'      => '/certs/cert.pem'
		);
		
		// Run some setup
		$this->rest->initialize($config);
		
		// Pull in an array of tweets
		$tweets = $this->rest->get('_projects/restigniter/app.xml');
		print_r($tweets);
		
		
		
		/*// Simple call to CI URI
		$this->curl->simple_post('controller/method', array('foo'=>'bar'));
		
		// Set advanced options in simple calls
		// Can use any of these flags http://uk3.php.net/manual/en/function.curl-setopt.php
		
		$this->curl->simple_get('http://example.com', array(CURLOPT_PORT => 8080));
		$this->curl->simple_post('http://example.com', array('foo'=>'bar'), array(CURLOPT_BUFFERSIZE => 10));
		*/
	}
}