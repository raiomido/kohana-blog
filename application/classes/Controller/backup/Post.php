<?php

defined('SYSPATH') or die('No direct script access.');

/*
 * blog controller
 * Project: blog
 * Developed by Rai Omido
 * Copyright (C) Apr 20, 2017 Rai Omido
 * <raiomido@gmail.com>
 * UTF-8
 * 2:42:00 PM
 */

class Controller_Post extends Controller {
    private $model;
    /***
     * @param string index Shows all posts on home page
     */
    public function action_index() {
        $model = Model::factory('Post');
        $model->request_posts();
        $view = View::factory('index')->set('posts', $model->posts);
        $this->response->body($view);     
    }
    
    /**
     * @param void $crreate Displays form for creating new entry
     */
    public function action_create() {
        $view = View::factory('create');
        $this->response->body($view);     
    }
    
    /**
     * @param string $create creates new post entry in database
     */    
    public function action_store() {
        $model = Model::factory('Post');
        $keys = array('title', 'body');
        $values = Arr::extract($_POST, $keys, NULL);
        $model->store($values);
        $this->redirect('/');
    }
    
    /**
     * @param show $name Displays single post
     */
    public function action_show() {
        $id = $this->request->param('id');
        $model = Model::factory('Post');
        $post = $model->select_post($id);
        $view = View::factory('read')->set('post', $post[0]);
        $this->response->body($view);      
    }
    
    /**
     * @param render $name Shows content form for editing
     */
    public function action_edit() {
        $model = Model::factory('Post');
        $id = $this->request->param('id');
        $post = $model->select_post($id);
        $view = View::factory('edit')->set('post', $post[0]);			
        $view->set('pagetitle', $post[0]['title']);
        $this->response->body($view);
    }
    
    /**
     * @param update $name Updates edited post in database
     */
    public function action_update() {
        $model = Model::factory('Post');
        $keys = array('id','title', 'body');
        $values = Arr::extract($_POST, $keys, NULL);
        $model->update($values);
        $id = $values['id'];
        $toread = "/post/show/$id";
        $this->redirect($toread);
    }
 
    /**
     * Deletes entry from database
     */
    public function action_delete() {
        $model = Model::factory('Post');
        $id = $this->request->param('id');
        $model->delete($id);
        $this->redirect("/");
    }
}
