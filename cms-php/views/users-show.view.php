<?php require_once "views/partials/header.php"; ?>
<div class="content">
    <button class="btn btn-dark"><a href="/users" class="link-light"><i class="bi bi-arrow-90deg-left"></i> <span class="ml-1">Go back</span></a></button>

<h1>User: <?= $user->name ?></h1>

<div>
    Email: <?= $user->email ?>
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