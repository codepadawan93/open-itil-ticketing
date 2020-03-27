<?php

namespace Core;

use Core\DB as DB;

/*
 *
 *  Class Model - basis from which all models will inherit
 *
 * 
 */ 
class Model {

    private $table;

    /*
    *
    *  Database object
    *
    *  @type DB Object
    * 
    */ 
    public $DB;

    /*
    *
    *  Constructor
    *
    *  @access public
    *  @return Model Object
    * 
    */ 
    public function __construct(){
    
        $this->DB = DB::getInstance();
    
    }
    
    public function createOne($specs){
    }

    public function getOne($id){
    }
    
    public function getAll(){
    }

    public function updateOne($id){
    }

    public function deleteOne($id){
    }

    public function deleteAll(){
    }

}

?>