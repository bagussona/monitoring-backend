<div class="container">
<div class="jumbotron mt-3">
<div class="col-6">
    <?php Flasher::flashLogin(); ?>
</div>
  <h1 class="display-4">Hello, <?= $_SESSION['username']; ?>!</h1>
  <p class="lead">This is me, <?= $_SESSION['username']; ?></p>
  <hr class="my-4">
  <h4>I am <?= $_SESSION['username']; ?> Proudly present, and welcome to my webpage</h4>
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="<?= BASEURL; ?>Postingan/" role="button">Post w/ DB</a>
  <a class="btn btn-primary btn-lg" href="<?= BASEURL; ?>Postingan/view_post" role="button">Post w/ Array</a>
  <a class="btn btn-primary btn-lg" href="<?= BASEURL; ?>About/" role="button">About me</a>
</div>
</div>