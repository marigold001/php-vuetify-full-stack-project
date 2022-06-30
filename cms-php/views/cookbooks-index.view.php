<?php require_once "views/partials/header.php"; ?>
<div class="content">

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Cookbook Name</th>
        <th>
            <a href="/cookbooks/create" class="btn btn-light">Add new Cookbook</a>
        </th>

    </tr>
    </thead>
    <?php foreach ($cookbooks as $cookbook): ?>
        <tr>
            <td><?= $cookbook->id ?></td>
            <td><?= $cookbook->title ?></td>
            <td><a href="/cookbooks/show?id=<?= $cookbook->id ?>" class="btn btn btn-outline-dark">Show</a> <a href="/cookbooks/edit?id=<?=
                $cookbook->id ?>" class="btn btn btn-outline-dark mx-2">Edit</a> <a href="/cookbooks/destroy?id=<?=
                $cookbook->id ?>" class="btn btn btn-outline-dark">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>

</div>

<?php require_once "views/partials/footer.php"; ?>
