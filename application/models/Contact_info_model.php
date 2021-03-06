<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Contact_info_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get contact_info by ID
     */
    function get_contact_info($ID)
    {
        return $this->db->get_where('CONTACT_INFO',array('ID'=>$ID))->row_array();
    }
        
    /*
     * Get all contact_info
     */
    function get_all_contact_info()
    {
//        $this->db->order_by('ID', 'desc');
        return $this->db->get('CONTACT_INFO')->result_array();
    }
        
    /*
     * function to add new contact_info
     */
    function add_contact_info($params)
    {
        $this->db->insert('CONTACT_INFO',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update contact_info
     */
    function update_contact_info($ID,$params)
    {
        $this->db->where('ID',$ID);
        return $this->db->update('CONTACT_INFO',$params);
    }
    
    /*
     * function to delete contact_info
     */
    function delete_contact_info($ID)
    {
        return $this->db->delete('CONTACT_INFO',array('ID'=>$ID));
    }
}
