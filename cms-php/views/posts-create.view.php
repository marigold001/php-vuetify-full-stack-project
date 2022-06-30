<?php require_once "views/partials/header.php"; ?>
<div class="content">
<form action="/posts" method="post" class="reduceSize">
    <div class="form-group">
        <label for="title">Title: </label>
        <input type="text" id="title" name="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="img">Image URL: </label>
        <input name="img" id="img" type="text" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Subtitle: </label>
        <input type="text" id="subtitle" name="subtitle" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Chapter: </label>
        <input type="text" id="chapter" name="chapter" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Chapter Two: </label>
        <input type="text" id="chapter_two" name="chapter_two" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Chapter Three: </label>
        <input type="text" id="chapter_three" name="chapter_three" class="form-control">
    </div>

    <button type="submit" class="btn btn-secondary">Create</button>
</form>
</div>
<?php require_once "views/partials/header.php"; ?>
