<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Label_model extends CI_Model {

    public function get_labels()
    {
        $this->db->select('*');
        $this->db->from('labels');
        $query = $this->db->get();

        return $query->result();
    }

    public function create_label($data)
    {
        $insert_query = $this->db->insert('labels', $data);

        return $insert_query;
    }

    public function get_label_by_id($label_id)
    {
        $this->db->select('*');
        $this->db->from('labels');
        $this->db->where('id', $label_id);
        $query = $this->db->get();

        return $query->row();
    }

    public function delete_label($label_id)
    {
        $this->db->where('id', $label_id);
        $this->db->delete('labels');
    }
}

?>