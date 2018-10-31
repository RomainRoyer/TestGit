<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bonjour extends CI_Controller

{   
 

    public function index()

    {

        $this->accueil();

    }


    public function accueil()

    {
        $data = array();

        $data['pseudo'] = 'test';

        $data['email'] = 'email@ac-reunion.fr';

        $data['en_ligne'] = true;
        $this->load->view('Vbonjour', $data);

    }

}