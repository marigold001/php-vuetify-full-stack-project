<?php require_once "views/partials/header.php"; ?>
<div class="content">
<form action="/posts/edit" class="reduceSize" method="post">
    <input type="hidden" name="id" value="<?= $post->id ?>">

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" class="form-control" value="<?= $post->title ?>">
    </div>

    <div class="form-group">
        <label for="img">Image Link</label>
        <input type="text" name="img" id="img" value="<?= $post->img ?>" class="form-control">
    </div>

    <button type="submit" class="btn btn-secondary">Edit</button>
</form>
</div>
<?php require_once "views/partials/header.php"; ?>
