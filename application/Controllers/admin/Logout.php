<?php namespace App\Controllers\admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Logout extends Controller
{
    protected $validation;
    protected $session;
    protected $baseUrl;

    public function __construct(RequestInterface $request, ResponseInterface $response) {
       
                parent::__construct($request, $response);
                $this->validation =  \Config\Services::validation();
                $this->session = \Config\Services::session();
                $this->session->start();
                $this->baseUrl = base_url();
                helper('url');
        }
        
        var $id = "";
	public function index()
	{
                $session_items = array('uname', 'uid');
                $this->session->remove($session_items);
                $this->session->setFlashdata('msg', '<div class="alert alert-danger text-center">Logout Sucessfully !</div>');
                //$id['index'] = 'Account Created Successfully.!';
		return view('dashboard/signin.php');
	}
        
        
       
	//--------------------------------------------------------------------

}
