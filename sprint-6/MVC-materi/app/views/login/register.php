<div class="container-sm text-center mt-4">
<div class="jumbotron">
        <h1>Register Area</h1>

        <div class="modal-footer justify-content-center">
        <form action="<?= BASEURL; ?>Login/registerSuccess" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" required="required" placeholder="masukkan username..">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" required="required" placeholder="masukkan password..">
                    </div>
                    <div class="form-group">
                        <label for="cfr_password">Password:</label>
                        <input type="password" class="form-control" name="cfr_password" id="cfr_password" required="required" placeholder="konfirmasi password..">
                    </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
        </div>
                    <div class="modal-footer">
                        <label for="btn btn-success">Sudah Punya Akun? <a href="<?= BASEURL ?>Login" class="btn btn-success">Login</a> </label>
                    </div>
                </form>

</div>
</div>