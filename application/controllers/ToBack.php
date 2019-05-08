<?php


class ToBack extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('A_propo_model');
        $this->load->model('Acce_model');
        $this->load->model('Categorie_model');
        $this->load->model('Categorieprogram_model');
        $this->load->model('Contact_info_model');
        $this->load->model('Exercice_model');
        $this->load->model('Gallery_model');
        $this->load->model('Image_model');
        $this->load->model('Menu_model');
        $this->load->model('Message_model');
        $this->load->model('Ouverture_model');
        $this->load->model('Programme_model');
        $this->load->model('Titrepage_model');
        $this->load->model('User_model');
    }

    public function index(){
        $this->load->view('back/login');
    }
    public function testLogin(){
        if(isset($_POST) && count($_POST) > 0)
        {
                $USERNAME = $this->input->post('USER');
                $PASSWORD = $this->input->post('MDP');

            $user = $this->User_model->getUser($USERNAME,$PASSWORD);
            if ($user != null){
                $this->load->view('back/index');
            }else{
                $data['message'] = 'Nom d\'utilisateur ou mot de passe incorecte';
                $this->load->view('back/login',$data);
            }
//            redirect('categorie/index');
        }
        else
        {
            $data['message'] = 'Veuillez remplir les champs';
            $this->load->view('back/login',$data);
        }
    }
}