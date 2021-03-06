<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Categorie extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Categorie_model');
    } 

    /*
     * Listing of categorie
     */
    function index()
    {
        $data['categorie'] = $this->Categorie_model->get_all_categorie();
        
        $data['_view'] = 'categorie/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new categorie
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'STATUT' => $this->input->post('STATUT'),
				'NOM' => $this->input->post('NOM'),
				'AGEMIN' => $this->input->post('AGEMIN'),
				'AGEMAX' => $this->input->post('AGEMAX'),
				'DESCRIPTION' => $this->input->post('DESCRIPTION'),
            );
            
            $categorie_id = $this->Categorie_model->add_categorie($params);
            redirect('categorie/index');
        }
        else
        {            
            $data['_view'] = 'categorie/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a categorie
     */
    function edit($ID)
    {   
        // check if the categorie exists before trying to edit it
        $data['categorie'] = $this->Categorie_model->get_categorie($ID);
        
        if(isset($data['categorie']['ID']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'STATUT' => $this->input->post('STATUT'),
					'NOM' => $this->input->post('NOM'),
					'AGEMIN' => $this->input->post('AGEMIN'),
					'AGEMAX' => $this->input->post('AGEMAX'),
					'DESCRIPTION' => $this->input->post('DESCRIPTION'),
                );

                $this->Categorie_model->update_categorie($ID,$params);            
                redirect('categorie/index');
            }
            else
            {
                $data['_view'] = 'categorie/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The categorie you are trying to edit does not exist.');
    } 

    /*
     * Deleting categorie
     */
    function remove($ID)
    {
        $categorie = $this->Categorie_model->get_categorie($ID);

        // check if the categorie exists before trying to delete it
        if(isset($categorie['ID']))
        {
            $this->Categorie_model->delete_categorie($ID);
            redirect('categorie/index');
        }
        else
            show_error('The categorie you are trying to delete does not exist.');
    }
    
}
