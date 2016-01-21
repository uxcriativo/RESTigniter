<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * APP_Private 
 * */
class APP_Private extends APP_Start
{
	function __construct ()
    {
        parent::__construct();        
		$this->load->database();
		$this->load->library('session');
		$user = $this->session->userdata();
        if(!isset($user['user_id'])){
        	redirect('auth');
        }
        else{$this->user=$user;}
    }
    
}