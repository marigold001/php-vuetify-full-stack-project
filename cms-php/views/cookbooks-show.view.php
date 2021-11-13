<?php require_once "views/partials/header.php"; ?>
<div class="content">
<h1><?= $cookbook->title ?></h1>

<div>
    <strong>Image URL:</strong><?= $cookbook->img ?>
</div>
    <div><strong>Difficulty:</strong><?= $cookbook->difficulty ?></div>
    <div><strong>Preparation-time:</strong><?= $cookbook->preparation_time ?></div>
    <div><strong>Description:</strong><?= $cookbook->description ?></div>
</div>
<?php require_once "views/partials/footer.php"; ?>
