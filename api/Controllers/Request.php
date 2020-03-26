<?php

use Core\Controller;

class Request extends Controller {
    public function index() {
        $this->response->setEncoding("JSON");
        $this->response->send( [
            "Title" => "Request"
        ] );
    }
}