<?php

use Core\Controller;

class Incident extends Controller {
    public function index($id) {
        $this->form($id);
    }
    public function form($id) {
        $incident = new Models\Incident($id);
        $this->response->setEncoding("JSON");
        $this->response->send( [
            "Title" => "Incident",
            "ID" => $id,
            "current" => $incident
        ] );
    }
    public function list() {
        $incidents = (new Models\Incident())->getAll();
        $this->response->setEncoding("JSON");
        $this->response->send( [
            "Title" => "Incidents",
            "ID" => $id,
            "incidents" => $incidents
        ] );
    }
    public function create($id) {
        throw new Exception("Not implemented");
    }
    public function update($id) {
        throw new Exception("Not implemented");
    }
    public function delete($id) {
        throw new Exception("Not implemented");
    }
}
