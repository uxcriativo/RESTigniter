<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * APP_Public 
 * 
 * */
class APP_Public extends CI_Controller
{
	function __construct ()
    {
        parent::__construct();
        $this->load->library('session');
		$user = $this->session->userdata();        
       	$this->user=$user;
    }
    
}