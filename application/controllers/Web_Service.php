<?php

require APPPATH . 'libraries/REST_Controller.php';
     
class Web_Service extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
    }

    public function show_get()
    {
        $query = $this->db->get('demo');

        $result = $query->result();

        return $result;
    }

}