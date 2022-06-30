<?php require_once "views/partials/header.php"; ?>
<div class="content">
    <button class="btn btn-dark"><a href="/posts" class="link-light"><i class="bi bi-arrow-90deg-left"></i> <span class="ml-1">Go back</span></a></button>

    <h1><?= $post->title ?></h1>

<div>
    <strong>Image Link:</strong> <?= $post->img ?>
</div>
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