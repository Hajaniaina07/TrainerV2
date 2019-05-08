<?php


class DataAccessObject {
    private $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function GetColonne($table)
    {
        $fields = $this->CI->db->list_fields($table);
        return $fields;
    }

    private function Table(BaseModele $bm)
    {
        $tab = get_class($bm);
        return strtolower($tab);
    }

    public function Insert(BaseModele $bm)
    {
        $nomTable = $this->Table($bm);
        $fields = $this->GetColonne($nomTable);
        $table = array();
        foreach($fields as $field){
            $table[$field] = $bm->get($field);
        }
        $this->CI->db->insert($nomTable, $table);
    }

    public function Update(BaseModele $bm)
    {
        $nomTable = $this->Table($bm);
        $fields = $this->GetColonne($nomTable);
        $tableau = array();
        foreach($fields as $field){
            $tableau[$field] = $bm->get($field);
        }
        $this->CI->db->where(array('id' => $bm->get('id')));
        $this->CI->db->update($nomTable, $tableau);
    }

    public function Delete(BaseModele $bm)
    {
        $nomTable = $this->Table($bm);
        $this->CI->db->delete($nomTable, array('id' => $bm->get('id')));
    }

    public function Get(BaseModele $bm, $where=array())
    {
        $nomTable = $this->Table($bm);
        $fields = $this->GetColonne($nomTable);
        $tableau = array();
        foreach($fields as $field){
            $tableau[$field] = $bm->get($field);
        }
        $value = $this->CI->db->select('*')->from($nomTable)->where($where)->get()->result();
        return $value;
    }
}