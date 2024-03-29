<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Verifylogin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        //load session and connect to database
        $this->load->model('login_model','login',TRUE);
        $this->load->helper(array('form', 'url','html'));
        $this->load->library(array('form_validation','session'));
    }
 
    public function index() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
 
        if($this->form_validation->run() == FALSE) {
            $this->load->view('login',$data);
            } else {
                //Go to private area
                redirect(base_url('admin'), 'refresh');
            }       
     }
 
    public function check_database($password) {
         //Field validation succeeded.  Validate against database
         $username = $this->input->post('username');
         //query the database
         $result = $this->login->login($username, $password);
         if($result) {
             $sess_array = array();
             $myid = array();
             foreach($result as $query->$row) {
                 //create the session

              $myGripe = array();
              $myGripe['myid'] = $row->id;
              $myGripe['username'] = $row->username;
              
                 //set session with value from database
                 $this->session->set_userdata('logged_in', $myGripe);
                 }
          return TRUE;
          } else {
              //if form validate false
              $this->form_validation->set_message('check_database', 'Invalid username or password');
              return FALSE;
          }
      }
}