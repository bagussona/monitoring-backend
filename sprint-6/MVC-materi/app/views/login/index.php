<div class="container-sm text-center mt-4">
<div class="jumbotron">
        <h1>Login Area</h1>

        <div class="modal-footer justify-content-center">
        <form action="<?= BASEURL; ?>Postingan/ubah" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="masukkan username..">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="masukkan password..">
                    </div>
                        <button type="submit" class="btn btn-primary">Login</button>
        </div>
                    <div class="modal-footer">
                    <label for="btn btn-success">Belum Punya akun? <a href="<?= BASEURL ?>Login/register" class="btn btn-success">Register</a> </label>
                    </div>
                </form>

</div>
</div>