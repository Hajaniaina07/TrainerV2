<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Categorieprogram_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get categorieprogram by IDCATEGORIE
     */
    function get_categorieprogram($IDCATEGORIE)
    {
        return $this->db->get_where('CATEGORIEPROGRAM',array('IDCATEGORIE'=>$IDCATEGORIE))->row_array();
    }
        
    /*
     * Get all categorieprogram
     */
    function get_all_categorieprogram()
    {
        $this->db->order_by('IDCATEGORIE', 'desc');
        return $this->db->get('CATEGORIEPROGRAM')->result_array();
    }

    function get_all_imgexocat()
    {
//        $this->db->order_by('IDCATEGORIE', 'desc');
        return $this->db->get('imgexocat')->result_array();
    }

    function get_imgexocat_cat($id){
        $this->db->order_by('IDCATEGORIE', 'desc');
        return $this->db->get_where('imgexoca')->result_array();
    }
        
    /*
     * function to add new categorieprogram
     */
    function add_categorieprogram($params)
    {
        $this->db->insert('CATEGORIEPROGRAM',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update categorieprogram
     */
    function update_categorieprogram($IDCATEGORIE,$params)
    {
        $this->db->where('IDCATEGORIE',$IDCATEGORIE);
        return $this->db->update('CATEGORIEPROGRAM',$params);
    }
    
    /*
     * function to delete categorieprogram
     */
    function delete_categorieprogram($IDCATEGORIE)
    {
        return $this->db->delete('CATEGORIEPROGRAM',array('IDCATEGORIE'=>$IDCATEGORIE));
    }
}