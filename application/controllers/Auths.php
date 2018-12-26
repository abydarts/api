<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//set rest controller
require APPPATH . 'libraries/REST_Controller.php';

class Auths extends REST_Controller {
	/**
	 * Construct Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
    public function __construct(){
        parent::__construct();
		$this->ParentUploadir = "uploads/";
        $this->Uploadir = $this->ParentUploadir . "test-avatar/";
        $this->DirAssets = base_url() . "uploads/test-avatar/";
        if (!file_exists($this->Uploadir)) {
                mkdir($this->Uploadir, 0777);
        }
    }
	
	public function register_post()
    {
        $data = array();
        if (empty($this->post("email")) || empty($this->post("password"))) {
            $this->set_response(array("code" => REST_Controller::HTTP_FORBIDDEN, "message" => "email and username cannot be empty", "data" => (object)array()), REST_Controller::HTTP_FORBIDDEN);
        }
		$assetscover = "";
        $data["username"] = $this->post('username');
        $data["email"] = $this->post('email');
		$config['upload_path'] = $this->Uploadir;
        $config['allowed_types'] = 'bmp|jpg|jpeg|png';
        $config['max_size'] = 8000;
        $config["file_name"] = "image_" . time();
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $this->response(array('code' => REST_Controller::HTTP_ACCEPTED, 'message' => strip_tags($this->upload->display_errors()), 'data' => (object)array()), REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
        } else {
            $upload = $this->upload->data();
            $assetscover = $this->DirAssets . $upload["file_name"];
            $data["image"] = $assetscover;
            $http_response_header = REST_Controller::HTTP_OK;
        }
		$ardata = $this->post('username');
		$note = true;
		foreach (count_chars($ardata, 1) as $i => $val) {
			if($val > 1) {
				$note = false;
			}
		}
		$data["note"] = $note;
		$user_id = 0;
        $ins = $this->db->insert("tb_test", $data);
		if ($ins) {
            $resps = array(
				"code"=>REST_Controller::HTTP_OK,
				"message"=>"insert data success",
				"data"=>array(
					"username"=>$ardata,
					"email"=>$this->post('email'),
					"image"=>$assetscover,
					"note"=>$note
				),
			);
        }else{
			$resps = array(
				"code"=>REST_Controller::HTTP_ACCEPTED,
				"message"=>"username has been used",
				"data"=>array(),
			);
		}
        $this->set_response($resps, REST_Controller::HTTP_CREATED); 
    }
	
}
