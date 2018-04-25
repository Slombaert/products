<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="Wild Code School">
    <meta name="description" content="Wild Code School project_2">
    <meta name="keywords" content="Mon Espace Perruques, perruque, naturelle, synthétique">
    <title>Mon Espace Perruques</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Carousel CSS-->
    <!-- Slider -->
    <link rel="stylesheet" href="/public/assets/css/slider.min.css">
    <!-- Lightbox Pop up -->
    <link rel="stylesheet" href="/public/assets/css/lightbox.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="/public/assets/css/owl.carousel.min.css">
    <!-- Custom CSS Carousel-->
    <link rel="stylesheet" href="/public/assets/css/style.default.css">
    <!--Homepage_products CSS-->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/section_style.css">
    <link rel="stylesheet" href="/public/assets/css/fontawesome-all.min.css">
    <!--Index CSS-->
    <link rel="stylesheet" href="assets/css/index.css">
    <!-- Navbar and footer -->
    <link rel="stylesheet" type="text/css" href="/public/assets/css/navbar_and_footer_style.css">

    <!-- Modernizr -->
    <script src="/public/assets/js/modernizr.custom.79639.min.js"></script>
</head>

<body>

    <!-- Include the navbar -->
    <header>
        <?php include '../src/View/navbar.php'; ?>
    </header>
    <!--=Carousel Section-->
    <section id="carousel" class="hero hidden-sm hidden-xs">
        <div id="slider" class="sl-slider-wrapper">

            <div class="sl-slider">
                <!-- slide -->
                <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <img src="assets/image/homepage_sectioncarousel_womanwithowl.jpg" alt="Femme avec une chouette"
                         title="Ellen_Wille_HaireSociety_2017" class="size-image-carousel">
                    <div class="carousel-caption"><h1>Bienvenue sur Mon espace perruques</h1></div>
                </div>
                <!-- slide -->
                <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <img src="assets/image/homepage_sectioncarousel_blondwoman.jpg" alt="Femme avec perruque blonde"
                         title="Ellen_Wille_Pure!Power_2015" class="size-image-carousel">
                </div>
                <!-- slide -->
                <div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <img src="assets/image/homepage_sectioncarousel_maninfrontthecoliseum.jpg" alt="Homme devant le Colisée de Rome"
                         title="Hairformance_Ellen_wille" class="size-image-carousel">
                </div>
            </div><!-- End sl-slider -->

            <!-- slider pagination -->
            <nav id="nav-dots" class="nav-dots">
                <span class="nav-dot-current"></span>
                <span></span>
                <span></span>
            </nav>
        </div>
    </section><!--End Carousel Section-->

    <!--Product Section-->
    <!-- Compagny Introduction -->
    <section id="company-introduction">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Mon espace perruques</h3>
                    <p>Mon espace perruques vous propose un large éventail de chevelure pour hommes, femmes, et enfants présentant
                        une perte de cheveux temporaire ou déﬁnitive. Nous travaillons avec différents partenaires tels que :
                        Elite Hair International, Ellen Wille, NJ Paris ...
                        La personnalistation, l'écoute et les conseils sont les points forts que nous mettons à votre service.
                        Nous nous trouvons à Lambersart et intervenons à domicile, à l'hôpital et partout dans le Nord Pas-de-Calais.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="features">
        <h3 class="title-activities">Nos activités</h3>
        <div class="container">
            <div class="row">
                <!-- Advices And Services -->
                <div class="col-md-6 section-advices-services">
                    <h4 class = "advices-title wow fadeInLeft">Conseils & Services</h4>
                    <img src="assets/image/homepage_sectionadvices_team.jpg" alt="photo de l'equipe" class="wow fadeInLeft image-section-advices col-md-12">
                    <p class="text-advices wow fadeInLeft col-md-12"><strong>Dotée d'une expérience de plus de 25 ans dans le
                            domaine de la prothèse capillaire</strong>, Mon atelier perruques vous propose une pré-sélection
                        de perruques adaptée à votre demande et à votre image. Nous vous offrirons également de précieux conseils d'entretien et de pose
                        pour entretenir votre perruque.<strong>Aucun frais de déplacement ne vous sera facturé et tout devis sera gratuit.</strong>
                        Mon atelier perruques est agréé par la sécurité sociale. Vous recevrez une feuille de soin avec facture pour votre remboursement
                        CPAM et mutuelle et nous vous indiquerons la marche à suivre pour faciliter vos démarches. Pour plus de conseils et de services,
                        nous vous invitons à lire notre rubrique <a href="../src/View/services.php" class="link-advices-and-services"> Conseils & Services</a> .</p>
                </div>
                <!-- Wig & Accessorries -->
                <div class="col-md-6 col-xs-12">
                    <h4 class = "wig-and-accessories wow fadeInRight">Perruques & Accessoires</h4>
                    <div class="row">
                        <!-- Wig Woman -->
                        <div class="col-md-6 box wow fadeInRight">
                            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                            <a href="/src/View/products.php/#firstPage"><img src="assets/image/homepage_sectionwig_wigwoman.jpg"
                                                                              alt="photo femme avec perruque blonde"
                                                                              title="Regard-ELITE_Hair_Internationnal"
                                                                              class="radius-wig-and-accessories"></a>
                            <h4 class="title"><a href="/src/View/products.php/#firstPage">Perruques Femmes</a></h4>
                        </div>
                        <!-- Wig Man -->
                        <div class="col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                            <div class="icon"><i class="ion-ios-flask-outline"></i></div>
                            <a href="/src/View/products.php/#secondPage"><img src="assets/image/homepage_sectionwig_wigwman.jpg"
                                                                            alt="photo homme avec perruque chatain"
                                                                            title="Steven_Sport_2.0-Hairformance_Ellen_wille"
                                                                            class="radius-wig-and-accessories"></a>
                            <h4 class="title"><a href="/src/View/products.php/#secondPage">Perruques Hommes</a></h4>
                        </div>
                        <!-- Wig Children -->
                        <div class="col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                            <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                            <a href="/src/View/products.php/#3rdPage"><img src="assets/image/homepage_sectionwig_child.jpg"
                                                                            alt="photo fille avec longue perruque brune"
                                                                            title="Ariana-Elite_Hair_International"
                                                                            class="radius-wig-and-accessories"></a>
                            <h4 class="title"><a href="/src/View/products.php/#3rdPage">Perruques Enfants</a></h4>
                        </div>
                        <!-- Cup & Turban -->
                        <div class="col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                            <a href="/src/View/products.php/#hat"><img src="assets/image/homepage_sectionwig_hat.jpg"
                                                                         alt="Femme avec turban beige"
                                                                         title="Fashion_LIN-Elite_Hair_International"
                                                                         class="radius-wig-and-accessories"></a>
                            <h4 class="title"><a href="../src/View/products.php/#hat">Bonnets & Turbans</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="partners">
        <div class="container">
            <div class="row">
                <h3>Partenaires médicaux</h3>
                <div class="col-md-6"><a href="https://www.ameli.fr/" target="_blank"><img src="assets/image/homepage_sectionparteners_cpam_logo.png"
                                                                                           alt="Logo CPAM" class="wow fadeInLeft logo-cpam"></a></div>
                <div class="col-md-6"><a href="http://www.e-cancer.fr/Patients-et-proches/Qualite-de-vie/Prendre-soin-des-cheveux-et-de-la-peau/Cout-d-une-perruque" target="_blank">
                        <img src="assets/image/homepage_sectionparteners_ecancer_logo.png" alt="Logo ecancer" class="wow fadeInRight logo-ecancer"></a></div>
            </div>
        </div>
    </section>
    <!--End Product Section-->

    <!--Include the footer-->
    <?php  include '../src/View/footer.php'; ?>

    <!--General libraries JS-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>

    <!--Carousel libraries JS-->
    <script src="/public/assets/js/jquery.ba-cond.min.js"></script>
    <script src="/public/assets/js/jquery.slitslider.min.js"></script>
    <script src="/public/assets/js/owl.carousel.min.js"></script>
    <script src="/public/assets/js/lightbox.min.js"></script>
    <script src="/public/assets/js/datepicker.min.js"></script>
    <script src="/public/assets/js/timepicki.min.js"></script>
    <script src="/public/assets/js/jquery.validate.min.js"></script>
    <script src="/public/assets/js/smooth.scroll.min.js"></script>

    <!--Product Section libraries JS-->
    <script src="/public/assets/js/wow.min.js"></script>
    <script src="/public/assets/js/main.js"></script>
</body>
</html>