<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Acce_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get acce by ID
     */
    function get_acce($ID)
    {
        return $this->db->get_where('ACCES',array('ID'=>$ID))->row_array();
    }
        
    /*
     * Get all acces
     */
    function get_all_acces()
    {
        $this->db->order_by('ID', 'desc');
        return $this->db->get('ACCES')->result_array();
    }
        
    /*
     * function to add new acce
     */
    function add_acce($params)
    {
        $this->db->insert('ACCES',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update acce
     */
    function update_acce($ID,$params)
    {
        $this->db->where('ID',$ID);
        return $this->db->update('ACCES',$params);
    }
    
    /*
     * function to delete acce
     */
    function delete_acce($ID)
    {
        return $this->db->delete('ACCES',array('ID'=>$ID));
    }
}
