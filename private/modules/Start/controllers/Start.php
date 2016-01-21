<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends APP_Public  {
	
	function __construct()
	{
		parent::__construct();
		
		
	}
	
	
	public function index()
	{		
		
	
	}
	
	/**
	 * REMAP MODE
	 */
	public function _remap()
	{
		$this->load->library('parser');
		$data['title'] = "TEMPLATigniter 0.1";
		$data['body']  = "This is body text to show that the Smarty Parser works!";
		$data['cdn'] = CDN;
		$data['baseurl']=base_url();		
		$this->parser->parse("common/head.tpl", $data);
		$this->parser->parse("common/navbar.tpl", $data);
		$this->parser->parse("header.tpl", $data);
		$this->parser->parse("body.tpl", $data);
		$this->parser->parse("common/footer.tpl", $data);
	}
	
}
