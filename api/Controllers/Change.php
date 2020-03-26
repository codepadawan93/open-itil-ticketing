<?php

use Core\Controller;

class Change extends Controller {
    public function index() {
        $change = new Models\Change();
        print_r($change);
        $this->response->setEncoding("JSON");
        $this->response->send( [
            "Title" => "Change"
        ] );
    }
}
