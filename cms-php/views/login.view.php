<?php require_once "views/partials/header.php"; ?>
<div class="content">
    <h2>Login</h2>
<form action="/login" method="post">



    <div class="form-group reduceSize">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" class="form-control">
    </div>
    <div class="form-group reduceSize">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control">
    </div>



    <button type="submit" class="btn btn-secondary">Login</button>
</form>
</div>
<?php require_once "views/partials/footer.php"; ?>
