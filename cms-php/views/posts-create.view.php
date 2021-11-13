<?php require_once "views/partials/header.php"; ?>
<div class="content">
<form action="/posts" method="post" class="reduceSize">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="img">Body</label>
        <textarea name="img" id="img" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-secondary">Create</button>
</form>
</div>
<?php require_once "views/partials/header.php"; ?>
