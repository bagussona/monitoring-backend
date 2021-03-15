            <!-- Modal Update -->
            <div class="modal fade" id="staticBackdropUpdate" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Update Postingan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                <form action="<?= BASEURL; ?>Postingan/ubah" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="<?= $data['postingan']['id']; ?>">
                        <label for="judul_post">Judul Postingan</label>
                        <input type="text" class="form-control" name="judul_post" id="judul_post" aria-describedby="emailHelp" placeholder="<?= $data['postingan']['judul_post']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="kategori_post">Kategori</label>
                        <input type="text" class="form-control" name="kategori_post" id="kategori_post" placeholder="<?= $data['postingan']['kategori_post']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="img_post">Gambar</label>
                        <input type="text" class="form-control" name="img_post" id="img_post" placeholder="<?= $data['postingan']['img_post']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="isi_post">Isi</label>
                        <input type="text-area" class="form-control" name="isi_post" id="isi_post" aria-describedby="emailHelp" placeholder="<?= $data['postingan']['isi_post']; ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
            </div>



<div class="container mt-3">

<div class="row">
    <div class="col-6">
            <?php Flasher::flash(); ?>
    </div>
</div>

    <div class="row">
        <div class="col-6">
            <h2>Detail Post</h2>
        </div>
    </div>

    <div class="card mt-3">        
        <div class="card-header">
        <div class="row">
        <div class="col-6">
            <h5 class="card-title"><?= $data['postingan']['judul_post']; ?></h5>
        </div>
            <div class="col-6 d-flex justify-content-end">
            <!-- Button trigger modal -->
            <a href="<?= BASEURL; ?>Postingan/ubah/<?= $data['postingan']['id']; ?>" class="btn btn-primary tampilModalUbah" data-toggle="modal" data-target="#staticBackdropUpdate">Update</a>
            </div>
        </div>
        </div>
        <div class="card-body">
            <p class="card-title lead"><?= $data['postingan']['kategori_post']; ?></p>
            <p class="card-text lead"><?= $data['postingan']['tgl_post']; ?></p>
            <p class="card-text lead"><?= $data['postingan']['img_post']; ?></p>
            <p class="card-text lead"><?= $data['postingan']['isi_post']; ?></p>
            <a href="<?= BASEURL; ?>Postingan" class="btn btn-primary lead">Kembali</a>
        </div>
    </div>

    

</div>