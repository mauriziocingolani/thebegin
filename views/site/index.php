<?php

use app\assets\MainAsset;

/* @var $this \mauriziocingolani\yii2fmwkphp\View */

MainAsset::register($this);
?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <img src="/img/begin-10.png" alt="The Begin Collection" style="width: 200px;" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive"> 
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#hotels">Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#plus">Plus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#territory">Where we are</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('/img/slider/1.jpg')">
                <div class="d-flex h-100 align-items-center justify-content-center">
                    <h2 class="display-4 text-center" style="font-weight: 700;">Being away, feeling at home</h2>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('/img/slider/2.jpg')">
                <div class="d-flex h-100 align-items-center justify-content-center">
                    <h2 class="display-4 text-center" style="font-weight: 700;">Being away, feeling at home</h2>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('/img/slider/3.jpg')">
                <div class="d-flex h-100 align-items-center justify-content-center">
                    <h2 class="display-4 text-center" style="font-weight: 700;">Being away, feeling at home</h2>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('/img/slider/4.jpg')">
                <div class="d-flex h-100 align-items-center justify-content-center">
                    <h2 class="display-4 text-center" style="font-weight: 700;">Being away, feeling at home</h2>
                </div>
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
</header>

<!-- Services -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-lg-4 text-center">
                <h2 class="section-heading">Embrace Your Senses</h2>
                <h3 class="section-subheading text-muted">
                    The real exclusivity of our hotels is their inclusiveness. Like an embrace. A welcoming and enveloping embrace, 
                    never intrusive. As the very refinement is, today, coming back to the Essence: of things, of places, of emotions
                    <br />
                    <br />
                    <em><small>(Guido Guidi - Founder)</small></em>
                </h3>
            </div>
        </div>
        <div class="row text-center p-italiano">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                Enchanting venues with an outstanding address. Where everything is tailor-made. With bespoke designs. Authentic and elegant venues. Real microcosmos to enjoy. For The Begin Hotels hospitality is an art form, an ancient tradition that is reiterated with time. Its boutique hotels give values a new lease of life, shaped to new contexts, new needs and wishes. Sophisticated balances, like the ones between a desire to get away and seek protection, between experimenting with new worlds and feeling right at home. An embrace that knows exactly how to be discrete and gentle. Just like a butterfly. A relationship which, despite being highly professional, is far from cold and standard. Here, nothing is sterile, everything is familiar. Spontaneous. Because hospitality always involves the pleasure of serving, the curiosity of discovering and being discovered, the desire to convey a Story. Genuine and authentic.
            </div>
        </div>
    </div>
</section>

<!-- Hotels -->
<section class="bg-light" id="hotels">
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-lg-4 text-center">
                <h2 class="section-heading">Our Hotels</h2>
                <h3 class="section-subheading text-muted">a new experience of hospitality</h3>
            </div>
        </div>
        <div class="row text-center p-italiano">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                The Begin Hotels is a mini chain of boutique hotels, resorts and luxury villas situated in prestigious European locations. Based on a refreshed idea of travel experience, we combine the luxury of living a good life with the traditional concept of hospitality.
            </div>
        </div>
        <hr />
        <div class="row justify-content-sm-center" style="margin-top: 75px;">
            <div class="col-sm-4">
                <div class="team-member">
                    <a href="http://www.seeporthotel.com" target="blank">
                        <img class="mx-auto rounded-circle" src="img/team/seeport.png" alt="" />
                    </a>
                    <p class="text-muted"><a href="http://www.seeporthotel.com" target="blank">www.seeporthotel.com</a></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <a href="https://www.seebayhotel.com" target="blank">
                        <img class="mx-auto rounded-circle" src="img/team/seebay.png" alt="">
                    </a>
                    <p class="text-muted"><a href="https://www.seebayhotel.com" target="blank">www.seebayhotel.com</a></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <a href="http://www.giardinodeipini.it" target="blank">
                        <img class="mx-auto rounded-circle" src="img/team/giardinodeipini.png" alt="">
                    </a>
                    <p class="text-muted"><a href="http://www.giardinodeipini.it" target="blank">www.giardinodeipini.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Plus -->
<section id="plus">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Plus</h2>
                <h3 class="section-subheading text-muted">taking care of your desires</h3>
            </div>
        </div>
        <div class="row text-center p-italiano">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                Strutture dotate di ogni comfort, di un nuovo concetto di Lusso senza tempo con personale altamente 
                qualificato e grande attenzione alla valorizzazione del territorio.
            </div>
        </div>
        <hr />
        <div class="row text-center p-inglese">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                Our properties are equipped with every comfort and have a modern timeless luxurious feel delivered by 
                highly qualified staff and a strong focus to our region&apos;s development.
            </div>
        </div>
        <div class="row" style="margin-top: 75px;">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Booking<br />Service</h4>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Transfer<br />Service</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Shopping<br />Tour</h4>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Loyalty<br />Rewards</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="img/about/5.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Cooking<br />Class</h4>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="img/about/6.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Wedding<br />Planner</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="img/about/7.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Gourmet<br />Experience</h4>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="img/about/8.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Personal<br />Concierge</h4>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Terrritory -->
<section class="bg-light" id="territory">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Where We Are</h2>
                <h3 class="section-subheading text-muted">locations</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <img class="img-fluid" src="img/portfolio/ANCONA.jpg" alt="">
                <div class="portfolio-caption">
                    <h4>Ancona</h4>
                    <!--<p class="text-muted">???</p>-->
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <img class="img-fluid" src="img/portfolio/PORTONOVO.jpg" alt="">
                <div class="portfolio-caption">
                    <h4>Portonovo</h4>
                    <!--<p class="text-muted">???</p>-->
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <img class="img-fluid" src="img/portfolio/SALENTO.jpg" alt="">
                <div class="portfolio-caption">
                    <h4>Salento</h4>
                    <!--<p class="text-muted">???</p>-->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Us</h2>
                <h3 class="section-subheading text-muted">
                    <strong>The Begin S.R.L.</strong><br />
                    Sede legale: Via delle Fornaci, 155<br />
                    00165 - Roma (RM) Italy<br />
                    P.I. e C.F. 09882480156<br />
                    tel. +39 071 2850150
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div id="success"></div>
                <a href="mailto:info@thebeginhotels.com" class="btn btn-xl" >Send Message</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; The Begin 2017</span>
            </div>
            <div class="col-md-4">
                <!--                        <ul class="list-inline social-buttons">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>-->
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li class="list-inline-item">
                        <a href="#cookies" data-toggle="modal">Cookie Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div id="covid-modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body text-center">
                <h1 style="margin-bottom: 25px;">COVID-19 UPDATE</h1>
                <p style="margin-bottom: 25px;">Scopri le nostre misure di sicurezza</p>
                <hr />
                <a id="covid-dismiss" href="#" style="margin-right: 20px;">No grazie</a>
                <a id="covid-view" href="#" class="btn btn-primary nothanks" data-dismiss="modal" aria-hidden="true">VISUALIZZA</a>
            </div>

        </div>
    </div>
</div>

<?= $this->renderInclude('_cookies'); ?>