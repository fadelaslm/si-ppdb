<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*-------------------------------------
 *-----Training Basic CRUD Code Igniter
 *-------Code By: Fadel Muammmad Aslam
 *------------------------------------*/

 class Master_admin extends CI_Controller {

   public function index()
   {

     $data = array(
       'nama_usr' => 'Fadel Muhammad Aslam',
       'prodi'     => 'Pegawai'
 		);
     $theme_data['main_content'] = $this->load->view(USER_ADM, $data, true);
     $this->load->view(MASTER, $theme_data);
   }
 }
