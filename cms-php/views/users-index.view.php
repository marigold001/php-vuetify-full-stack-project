<?php require_once "views/partials/header.php"; ?>
<div class="content">

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>
            <a href="/users/create" class="btn btn-light">Add new Post</a>
        </th>

    </tr>
    </thead>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->name ?></td>
            <td><a href="/users/show?id=<?= $user->id ?>" class="btn btn-secondary">Show</a> <a href="/users/edit?id=<?=
                $user->id ?>" class="btn btn-secondary">Edit</a> <a href="/users/destroy?id=<?=
                $user->id ?>" class="btn btn-secondary">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>
</div>
</div>

<?php require_once "views/partials/footer.php"; ?>
