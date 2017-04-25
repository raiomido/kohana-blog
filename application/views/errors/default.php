<?php

/* 
 * default
 * Project: blog
 * Developed by Rai Omido
 * Copyright (C) Apr 21, 2017 Rai Omido
 * <raiomido@gmail.com>
 * UTF-8
 * 4:12:41 PM
 */
?>
<?= View::factory('common/header')->set('title', 'Error');?>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">                
            <div class="item">                
                <h3><a href=""></a></h3>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <span class="glyphicon glyphicon-ban-circle"></span> Error!
                    <?php
                    if (isset($error)):
                            ?>
                            <?= $error ?>
                      <?php endif;?>
                </div>                  
           </div>
            </div>
        </div>
    </div>
</div>
 <?= View::factory('common/footer');?>
