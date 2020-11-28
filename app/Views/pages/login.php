<?= $this->extend('layout/templateAcc'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" href="/css/login.css">
<div class="container h-100 pt-5">
    <div class="row align-itemes-center h-100 align-middle">
        <div class="col-6 mx-auto">
            <div class="jumbotron">
                <center>
                    <h3>Sign In</h3>
                </center>
                <form action=" <?= base_url('/Pages/index'); ?> " method='POST'>
                    <div class="form-group">
                        <label for="">Username / Email </label>
                        <input autocomplete="off" autofocus="on" type="text" name="username" id="username" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="">Password </label>
                        <input type="password" name="password" id="password" class="form-control">

                    </div>
                    <button class="btn btn-block" type="submit">SIGN IN</button>
                    <span class="dark-color d-inline-block line-height-2">Belum daftar? <a href="/Pages/register">Daftar disini</a></span>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>