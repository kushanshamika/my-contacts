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
                'message' => 'No such contact found'.$id
            ], 404 );
        }
    }

    public function all_get()
    {
        $contacts = $this->contact_model->get_contacts();
        if ( $contacts )
        {
            $this->response( $contacts, 200 );
        }
        else
        {
            $this->response( [
                'status' => false,
                'message' => 'No contacts were found'
            ], 404 );
        }
    }
}
