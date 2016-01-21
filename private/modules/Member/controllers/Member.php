<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
		if ($this->ion_auth->logged_in())
		{
			$this->data['logged']=TRUE;
		}
	}

	// redirect if needed, otherwise display the user list
	function index()
	{

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('admin/login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			$this->_render_page('member/index', $this->data);
		}
	}

	


	function _render_page($view, $data=null, $returnhtml=false)//I think this makes more sense
	{
		$this->viewdata = (empty($data)) ? $this->data: $data;		
		$view_html  = $this->load->view('common/head.php', $this->viewdata, $returnhtml);
		$view_html = $this->load->view('common/navbar.php', $this->viewdata, $returnhtml);
		$view_html = $this->load->view('common/body.php', $this->viewdata, $returnhtml);
		$view_html = $this->load->view($view, $this->viewdata, $returnhtml);
		$view_html = $this->load->view('common/footer.php', $this->viewdata, $returnhtml);
		$view_html = $this->load->view('common/scripts.php', $this->viewdata, $returnhtml);
		
		if ($returnhtml) return $view_html;
		
		
		
	}

}
