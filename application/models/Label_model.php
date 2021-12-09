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
}

?>