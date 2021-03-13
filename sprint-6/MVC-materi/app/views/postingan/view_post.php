<div class="container mt-3">
    <div class"row">
        <div class="col-6">
            <h2>Postingan Array</h2>
        </div>
    </div>

    <?php foreach( $data['post'] as $post) : ?>
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="card-title"><?= $post['judul_post']; ?></h5>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $post['kategori_post']; ?></h5>
            <p class="card-text"><?= $post['isi_post']; ?></p>
            <a href="<?= BASEURL; ?>Postingan" class="btn btn-primary">Selengkapnya</a>
        </div>
    </div>
    <?php endforeach; ?>


</div>