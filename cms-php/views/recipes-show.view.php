<?php require_once "views/partials/header.php"; ?>
<div class="content">
    <button class="btn btn-dark"><a href="/recipes" class="link-light"><i class="bi bi-arrow-90deg-left"></i> <span class="ml-1">Go back</span></a></button>
<h1><?= $recipe->title ?></h1>

<div>
    <strong>Image URL:</strong><?= $recipe->img ?>
</div>
    <div><strong>Difficulty:</strong><?= $recipe->difficulty ?></div>
    <div><strong>Preparation-time:</strong><?= $recipe->preparation_time ?></div>
    <div><strong>Description:</strong><?= $recipe->description ?></div>
</div>
<?php require_once "views/partials/footer.php"; ?>

<style>
    a {
        color: #fff;
    }

    a:hover {
        color: #fff;
    }
</style>