<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');
/*-------------------------------------
 *-----Training Basic CRUD Code Igniter
 *-------Code Bye: Fadel Muammmad Aslam
 *------------------------------------*/

 class Login extends CI_Controller {

   public function __construct()
   {
    parent::__construct();
    $this->load->model('authentication/auth');
    $this->load->model('app/m_dashboard');
   }

   public function index()
   {
     $data = array(
       'title' => 'Login Page',
       'eror'  => ''
     );
     $this->load->view('authentication/login', $data);
   }

   public function auth()
   {
     // Google recaptcha
     $captcha_answer = $this->input->post('g-recaptcha-response');
     $response       = $this->recaptcha->verifyResponse($captcha_answer);
     //End Google Recaptcha

     if ($this->input->post() AND $response['success'] )
     {
       $auth = $this->auth->authentication($this->input->post())->result_array();

       if($auth != NULL)
       {
         $data = array(
           'id'       => $auth[0]['id'],
           'fullname' => $auth[0]['fullname']
         );

         $this->session->set_userdata('logeddin', $data);
         redirect('app/dashboard');
       } else {
         $data = array(
           'title' => 'Login Page',
           'eror'  => '
               <script>swal({
                     title: "Gagal!",
                     text: "Login Gagal, Periksa Username dan Password Anda.",
                     type: "error",
                     confirmButtonText: "OK"
                     });</script>
             ',
         );
         $this->load->view('authentication/login', $data);
       }
     }  else {
       $data = array(
        'title'			=> 'Login GAGAL',
        'eror'			=> '
            <script>swal({
                  title: "Gagal!",
                  text: "Captcha harus diisi.",
                  type: "error",
                  confirmButtonText: "OK"
                  });</script>
          ',
      );
      $this->load->view('authentication/login',$data);
     }
   }

  /*------------------------------------
  *---- Logout Controller -----
  *-------------------------------------*/

    public function logout()
    {
      $this->session->sess_destroy();
      redirect('app/login');
    }

   }
