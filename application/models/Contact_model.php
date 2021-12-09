<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model {

    public function get_contacts()
    {
        $this->db->select('*');
        $this->db->from('contacts');
        $query = $this->db->get();

        return $query->result();
    }

    public function get_contact_by_id($contact_id)
    {
        $this->db->select('*');
        $this->db->from('contacts');
        $this->db->where('id', $contact_id);
        $query = $this->db->get();

        return $query->row();
    }
}

?>