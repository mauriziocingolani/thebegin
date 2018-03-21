<?php

use app\assets\KalystaAsset;
use mauriziocingolani\yii2fmwkphp\Html;

/* @var $this \mauriziocingolani\yii2fmwkphp\View */

KalystaAsset::register($this);
$this->pageTitle = 'Villa Kalista';
?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            Villa Kalysta
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#villa">VILLA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#facilities">FACILITIES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#structure">STRUCTURE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">CONTACT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
                    <strong>VILLA KALYSTA, AN EXCLUSIVE AND REFINED ATMOSPHERE</strong>
                </h1>
                <hr>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">
                    Villa Kalysta is a luxury villa built in the Mediterranean Style, with the beach and waters of the Adriatic literally a few steps away. Particularly suitable for families and groups.
                </p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#villa">Discover</a>
            </div>
        </div>
    </div>
</header>

<section class="bg-primary" id="villa">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">Between dream and reality</h2>
                <img src="/img/kalysta/logo.png" alt="logo-kalysta" />
                <hr class="light my-4">
                <p class="text-faded mb-4">
                    Located directly on the sea in the beautiful bay of Paleokastrista in Corfu Island, Villa Kalysta offers its Guests an exclusive and refined atmosphere. Here many services are available: private Chef, concierge, babysitting, limousine transfer, scuba diving, event organization and Wedding Planning. Furthermore, our Guests could enjoy the possibility to rent a yacht in order to discover the island and its treasures. Even a private jet is at disposal to reach Corfu and fly back home.
                </p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="#facilities">Facilities</a>
            </div>
        </div>
    </div>
</section>

<section id="facilities">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Facilities</h2>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="/img/kalysta/icons/icone villa rooms.png" src="icona1" class="sr-icons" />
                    <h3 class="mb-3">Rooms</h3>
                    <p class="text-muted mb-0">5 luxury rooms<br />with 12 sleeps</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="/img/kalysta/icons/icone villa beach.png" src="icona2" class="sr-icons" />
                    <h3 class="mb-3">Beach</h3>
                    <p class="text-muted mb-0">Direct access<br />to the beach</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="/img/kalysta/icons/icone villa pool.png" src="icona3" class="sr-icons" />
                    <h3 class="mb-3">Pool</h3>
                    <p class="text-muted mb-0">Swimming Pool with bar<br />and whirlpool area</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="/img/kalysta/icons/icone villa bbq.png" src="icona4" class="sr-icons" />
                    <h3 class="mb-3">Bbq</h3>
                    <p class="text-muted mb-0">Outdoor kitchen<br />with barbecue</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-0" id="structure">
    <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
            <?php
            $images = [
                'POOL' => 'BBQ PISCINA.jpg',
                'ROOMS' => 'CAMERA.jpg',
                'KITCHEN' => 'CUCINA 1.jpg',
                'LIVING' => 'LIVING 1.jpg',
                'VERANDA' => 'LIVING 2.jpg',
                'OUTDOOR' => 'VERANDA 2.jpg',
            ];
            foreach ($images as $cat => $img) :
                ?>

                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="/img/kalysta/structure/<?= $img; ?>">
                        <img class="img-fluid" src="/img/kalysta/structure/<?= $img; ?>" alt="img">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?= $cat; ?>
                                </div>
                                <div class="project-name">
                                    Click to enlarge
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bg-dark text-white">
    <div class="container text-center">
        <h2 class="mb-4">Villa Kalysta</h2>
        <a class="btn btn-light btn-xl sr-button" href="http://www.villakalysta.com/">visit our website</a>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <img src="/img/kalysta/logo-the-begin.png" alt="logo-the-begin" class="img-responsive" />
                <hr class="my-4">
                <h2 class="section-heading">THE BEGIN S.R.L.</h2>
                <p class="mb-5">
                    Via Piemonte 39/A<br />
                    00187 Roma<br />
                    P.I. – C.F. 09882480156
                    <br /><br />
                    <a href="#cookies" data-toggle="modal"><small>Cookie Policy</small></a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center">
                <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                <p>[+39] 071 285 23 46</p>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
                <p>
                    <?= Html::mailto('info@thebegincollection.it'); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<?= $this->renderInclude('_cookies'); ?>