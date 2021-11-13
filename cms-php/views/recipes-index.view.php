<?php require_once "views/partials/header.php"; ?>
<div class="content">

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Recipe Name</th>
        <th>
            <a href="/recipes/create" class="btn btn-light">Add new Post</a>
        </th>

    </tr>
    </thead>
    <?php foreach ($recipes as $recipe): ?>
        <tr>
            <td><?= $recipe->id ?></td>
            <td><?= $recipe->title ?></td>

            <td><a href="/recipes/show?id=<?= $recipe->id ?>" class="btn btn-secondary">Show</a> <a href="/recipes/edit?id=<?=
                $recipe->id ?>" class="btn btn-secondary">Edit</a> <a href="/recipes/destroy?id=<?=
                $recipe->id ?>" class="btn btn-secondary">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>

</div>

<?php require_once "views/partials/footer.php"; ?>
