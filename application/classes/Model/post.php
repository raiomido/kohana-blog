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

class Model_Post extends ORM {
    protected $table_name = 'posts';
    public $posts;
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
