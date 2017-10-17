<?php namespace App\Controllers\admin;

use CodeIgniter\Controller;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\AdminModels\Signup_Model;


class Signup extends Controller {

    protected $Signup_Model;

    public function __construct(RequestInterface $request, ResponseInterface $response) {

        parent::__construct($request, $response);
        $this->Signup_Model = new Signup_Model();

        helper('url');
    }

    public function index() {
        return view('dashboard/signup.php');
    }

    public function add_user() {
       
        $data['email_address'] = $this->request->getPost('email_address');
        $data['first_name'] = $this->request->getPost('first_name');
        $data['last_name'] = $this->request->getPost('last_name');
        $data['user_sex'] = $this->request->getPost('user_sex');
        $data['user_password'] = md5($this->request->getPost('user_password'));
        $id = $this->Signup_Model->add_user($data);
        $data['id'] = $id;
        return view('dashboard/signin.php',$data);
        
        
    }

    //--------------------------------------------------------------------
}
