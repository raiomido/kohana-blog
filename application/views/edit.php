<?= View::factory('common/header')->set('title', 'Edit');?>

        <div class="row">
            <div class="col-md-12">
            <div class="item">
                <div class="form">
                    <form class="post-form" method="post" action="/post/update/<?=$post['id']?>" accept-charset="utf-8">
                        <div class="form-group">
                            <label class="" for="title">Title</label>
                            <input type="hidden" value="<?=$post['id']?>" name="id">
                            <input name="title" type="text" value="<?=$post['title']?>" class="form-control" required="" placeholder="Enter Title Here">
                            <label for="title" class="danger"><?php if(isset($errors)){echo Arr::get($errors, 'title');} ?></label>
                        </div>

                        <div class="form-group">
                            <label class="" for="body">Body</label>
                            <textarea name="body" rows="7" class="form-control" required="" placeholder="Enter Body Here"><?=$post['body']?></textarea>
                            <label for="body" class="danger"><?php if(isset($errors)){echo Arr::get($errors, 'body');} ?></label>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="" class="btn btn-primary">Update Post</button>
                            <a href="/post/delete/<?=$post['id']?>" class="btn btn-danger">Delete Post</a>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
 <?= View::factory('common/footer');?>

