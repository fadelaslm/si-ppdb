<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*-----------------------------------
	*---- Dashboard Models -------
	*-- coded by: HostingmU.Net Team ----
	*-----------------------------------*/

class M_dashboard extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function user($where ='')
	{
        return $this->db->query("select * from user_data $where;");

	}

}
?>
