<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Book_model;
class Book extends Controller {

    protected $Book_model;
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct(RequestInterface $request, ResponseInterface $response) {
       
        parent::__construct($request, $response);
        $this->Book_model = new Book_model();
        
        helper('url');
    }

    public function index() {

        $data['books'] = $this->Book_model->get_all_books();
        return view('book_view', $data);
    }

    public function book_add() {
        $data = array(
            'book_isbn' => $this->request->getPost('book_isbn'),
            'book_title' => $this->request->getPost('book_title'),
            'book_author' => $this->request->getPost('book_author'),
            'book_category' => $this->request->getPost('book_category'),
        );
        $insert = $this->Book_model->book_add($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id) {
        $data = $this->Book_model->get_by_id($id);



        echo json_encode($data);
    }

    public function book_update() {
        $data = array(
            'book_isbn' => $this->request->getPost('book_isbn'),
            'book_title' => $this->request->getPost('book_title'),
            'book_author' => $this->request->getPost('book_author'),
            'book_category' => $this->request->getPost('book_category'),
        );
        $this->Book_model->book_update(array('book_id' => $this->request->getPost('book_id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function book_delete($id) {
        $this->Book_model->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

}
