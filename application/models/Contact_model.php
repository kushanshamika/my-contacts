<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model {

    public function get_contacts()
    {
        // $this->db->select('*');
        // $this->db->from('contacts');
        // $this->db->join('contact_label', 'contact_label.contact_id = contacts.id', 'left');
        // $this->db->join('labels', 'labels.id = contact_label.label_id', 'left');
        // $query = $this->db->get();

        // return $query->result();

        $query = $this->db->query("
        select contacts.id, contacts.f_name, contacts.l_name, contacts.contact, contacts.email, JSON_ARRAYAGG(JSON_OBJECT('id',contact_label.label_id, 'name', labels.label_name, 'color', labels.label_color)) as tags
        from contacts 
        left join contact_label on contacts.id = contact_label.contact_id
        left join labels on labels.id = contact_label.label_id
        group by contacts.id;
        ");

        return $query->result_array();
    }

    public function delete_contact($contact_id)
    {
        $this->db->where('id', $contact_id);
        $this->db->delete('contacts');
    }

    public function create_contact($data, $tags)
    {
        $insert_query = $this->db->insert('contacts', $data);
        $contact_id = $this->db->insert_id();

        foreach($tags as $tag){
            $contact_label = array(
                'label_id' => $tag,
                'contact_id' => $contact_id
            );

            $this->db->insert('contact_label', $contact_label);
        }

        return $insert_query;
    }

    public function get_contact_by_id($contact_id)
    {
        $query = $this->db->query("
        select contacts.id, contacts.f_name, contacts.l_name, contacts.contact, contacts.email, GROUP_CONCAT(contact_label.label_id) as tags
        from contacts 
        left join contact_label on contacts.id = contact_label.contact_id
        left join labels on labels.id = contact_label.label_id
        group by contacts.id
        having sum(contacts.id = '$contact_id') > 0;
        ");

        return $query->row();
    }
}

?>