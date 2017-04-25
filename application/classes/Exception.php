<?php

/* 
 * Exception
 * Project: blog
 * Developed by Rai Omido
 * Copyright (C) Apr 21, 2017 Rai Omido
 * <raiomido@gmail.com>
 * UTF-8
 * 4:06:04 PM
 */

class HTTP_Exception extends Kohana_HTTP_Exception{

    public function get_response() {
        Kohana_Exception::log($this);
        
        if(Kohana::$environment >= Kohana::DEVELOPMENT)
        {
            return parent::get_response();
        }
        else 
        {
            $view = View::factory('errors/default');
            $response = Response::factory()->status($this->getCode())->body($view->render());
            return $response;
        }
    }

}

