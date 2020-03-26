<?php

use Core\Controller;

class Incident extends Controller {
    public function index() {
        $this->response->setEncoding("JSON");
        $this->response->send( [
            "Title" => "Incident"
        ] );
    }
}
