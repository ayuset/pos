<?php

class Home extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		// $this->load->model("buku_model");
	}

	public function index()
	{
        // load view admin/overview.php
        // $data["buku"] = $this->buku_model->getAll();
        $this->load->view('home');
	}
}