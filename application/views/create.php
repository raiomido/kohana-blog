<?php

/* 
 * create
 * Project: blog
 * Developed by Rai Omido
 * Copyright (C) Apr 21, 2017 Rai Omido
 * <raiomido@gmail.com>
 * UTF-8
 * 12:41:09 AM
 */
?>
<?= View::factory('common/header')->set('title', 'create new post');?>

        <div class="row">
            <div class="col-md-12">
            <div class="item">
                <div class="form">
                    <form class="post-form" method="post" action="/post/store" accept-charset="utf-8">
                        <div class="form-group">
                            <label class="" for="title">Title</label>
                            <input name="title" type="text" class="form-control" required="" placeholder="Enter Title Here">
                            <label for="title" class="danger"><?php if(isset($errors)){echo Arr::get($errors, 'title');} ?></label>
                        </div>

                        <div class="form-group">
                            <label class="" for="body">Body</label>
                            <textarea name="body" rows="7" class="form-control" required="" placeholder="Enter Body Here"></textarea>
                            <label for="body" class="danger"><?php if(isset($errors)){echo Arr::get($errors, 'body');} ?></label>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="create" class="btn btn-primary">Add Post</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
<?= View::factory('common/footer');?>



