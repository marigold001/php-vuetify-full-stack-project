<?php require_once "views/partials/header.php"; ?>
<div class="content">
<h1><?= $recipe->title ?></h1>

<div>
    <strong>Image URL:</strong><?= $recipe->img ?>
</div>
    <div><strong>Difficulty:</strong><?= $recipe->difficulty ?></div>
    <div><strong>Preparation-time:</strong><?= $recipe->preparation_time ?></div>
    <div><strong>Description:</strong><?= $recipe->description ?></div>
</div>
<?php require_once "views/partials/footer.php"; ?>
