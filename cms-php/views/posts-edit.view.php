<?php require_once "views/partials/header.php"; ?>
<div class="content">
<form action="/posts/edit" class="reduceSize" method="post">
    <input type="hidden" name="id" value="<?= $post->id ?>">

    <div class="form-group">
        <label for="title">Title: </label>
        <input type="text" id="title" name="title" class="form-control" value="<?= $post->title ?>">
    </div>

    <div class="form-group">
        <label for="img">Image Link: </label>
        <input type="text" name="img" id="img" value="<?= $post->img ?>" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Subtitle: </label>
        <input type="text" id="subtitle" name="subtitle" class="form-control" value="<?= $post->subtitle ?>">
    </div>

    <div class="form-group">
        <label for="title">Chapter: </label>
        <textarea type="text" id="chapter" name="chapter" class="form-control"><?= $post->chapter ?></textarea>
    </div>

    <div class="form-group">
        <label for="title">Chapter Two: </label>
        <textarea type="text" id="chapter_two" name="chapter_two" class="form-control"><?= $post->chapter_two ?></textarea>
    </div>

    <div class="form-group">
        <label for="title">Chapter Three: </label>
        <textarea type="text" id="chapter_three" name="chapter_three" class="form-control"><?= $post->chapter_three ?></textarea>
    </div>

    <button type="submit" class="btn btn-secondary">Edit</button>
</form>
</div>
<?php require_once "views/partials/header.php"; ?>
