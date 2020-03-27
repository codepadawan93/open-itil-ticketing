<?php 

namespace Models;

use Core\Model;

class Task extends Model {
    public $id;
    public $number;
    public $assignedTo;
    public $assignmentGroup;
    public $shortDescription;
    public $description;
}