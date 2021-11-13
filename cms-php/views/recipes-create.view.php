<?php require_once "views/partials/header.php"; ?>
<div class="content">
<form action="/recipes" method="post" class="reduceSize">
    <div class="form-group">
        <label for="title">Recipe Name</label>
        <input type="text" id="title" name="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="img">Image Link</label>
        <input name="img" id="img" class="form-control"></input>
    </div>

    <button type="submit" class="btn btn-secondary">Create</button>
</form>
</div>
<?php require_once "views/partials/header.php"; ?>
