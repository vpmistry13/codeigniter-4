<?php namespace App\Controllers\admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AdminModels\Login_Model;

class Layout extends Controller
{
    protected $session;
    protected $baseUrl;
    public function __construct(RequestInterface $request, ResponseInterface $response) {
       
                parent::__construct($request, $response);
                $this->validation =  \Config\Services::validation();
                $this->session = \Config\Services::session();
                $this->session->start();
                $this->Login_Model = new Login_Model();
                $this->Profile_Model = new \App\Models\AdminModels\Profile_Model();
                $this->baseUrl = base_url();
                helper('url');
                
              
        }
        
	public function index()
	{
           $sess_id = $this->session->has('uid');
              
                if(!empty($sess_id))
                {
                    $userId['id'] = $sess_id;
                    $profileData = $this->Profile_Model->get_user($userId);
                    $userData = get_object_vars ($profileData[0]);
                    echo view('dashboard/head/index');
                    echo view('dashboard/nav/index',$userData);
                    echo view('dashboard/layout',$userData);
                    echo view('dashboard/footer/index');
                    

                }else{

                     $this->session->setFlashdata('msg', '<div class="alert alert-danger text-center">Session Expired !</div>');
                     //load the login page
                     return view('dashboard/signin.php');        
                }  
            
	}

	//--------------------------------------------------------------------

}
