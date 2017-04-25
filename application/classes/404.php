<?php

/* 
 * 404
 * Project: blog
 * Developed by Rai Omido
 * Copyright (C) Apr 21, 2017 Rai Omido
 * <raiomido@gmail.com>
 * UTF-8
 * 3:32:43 PM
 */

class HTTP_Exception_404 extends Kohana_HTTP_Exception_404{
    
    public function get_response() 
    {
        $response = Response::factory();
        
        $view = View::factory('errors/404');
        $view->message = $this->getMessage();
        $response->body($view->render());
        return $response;
    }

}

