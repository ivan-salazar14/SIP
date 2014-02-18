<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Main
 *
 * @author Ivan
 */
class Main extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->database();
    }

    public function index() {

        if ($this->ion_auth->logged_in()) {
            if ($this->ion_auth->in_group('estudiante')) {
                redirect('informacion_laboral', 'refresh'); //   redirect('auth', 'refresh');
            } else if ($this->ion_auth->is_admin()) {
                $this->data['content'] = 'empresa';
//                                     $this->load->view('contenedor', $data);	
                redirect('empresa', 'refresh');
                //  redirect('informacion_laboral', 'refresh');
            }
        } else {
            redirect('auth', 'refresh');
        }
    }

}
