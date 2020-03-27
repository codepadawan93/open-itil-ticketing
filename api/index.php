<?php
    require_once "Core/Loader.php";
    use Core\Controller;
    use Core\Config;
    use Core\Error;

    define("UID", Config::getConfiguration()->meta->UID);
    
    try {
        $controller = new Controller();
        $controller->dispatch();
    } catch (Exception $e){
        Error::__500([
            "Error" => $e->getTraceAsString()
        ]);
    }
?>
