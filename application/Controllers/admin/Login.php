<?php namespace App\Controllers\admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AdminModels\Login_Model;

class Login extends Controller
{
    protected $validation;
    protected $Login_Model;
    protected $session;
    protected $baseUrl;

    public function __construct(RequestInterface $request, ResponseInterface $response) {
       
                parent::__construct($request, $response);
                $this->validation =  \Config\Services::validation();
                $this->session = \Config\Services::session();
                $this->session->start();
                $this->Login_Model = new Login_Model();
                $this->baseUrl = base_url();
                helper('url');
        }
        
        var $id = "";
	public function index()
	{
                //$id['index'] = 'Account Created Successfully.!';
		return view('dashboard/signin.php');
	}
        
        
        public function auth_user()
        {
           
            // get form input
            $data['email_address'] = $this->request->getPost("email_address");
            $data['user_password'] = md5($this->request->getPost("user_password"));
           
           $this->validation->setRules([
                    'email_address' => 'required',
                    'user_password' => 'required|min_length[4]'
                ]);
            // form validation
          
            if ($this->validation->run($data) == FALSE)
            {
                
                // validation fail
                $id['invalid_credential'] = 'Email/Password Required ';
                return view('dashboard/signin.php', $id);
            }
            else
            {
                // check for user credentials
                
                $uresult = $this->Login_Model->get_user($data);
                
                if (count($uresult) > 0)
                {
                  
                    // set session
                    $sess_data = array('login' => TRUE, 'uname' => $uresult[0]->first_name, 'uid' => $uresult[0]->id);
                    $this->session->set($sess_data);
                    return redirect($this->baseUrl."index.php/admin/dashboard/index",'refresh');
                }
                else
                {
                    
                    $this->session->setFlashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Password!</div>');
                    return redirect($this->baseUrl.'index.php/admin/login','refresh');
                }
            }
    
        }
	//--------------------------------------------------------------------

}
