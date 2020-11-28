<?= $this->extend('layout/templateContent'); ?>

<?= $this->section('content'); ?>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://i0.wp.com/nerdschalk.com/wp-content/uploads/2020/10/genshin-impact-new-characters-their-release-date-and-how-to-get-them.png?fit=1920%2C1080&ssl=1" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3>NEW UPCOMING CHARACTER BANNER</h3>
                <p>A New Star Approaches</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://fextralife.com/wp-content/uploads/2020/10/Genshin-Impact-Update-1.1.-Launches-November-11th.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://cdn.fanbyte.com/wp-content/uploads/2020/10/Genshin-Ballad.jpg?x52070" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Get Keqing "The Qixing" </h1>
                <p>Rate Up on Standard Wish Banner!</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://theaxo.com/wp-content/uploads/2020/10/Genshin-Impact-upcoming-character-banners.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://esportsku.com/wp-content/uploads/2020/10/Webp.net-compress-image-21.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://dailyspin.id/wp-content/uploads/2020/11/genshin-impact-wish-tips.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<?= $this->endSection('content'); ?>