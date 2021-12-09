<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Label extends RestController {

    function __construct()
    {
        parent::__construct();
    }

    public function index_post()
    {
        $label_name = $this->post('label_name');

        $data = array(
            'name' => $label_name
        );

        $data = $this->security->xss_clean($data);

        if ($this->label_model->create_label($data)) {
            $this->response([
                'status' => true,
                'message' => 'Label was succesfully created'
            ], 201);
        }
    }

    public function all_get()
    {
        $labels = $this->label_model->get_labels();
        if ( $labels )
        {
            $this->response( $labels, 200 );
        }
        else
        {
            $this->response( [
                'status' => false,
                'message' => 'No labels were found'
            ], 404 );
        }
    }
}
