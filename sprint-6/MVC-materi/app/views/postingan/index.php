<div class="container mt-3">  

<div class="row">
    <div class="col-6">
            <?php Flasher::flash(); ?>
    </div>
</div>

    <div class="row">
        <div class="col-6">
            <h1>Postingan Databases</h1>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Tambah Post</button>

            <!-- Modal Create -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Postingan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                <form action="<?= BASEURL; ?>Postingan/tambah" method="post">
                    <div class="form-group">
                        <label for="judul_post">Judul Postingan</label>
                        <input type="text" class="form-control" name="judul_post" id="judul_post" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="kategori_post">Kategori</label>
                        <input type="text" class="form-control" name="kategori_post" id="kategori_post">
                    </div>
                    <div class="form-group">
                        <label for="isi_post">Isi</label>
                        <input type="text-area" class="form-control" name="isi_post" id="isi_post" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="img_post">Gambar</label>
                        <input type="text" class="form-control" name="img_post" id="img_post">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
            </div>

         </div>   
    </div>

    <?php foreach( $data['postingan'] as $post) : ?>
    <div class="card mt-3">
        <div class="card-header">

        

        <div class="row">
        <div class="col-6">
            <h5 class="card-title"><?= $post['judul_post']; ?></h5>
        </div>
            <div class="col-6 d-flex justify-content-end">
            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#staticBackdropUpdate">Update</button> -->
            <a href="<?= BASEURL; ?>Postingan/hapus/<?= $post['id']; ?>" class="btn btn-primary" onclick="return confirm('Yakin Hapus Postingan <?= $post['judul_post']; ?> ?');">Delete</a>
            </div>
        </div>

        </div>
        <div class="card-body">
            <p class="card-title justify-content-end"><?= $post['kategori_post']; ?></p>
            <p class="card-text"><?= $post['isi_post']; ?></p>
            <a href="<?= BASEURL; ?>Postingan/detail/<?= $post['id']; ?>" class="btn btn-primary">Selengkapnya</a>
        </div>
    </div>
    <?php endforeach; ?>


</div>