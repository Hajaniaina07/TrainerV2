<?php


class ToFront extends CI_Controller{

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
        $this->toPage('ACCEUIL');
//        $this->GALLERY();
    }
//    public function ACCEUIL(){
//        $this->toPage('ACCEUIL');
//    }

    public function GALLERY(){
        $gallerys = $this->Gallery_model->get_all_DetailGallery();
        $this->toPageAvecArgument('GALLERY',$gallerys);
    }

    public function PROGRAMS(){
        $programs = $this->Categorieprogram_model->get_all_imgexocat();
        $categories = $this->Categorie_model->get_all_categorie();
        $this->toPageAvecArgument('PROGRAMS',$programs,$categories);
    }

    public function CONTACT(){
        $this->toPage('CONTACT');
    }

    public function erreurMessage(){
        $data['message'] = 'Erreur : L\'envoi du message a echouer';
        $this->toPage('CONTACT',$data);
    }

    public function toPageAvecArgument($page,$autres){
        $data['menu'] = $this->Menu_model->get_all_menu();
        $title = $this->Titrepage_model->get_titrepageByPage($page);
        $data['titre'] = $title['TITRE'];
        $data['active'] = $page;
        $data['contacts'] = $this->Contact_info_model->get_all_contact_info();
        $data['ouvertures'] = $this->Ouverture_model->get_all_ouverture();
        $apropos = $this->A_propo_model->get_all_a_propos();
        $data['apropos'] = $apropos[0];
        $data['autres'] = $autres;
        $this->load->view('trainer/index',$data,$autres);
    }

    public function toPage($page){
        $data['menu'] = $this->Menu_model->get_all_menu();
        $title = $this->Titrepage_model->get_titrepageByPage($page);
        $data['titre'] = $title['TITRE'];
        $data['active'] = $page;
        $data['contacts'] = $this->Contact_info_model->get_all_contact_info();
        $data['ouvertures'] = $this->Ouverture_model->get_all_ouverture();
        $apropos = $this->A_propo_model->get_all_a_propos();
        $data['apropos'] = $apropos[0];
        $this->load->view('trainer/index',$data);
    }

    public function sendMessage(){
            if(isset($_POST) && count($_POST) > 0)
            {
                $NOM = $this->input->post('nom');
                $PRENOM = $this->input->post('prenom');
                $EMAIL = $this->input->post('email');
                $SUJET = $this->input->post('objet');
                $CONTENUE = $this->input->post('message');

                $user = $this->User_model->getUser($USERNAME,$PASSWORD);
                if ($user != null){
                    $this->load->view('back/index');
                }else{
                    $this->erreurMessage();
                }
//            redirect('categorie/index');
            }
            else
            {
                $data['message'] = 'Veuillez remplir les champs';
                $this->load->view('trainer/i',$data);
            }
    }


}