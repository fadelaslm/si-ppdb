<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*-------------------------------------
 *-----Training Basic CRUD Code Igniter
 *-------Code By: Fadel Muammmad Aslam
 *------------------------------------*/

 class Dashboard extends CI_Controller {

   public function __construct()
   {
     parent::__construct();
     $this->load->model('app/m_dashboard');

     if ($this->session->userdata('logeddin') == NULL) {
 			redirect('app/login');
 		}
   }

   public function index()
   {
     //Session Login Validation
     $sess = $this->session->userdata('logeddin');
     $id   = $sess['id'];

     $data_usr = $this->m_dashboard->user("where id_usr = '$id' ")->result_array();
     //Sessiond Login Validation

     $data = array(
 			'nama_usr' => $data_usr[0]['nama'],
 			'kelas' => $data_usr[0]['kelas'],
 			'prodi' => $data_usr[0]['jurusan'],
 		);
     $theme_data['main_content'] = $this->load->view(DASHBOARD_ADM, $data, true);
     $this->load->view(MASTER, $theme_data);
   }
 }
