<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function authentication($post)
  {
    $this->db->where(array (
      "username" => $this->db->escape_like_str($post['username']),
      "password" => md5($post['password']),
      "status"   => 1
    ));
    return $this->db->get('users_auth');
  }
}

?>
