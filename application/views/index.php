<?= View::factory('common/header');?>

<div class="row">
    <div class="col-md-12">
        <?php if ($posts): ?>
        <?php foreach ($posts as $post): ?>
        <div class="row">
            <div class="col-md-12">                
            <div class="item">                
                <h3><a href="/post/show/<?= $post->id ?>"><?= $post->title ?></a></h3>
                <p><small><a href="/post/edit/<?= $post->id ?>">Edit this Post</a></small></p>
                <p><?= $post->body;?></p>
                <p><a href="/post/show/<?= $post->id ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a></p>
            </div>
            </div>
        </div>
        <?php endforeach;?>
        <?php else:?>
            <h3><a href="/post/create/">No Posts Found. Click here to add posts.</a></h3>
        <?php endif;?>
    </div>
</div>
 <?= View::factory('common/footer');?>

