<?php require_once "views/partials/header.php"; ?>
<div class="content">
<form action="/recipes/edit" class="reduceSize" method="recipe">
    <input type="hidden" name="id" value="<?= $recipe->id ?>">

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" class="form-control" value="<?= $recipe->title ?>">
    </div>

    <div class="form-group">
        <label for="img">Body</label>
        <textarea name="img" id="img" cols="30" rows="10" class="form-control"><?= $recipe->img ?></textarea>
    </div>

    <button type="submit" class="btn btn-secondary">Edit</button>
</form>
</div>
<?php require_once "views/partials/header.php"; ?>
