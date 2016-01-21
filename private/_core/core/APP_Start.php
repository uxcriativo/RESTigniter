<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * MY_START 
 * THIS RETURN TWO BIG OBJECTS
 * $user = if session else empty
 * $data = all global variables from config and URI 
 * 
 * NuclearCMS v1.0#
 * www.nuclearcms.com
 * */
class APP_Start extends CI_Controller
{
	public $user=array();
	public $data=array();
    function __construct ()
    {
        parent::__construct();
       	$this->__init();
    }
    
    function __init()
    {
    	$this->data['lang']        = $this->config->item('language');
    	$this->data['langkey']     = $this->config->item('language_abbr');
    	$this->data['langs']       = $this->config->item('lang_uri_abbr');
    	$this->data['root']        = base_url().$this->config->item('language_abbr').'/';
    	$this->data['title']       = $this->config->item('title_project');
    	$this->data['module']      = $this->uri->segment(0);
    	$this->data['controller']  = $this->uri->segment(1);
    	$this->data['method']      = $this->uri->segment(2);
    	$this->data['action']      = $this->uri->segment(3);
    	$this->data['model']       = $this->uri->segment(4);
    	$this->data['what']        = $this->uri->segment(5);
    	$this->data['limit']       = $this->uri->segment(6);
    	$this->data['offset']      = $this->uri->segment(7);          
    	
    	
    	foreach($this->data as $key=>$value)
    	{
    		$this->$key=$value;
    	}
    	
    }
    
}