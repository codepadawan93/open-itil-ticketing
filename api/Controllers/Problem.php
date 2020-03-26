<?php

use Core\Controller;

class Problem extends Controller {
    public function index() {
        $this->response->setEncoding("JSON");
        $this->response->send( [
            "Title" => "Problem"
        ] );
    }
}
