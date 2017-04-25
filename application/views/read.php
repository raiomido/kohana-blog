<?php

/* 
 * read
 * Project: blog
 * Developed by Rai Omido
 * Copyright (C) Apr 21, 2017 Rai Omido
 * <raiomido@gmail.com>
 * UTF-8
 * 11:51:53 AM
 */
?>
<?= View::factory('common/header')->set('title', $post['title']);?>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">                
            <div class="item">                
                <h3><?= $post['title'] ?></h3>
                <hr>
                <p><?= $post['body'] ?></p>
                <p><small><a href="/post/edit/<?= $post['id'] ?>" class="btn btn-success">Edit this Post</a></small></p>
            </div>
            </div>
        </div>
    </div>
</div>
 <?= View::factory('common/footer');?>



