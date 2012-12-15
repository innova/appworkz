<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class awz_business extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 * 
	 */
	
	/**
	 * @var array(status=>1-success/0-fail, message=>string)
	 * this shoould be returned as jeson encoded variable using echo 
	 * 
	 **/ 
	public $return;
	public function index()
	{
		$this->load->view('welcome_message');
		
	}
	
	/**
	 * @access public login
	 * @param  email,password
	 * @return fail/success,message
	 * @author Lucil - lucil.sandaruwan@cyberlmj.com
	 **/
	public function login()
	{
		
		$email=$this->request->email;
		$pwd=$this->request->password;
		
		$auth=TRUE ; // result of function 
		
		if($auth)
		{
			$this->return['message']="success";
		}
		else 
		{
			$this->return['status']=0;
		}
		
		echo json_encode($this->return);
		
	}
	
	/**
	 * @access public sign up
	 * @param  email,password
	 * @return fail/success,message
	 * @author Lucil - lucil.sandaruwan@cyberlmj.com
	 **/
	public function signup()
	{
		$email=$this->request->email;
		$pwd=$this->request->password;
		$first_name=
		$business_name=$this->request->business_name;
		$business_short_description=$this->request->business_short_description;
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */