<?php

use Core\Controller;

class Home extends Controller {
    public function index() {
        $this->response->setEncoding("JSON");
        $this->response->send( [
            "Title" => "test"
        ] );
    }
}
