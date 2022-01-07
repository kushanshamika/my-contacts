<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Label extends RestController {

    function __construct()
    {
        parent::__construct();
    }

    public function index_get($id)
    {

        $label = $this->label_model->get_label_by_id($id);

        if ( $label )
        {
            $this->response( $label, 200 );
        }
        else
        {
            $this->response( [
                'status' => false,
                'message' => 'No such label found'
            ], 404 );
        }
    }

    public function index_post()
    {
        $label_name = $this->post('label_name');
        $label_color = $this->post('label_color');

        $data = array(
            'label_name' => $label_name,
            'label_color' => $label_color
        );

        $data = $this->security->xss_clean($data);

        if ($this->label_model->create_label($data)) {
            $this->response([
                'status' => true,
                'message' => 'Label was succesfully created'
            ], 201);
        }
    }

    public function index_put($id)
    {
        
        $label_name = $this->put('label_name');
        $label_color = $this->put('label_color');

        $data = array(
            'label_name' => $label_name,
            'label_color' => $label_color
        );

        $data = $this->security->xss_clean($data);

        if ($this->label_model->update_label($id, $data)) {
            $this->response([
                'status' => true,
                'message' => 'Label was succesfully created'
            ], 200);
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

    public function index_delete($id)
    {
        $this->label_model->delete_label($id);

        $this->response( [
            'id' => $id,
            'message' => 'Deleted the label'
        ], 204 );
    }
}
