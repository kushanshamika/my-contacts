<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Contact extends RestController {

    function __construct()
    {
        parent::__construct();
    }

    public function index_get($id)
    {

        $contact = $this->contact_model->get_contact_by_id($id);

        if ( $contact )
        {
            $this->response( $contact, 200 );
        }
        else
        {
            $this->response( [
                'status' => false,
                'message' => 'No such contact found'
            ], 404 );
        }
    }

    public function all_get()
    {
        $contacts = $this->contact_model->get_contacts();
        if ( $contacts )
        {
            $this->response( ['data' => $contacts], 200 );
        }
        else
        {
            $this->response( [
                'status' => false,
                'message' => 'No contacts were found'
            ], 404 );
        }
    }

    public function index_delete($id)
    {
        $this->contact_model->delete_contact($id);

        $this->response( [
            'id' => $id,
            'message' => 'Deleted the contact'
        ], 204 );
    }

    public function index_post()
    {
        $f_name = $this->post('f_name');
        $l_name = $this->post('l_name');
        $contact = $this->post('contact');
        $email = $this->post('email');

        $data = array(
            'f_name' => $f_name,
            'l_name' => $l_name,
            'contact' => $contact,
            'email' => $email
        );

        $data = $this->security->xss_clean($data);

        if ($this->contact_model->create_contact($data)) {
            $this->response([
                'status' => true,
                'message' => 'Contact was succesfully created'
            ], 201);
        }
    }
}
