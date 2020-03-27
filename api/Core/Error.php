<?php

namespace Core;

use Core\Response;

/*
 *
 *  
 *
 */
class Error {
    public static function __500($data, $encoding = Encoding::JSON){
        $response = new Response();
        $response->setHTTPStatusCode(500);
        $response->setEncoding($encoding);
        $response->send($data);
        exit;
    }
}


