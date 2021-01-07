<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Nurse extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('nursemodel');
        }

        public function encode(){
            $this->load->view('encode');
        }
    }
?>