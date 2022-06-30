<?php require_once "views/partials/header.php"; ?>
<div class="content">
<form action="/cookbooks/edit" class="reduceSize" method="post">
    <input type="hidden" name="id" value="<?= $cookbook->id ?>">

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" class="form-control" value="<?= $cookbook->title ?>">
    </div>

    <div class="form-group">
        <label for="title">Subtitle</label>
        <input type="text" id="subtitle" name="subtitle" class="form-control" value="<?= $cookbook->subtitle ?>">
    </div>

    <div class="form-group">
        <label for="img">Text</label>
        <textarea name="img" id="img" cols="30" rows="10" class="form-control"><?= $cookbook->text ?></textarea>
    </div>

    <button type="submit" class="btn btn-secondary">Edit</button>
</form>
</div>
<?php require_once "views/partials/header.php"; ?>
