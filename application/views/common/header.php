<?php
/*
 * header
 * Project: blog
 * Developed by Rai Omido
 * Copyright (C) Apr 20, 2017 Rai Omido
 * <raiomido@gmail.com>
 * UTF-8
 * 3:51:31 PM
 */
$page_title = isset($title) ? "$title | Raiblog" : 'Share with the World | Raiblog';
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?= $page_title ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Join, Connect and Share with the World, search for answers to any questions">
        <meta name="author" content="Rai Omido">      
        <?= HTML::style('/public/css/bootstrap.min.css') ?>
        <?= HTML::style('/public/css/style.css') ?>
    </head>
    <body>
        <nav id="fixedHeader" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#profileMenu" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> 
                    <div id="site-logo-slidein" class="">
                        <a href="/" class="navbar-brand">Raiblog</a>
                    </div>                        
                </div>
                <div id="profileMenu" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/post/create/">Create New Post</a></li>
                        <li><a href="/posts/">View All Posts</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container body-wrapper">
