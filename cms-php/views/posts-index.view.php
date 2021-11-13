<?php require_once "views/partials/header.php"; ?>
<div class="content">

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Post Title</th>
        <th>
            <a href="/posts/create" class="btn btn-light">Add new Post</a>
        </th>
    </tr>
    </thead>
    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?= $post->id ?></td>
            <td><?= $post->title ?></td>
            <td><a href="/posts/show?id=<?= $post->id ?>" class="btn btn-secondary">Show</a> <a href="/posts/edit?id=<?=
                $post->id ?>" class="btn btn-secondary">Edit</a> <a href="/posts/destroy?id=<?=
                $post->id ?>" class="btn btn-secondary">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>

</div>

<?php require_once "views/partials/footer.php"; ?>
