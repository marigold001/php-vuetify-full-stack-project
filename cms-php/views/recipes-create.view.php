<?php require_once "views/partials/header.php"; ?>
<div class="content">
<form action="/recipes" method="post" class="reduceSize">
    <div class="form-group">
        <label for="title">Recipe Name: </label>
        <input type="text" id="title" name="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="img">Image Link: </label>
        <input type="text" name="img" id="img" class="form-control">
    </div>

    <div class="form-group">
        <label for="difficulty">Difficulty: </label>
        <input type="text" name="difficulty" id="difficulty" class="form-control">
    </div>

    <div class="form-group">
        <label for="preparation_time">Preparation time: </label>
        <input type="text" name="preparation_time" id="preparation_time" class="form-control">
    </div>

    <div class="form-group">
        <label for="description">Description: </label>
        <textarea type="text" name="description" id="description" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-secondary">Create</button>
</form>
</div>
<?php require_once "views/partials/header.php"; ?>
