<?= $this->extend('layout/templateAcc'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="/css/login.css">
<div class="container h-100 pt-5">
    <div class="row align-itemes-center h-100 align-middle">
        <div class="col-6 mx-auto">
            <div class="jumbotron">
                <center>
                    <h3>Sign Up</h3>
                </center>
                <form action=" " method='POST'>
                    <div class="form-group">
                        <label for="">Name </label>
                        <input type="text" name="name" id="name" class="form-control">

                    </div>

                    <div class="form-group">
                        <label for="">Email </label>
                        <input autocomplete="off" autofocus="on" type="text" name="email" id="email" class="form-control">

                    </div>

                    <div class="form-group">
                        <label for="">Password </label>
                        <input type="password" name="password" id="password" class="form-control">

                    </div>

                    <div class="form-group">
                        <label for="">Re-Password </label>
                        <input type="password" name="re-password" id="re-password" class="form-control">

                    </div>
                    <button class="btn btn-block"><a href="/Pages/login">Sign Up </a></button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>