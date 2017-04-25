<?php defined('SYSPATH') or die('No direct script access.');

/*
 * blog Model
 * Project: blog
 * Developed by Rai Omido
 * Copyright (C) Apr 20, 2017 Rai Omido
 * <raiomido@gmail.com>
 * UTF-8
 * 12:22:31 PM
 */

class Model_Post extends Model_Database {

    public $posts;
    private $query;
    private $post;
    private $database;
    
    /**
     * @param void $contructor Initializes the database(PDO)
     */
    public function __construct() 
    {
        parent::__construct();
        $this->database = Database::instance('alternate');
    }
    
    /**
     * 
     * @param type $post
     * Stores new post entries in the database
     */
    public function store($post) 
    {
        try {
            $sql = "INSERT INTO `posts` (title, body) VALUES(\"".$post['title']."\", \"".$post['body']."\")";
            $this->database->query(Database::INSERT, $sql);           
        } catch (Exception $ex) {
            throw new Database_Exception('errors', array($ex->getMessage()), $ex->getCode());
        }   
        
    }
    /**
     * 
     * @param type $post
     * Updates old database entries on request
     */
    public function update($post) 
    {
        try {
            $sql = "UPDATE `posts` SET `title` = \"".$post['title']."\", `body` = \"".$post['body']."\" WHERE `id` = ".$post['id']."";
            $this->database->query(Database::UPDATE, $sql);            
        } catch (Exception $ex) {
            throw new Database_Exception('errors', array($ex->getMessage()), $ex->getCode());
        }  
    }
    
    /**
     * 
     * @param type $id
     * Deletes post entries from database
     */
    public function delete($id) 
    {
        try {
            $sql = "DELETE FROM posts WHERE `id` = '$id'";
            $this->database->query(Database::DELETE, $sql);           
        } catch (Exception $ex) {
            throw new Database_Exception('errors', array($ex->getMessage()), $ex->getCode());
        }  

    }
    
    /**
     * Pulls database entries for display on home-page
     */
    public function request_posts() 
    {
        try {
            $sql = "SELECT * FROM posts ORDER BY id DESC";
            $query = DB::query(Database::SELECT, $sql);    
            $this->posts = $query->execute()->as_array();           
        } catch (Exception $ex) {
            throw new Database_Exception('errors', array($ex->getMessage()), $ex->getCode());
        }  
    }
    
    /**
     * 
     * @param type $id
     * @return type
     * Returns a single specific post from database as specified by controller
     */
    public function select_post($id)
    {
        try {
            $sql = "SELECT * FROM posts WHERE id = '$id'";
            $this->query = DB::query(Database::SELECT, $sql);    
            return $this->post = $this->query->execute()->as_array();           
        } catch (Exception $ex) {
            throw new Database_Exception('errors', array($ex->getMessage()), $ex->getCode());
        }                  
    }

    /**
     * 
     * @return type
     * Just for storing sql table query
     */
    public function run() 
    {
    return ( "CREATE TABLE IF NOT EXISTS `posts`(
            `id` INT(10) NOT NULL AUTO_INCREMENT,
            `title` VARCHAR(255) NOT NULL,
            `body` TEXT NOT NULL,
            PRIMARY KEY(`id`)
          ) ENGINE = InnoDB DEFAULT CHARSET = utf8 AUTO_INCREMENT = 1;"
            );      
    }

    /**
     * 
     * @return type
     * validation rules
     */
    public function rules() 
    {
        return array(
            'title' => array(array('not_empty'),
                array('min_length', array(':value', 1)),
                array('max_length', array(':value', 200))
            ),
            'body' => array(array('not_empty'),
                array('min_length', array(':value', 10))
            )
        );
    }

}
