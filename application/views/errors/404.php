<?php

/* 
 * 404
 * Project: blog
 * Developed by Rai Omido
 * Copyright (C) Apr 21, 2017 Rai Omido
 * <raiomido@gmail.com>
 * UTF-8
 * 3:32:05 PM
 */
?>
<?= View::factory('common/header')->set('title', 'Page not Found');?>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">                
            <div class="item">                
                <h3><a href="">The Page you requested could not be found. View posts.</a></h3>
           </div>
            </div>
        </div>
    </div>
</div>
 <?= View::factory('common/footer');?>