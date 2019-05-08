<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Ouverture extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ouverture_model');
    } 

    /*
     * Listing of ouverture
     */
    function index()
    {
        $data['ouverture'] = $this->Ouverture_model->get_all_ouverture();
        
        $data['_view'] = 'ouverture/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new ouverture
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'STATUT' => $this->input->post('STATUT'),
				'JOUR' => $this->input->post('JOUR'),
				'HEURE' => $this->input->post('HEURE'),
            );
            
            $ouverture_id = $this->Ouverture_model->add_ouverture($params);
            redirect('ouverture/index');
        }
        else
        {            
            $data['_view'] = 'ouverture/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a ouverture
     */
    function edit($ID)
    {   
        // check if the ouverture exists before trying to edit it
        $data['ouverture'] = $this->Ouverture_model->get_ouverture($ID);
        
        if(isset($data['ouverture']['ID']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'STATUT' => $this->input->post('STATUT'),
					'JOUR' => $this->input->post('JOUR'),
					'HEURE' => $this->input->post('HEURE'),
                );

                $this->Ouverture_model->update_ouverture($ID,$params);            
                redirect('ouverture/index');
            }
            else
            {
                $data['_view'] = 'ouverture/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The ouverture you are trying to edit does not exist.');
    } 

    /*
     * Deleting ouverture
     */
    function remove($ID)
    {
        $ouverture = $this->Ouverture_model->get_ouverture($ID);

        // check if the ouverture exists before trying to delete it
        if(isset($ouverture['ID']))
        {
            $this->Ouverture_model->delete_ouverture($ID);
            redirect('ouverture/index');
        }
        else
            show_error('The ouverture you are trying to delete does not exist.');
    }
    
}