<?php require_once "views/partials/header.php"; ?>
<div class="content">
    <button class="btn btn-dark"><a href="/cookbooks" class="link-light"><i class="bi bi-arrow-90deg-left"></i> <span class="ml-1">Go back</span></a></button>

    <h2><?= $cookbook->title ?></h2>

<div>
    <strong>Subtitle: </strong><?= $cookbook->subtitle ?>
</div>
    <div><strong>Text: </strong><?= $cookbook->text ?></div>
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