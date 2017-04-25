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

    /*     * *
     * @param string index Shows all posts on home page
     */

    public function action_index() {
        $post = ORM::factory('Post');
        $posts = $post->find_all()->as_array();
        $view = View::factory('index')->set('posts', $posts);
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
        echo 'Hahaha';
        if (filter_input_array(INPUT_POST)) {
            $tosave = ORM::factory('Post');
            $tosave->title = $this->request->post('title');
            $tosave->body = $this->request->post('body');
            try {
                $tosave->save();
                $this->redirect('/');
            } catch (ORM_Validation_Exception $ex) {
                $this->render_error($ex->getMessage());
            }
        }
    }

    /**
     * @param show $name Displays single post
     */
    public function action_show() {
        $id = $this->request->param('id');
        $obj = ORM::factory('Post');
        $post = $obj->find()->where('id', "=", $id)->as_array();
        $view = View::factory('read')->set('post', $post);
        $this->response->body($view);
    }

    /**
     * @param render $name Shows content form for editing
     */
    public function action_edit() {
        $obj = ORM::factory('Post');
        $id = $this->request->param('id');
        $post = $obj->find()->where('id', "=", $id)->as_array();
        $view = View::factory('edit')->set('post', $post);
        $view->set('pagetitle', $post['title']);
        $this->response->body($view);
    }

    /**
     * @param update $name Updates edited post in database
     */
    public function action_update() {
        $id = $this->request->param('id');

        $toupdate = ORM::factory("Post", $id)->find();
        if ($toupdate->loaded()) {
            $toupdate->title = $this->request->post('title');
            $toupdate->body = $this->request->post('body');
            try {
                $toupdate->save();
                $toread = "/post/show/$toupdate->id";
                $this->redirect($toread);
            } catch (ORM_Validation_Exception $ex) {
                $this->render_error($ex->getMessage());
            }
        }
    }

    /**
     * Deletes entry from database
     */
    public function action_delete() {
        $id = $this->request->param('id');
        $todelete = ORM::factory("Post", $id)->find();
        if ($todelete->loaded()) {
            try {
                $todelete->delete();
                $this->redirect("/");
            } catch (ORM_Validation_Exception $ex) {
                $this->render_error($ex->getMessage());
            }
        }
    }

    public function render_error($msg) {
        $view = View::factory('errors/default')->set('error', $msg);
        $this->response->body($view);
    }

}
