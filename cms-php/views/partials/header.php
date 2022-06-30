<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My CMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,500&family=Julius+Sans+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>


<div class="container">
<div id="flex">
    <div id="navigation">
        <img src="https://i.imgur.com/bw5Jgdr.png" id="logo" alt="">
    <?php if(isset($_SESSION['user'])) : ?>
    <div>User: <?= $_SESSION['user']->name; ?></div>
    <?php else: ?>
    <div>Guest</div>
    <?php endif;?>
<?php require_once "navigation.php"; ?>
    </div>

