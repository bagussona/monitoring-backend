<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/bootstrap.css">
    <title><?= $data['judul'];?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-xl">
        <a class="navbar-brand" href="<?= BASEURL; ?>Home/">MyFirst-MVC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="<?= BASEURL; ?>Home/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>Postingan/">Postingan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>About/">About</a>
        </li>
      </ul>
    </div>
</div>
</nav>