<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/d/dd/Genshin_Impact_logo.png">
    <style>
        .navbar {
            font-size: 24px;
        }

        .navbar .navbar-brand {
            font-size: 24px;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title><?= $title; ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <img src="https://cdn.steamgriddb.com/logo/2465517595f5ea9f225d52ed73a4d0db.png" class="mr-2" width="150">
            <a class="navbar-brand" href="/Pages/admin">GeTime</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/Pages/index">Home </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/Pages/about">About</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/Pages/detailIndex">Game</a>
                    </li>
                    <li class="nav-item active ">
                        <a class="nav-link my-2 my-sm-0" href="/Pages/login">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <footer>
        <center>
            <img src="https://media.playstation.com/is/image/SCEA/genshin-impact-logo-16aug20-en-us?$native_t$" alt="">
            <h5>Copyright&copy;<a href="https://www.instagram.com/yuanferdinand04/">Yuan Ferdinand</a></h5>
        </center>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>