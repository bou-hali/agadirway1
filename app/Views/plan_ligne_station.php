<!DOCTYPE html>
<html lang="en">
<head>
    <title>Plan Ligne & Station - Busway Agadir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/open-iconic-bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/animate.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/aos.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/ionicons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap-datepicker.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/jquery.timepicker.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/flaticon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/icomoon.css') ?>">

    <!-- Bootstrap CSS (Ensure Bootstrap is included for Accordions) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Custom Styles -->
    <style>
        /* General Styling */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            color: #343a40;
        }

        /* Trajet Card Styling */
        .trajet-card {
            margin-bottom: 20px;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .trajet-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        /* Button Styling */
        .btn-link {
            text-decoration: none;
            color: #343a40;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .btn-link:hover {
            color: #F96D00;
            text-decoration: none;
        }

        /* Badge Styling */
        .badge-success {
            background-color: #28a745;
            font-size: 0.9rem;
        }

        .badge-secondary {
            background-color: #6c757d;
            font-size: 0.9rem;
        }

        /* Station List Styling */
        .station-list {
            list-style-type: none;
            padding-left: 0;
        }

        .station-list li {
            padding: 10px;
            background-color: #ffffff;
            margin-bottom: 10px;
            border-radius: 5px;
            transition: background-color 0.2s;
        }

        .station-list li:hover {
            background-color: #e2e6ea;
        }

        /* Highlighted Station */
        .highlighted-station {
            background-color: #FF5733 !important; /* Your site's orange color */
            color: #ffffff; /* Optional: White text for contrast */
            transition: background-color 0.3s ease;
        }

        /* Search Bar Styling */
        #searchTrajet {
            border: 2px solid #F96D00;
            border-radius: 5px;
            padding: 10px;
            font-size: 1rem;
        }

        #searchTrajet:focus {
            outline: none;
            border-color: #FF5722;
            box-shadow: 0 0 5px rgba(255,87,34,0.5);
        }

        /* Trajet Header Styling */
        .trajet-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .trajet-header h5 {
            margin: 0;
        }

        /* Station Cards Styling (Optional) */
        .station-card {
            margin-bottom: 20px;
        }

        /* Adjusting Accordion */
        .card-header {
            background-color: #ffffff;
        }

        .collapse.show {
            background-color: #f1f1f1;
        }

        /* Footer Styling */
        footer.ftco-footer {
            background-color: #343a40;
            color: #ffffff;
        }

        footer.ftco-footer a {
            color: #ffffff;
        }

        footer.ftco-footer a:hover {
            color: #F96D00;
            text-decoration: none;
        }
    </style>
</head>
<body>
  
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">AGADIR<span style="color: chocolate;">Way</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" 
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="<?= base_url() ?>" class="nav-link">Accueil</a></li>
                    <li class="nav-item active"><a href="<?= base_url('plan-ligne-station') ?>" class="nav-link">Plan Ligne & Station</a></li>
                    <li class="nav-item"><a href="<?= base_url('carte') ?>" class="nav-link">abonnements & tarifs</a></li>
                    <li class="nav-item"><a href="<?= base_url('contact') ?>" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <!-- Hero Section -->
    <div class="hero-wrap" style="background-image: url('<?= base_url('img/bg_1.jpg') ?>');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center">
                <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text">
                        <h1 class="mb-4"><span>Plan Ligne & Station</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Section -->
    <section class="ftco-section">
        <div class="container">
            <!-- Search Bar for Trajets and Stations -->
            <div class="row mb-4">
                <div class="col-md-6 offset-md-3">
                    <input type="text" id="searchTrajet" class="form-control" placeholder="Rechercher un trajet ou une station...">
                </div>
            </div>

            <!-- Trajets List as Accordion -->
            <h2 class="mb-4">Liste des Trajets</h2>
            <div id="trajetAccordion">
                <?php foreach ($trajets as $index => $trajet): ?>
                    <?php
                        // Ensure there are at least two stations to get start and end
                        $start_station = isset($trajet['stations'][0]['nom']) ? $trajet['stations'][0]['nom'] : 'Départ';
                        $end_station = isset($trajet['stations'][count($trajet['stations']) - 1]['nom']) ? $trajet['stations'][count($trajet['stations']) - 1]['nom'] : 'Terminus';
                    ?>
                    <div class="card trajet-card" data-aos="fade-up">
                        <div class="card-header trajet-header" id="heading<?= $trajet['trajet_id'] ?>">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?= $trajet['trajet_id'] ?>" aria-expanded="false" aria-controls="collapse<?= $trajet['trajet_id'] ?>" aria-label="Toggle Trajet Details">
                                    <?= 'Bus ' . esc($trajet['bus_numero']) . ' (' . esc($start_station) . ' - ' . esc($end_station) . ')' ?>
                                </button>
                            </h5>
                            <!-- Optional Status Badge (If Status is Available) -->
                            <?php if(isset($trajet['status']) && $trajet['status'] == 'active'): ?>
                                <span class="badge badge-success">Actif</span>
                            <?php elseif(isset($trajet['status']) && $trajet['status'] == 'inactive'): ?>
                                <span class="badge badge-secondary">Inactif</span>
                            <?php endif; ?>
                        </div>

                        <div id="collapse<?= $trajet['trajet_id'] ?>" class="collapse" aria-labelledby="heading<?= $trajet['trajet_id'] ?>" data-parent="#trajetAccordion">
                            <div class="card-body">
                                <h6>Stations :</h6>
                                <ul class="station-list">
                                    <?php foreach ($trajet['stations'] as $station): ?>
                                        <li><?= esc($station['nom']) ?> - <?= esc($station['adresse']) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Stations List as Cards -->
            <h2 class="mb-4 mt-5">Liste des Stations</h2>
            <div class="row">
                <?php foreach ($stations as $station): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card station-card h-100" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-body">
                                <h5 class="card-title"><?= esc($station['nom']) ?></h5>
                                <p class="card-text"><?= esc($station['adresse']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Optional: Map Section (If Implemented) -->
            <!-- 
            <h2 class="mb-4 mt-5">Carte des Stations</h2>
            <div id="map" style="height: 500px;"></div>
            -->
        </div>
    </section>

    <!-- Footer -->
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <!-- First Column -->
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Roulez avec nous</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Planifier mon itinéraire</a></li>
                            <li><a href="#" class="py-2 d-block">Explorer le réseau</a></li>
                            <li><a href="#" class="py-2 d-block">Horaires et fréquences</a></li>
                            <li><a href="#" class="py-2 d-block">Signaler un incident</a></li>
                        </ul>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Second Column -->
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Tickets et tarifs</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Titres de transport disponibles</a></li>
                            <li><a href="#" class="py-2 d-block">Tarifs par ligne</a></li>
                            <li><a href="#" class="py-2 d-block">Sélectionner un titre de transport</a></li>
                            <li><a href="#" class="py-2 d-block">Où acheter</a></li>
                            <li><a href="#" class="py-2 d-block">Demandez votre carte de transport</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Third Column -->
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">À votre service</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Rapporter un incident ou un objet perdu</a></li>
                            <li><a href="#" class="py-2 d-block">Réclamations et suggestions</a></li>
                            <li><a href="#" class="py-2 d-block">Confort et sécurité à bord</a></li>
                            <li><a href="#" class="py-2 d-block">Nous voulons votre avis</a></li>
                            <li><a href="#" class="py-2 d-block">Évaluer la qualité du service</a></li>
                            <li><a href="#" class="py-2 d-block">Appels d'offres en cours</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Fourth Column -->
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Nous contacter</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Rue Fictive, Agadir, Maroc</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@agadirway.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Ce service est propulsé par <i class="icon-heart color-danger" aria-hidden="true"></i> <a href="https://agadirway.com" target="_blank">AgadirWay</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
        </svg>
    </div>

    <!-- JavaScript Files -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/jquery-migrate-3.0.1.min.js') ?>"></script>
    <script src="<?= base_url('js/popper.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('js/jquery.easing.1.3.js') ?>"></script>
    <script src="<?= base_url('js/jquery.waypoints.min.js') ?>"></script>
    <script src="<?= base_url('js/jquery.stellar.min.js') ?>"></script>
    <script src="<?= base_url('js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('js/aos.js') ?>"></script>
    <script src="<?= base_url('js/jquery.animateNumber.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap-datepicker.js') ?>"></script>
    <script src="<?= base_url('js/jquery.timepicker.min.js') ?>"></script>
    <script src="<?= base_url('js/scrollax.min.js') ?>"></script>
    <script src="<?= base_url('js/google-map.js') ?>"></script>
    <script src="<?= base_url('js/main.js') ?>"></script>
    
    <!-- Optional JavaScript for Accordion and Search -->
    <script>
        $(document).ready(function(){
            // Initialize AOS (Animate On Scroll)
            AOS.init({
                duration: 800,
                easing: 'slide',
                once: true,
                mirror: false
            });

            // Search Functionality
            $("#searchTrajet").on("keyup", function() {
                var value = $(this).val().toLowerCase().trim();
                
                if (value === "") {
                    // If search box is empty, show all trajets and remove highlights
                    $("#trajetAccordion .trajet-card").show();
                    $(".station-list li").removeClass("highlighted-station");
                    $("#trajetAccordion .collapse").collapse('hide');
                } else {
                    $("#trajetAccordion .trajet-card").each(function() {
                        var trajetText = $(this).find(".btn-link").text().toLowerCase();
                        var stations = $(this).find(".station-list li");
                        var matchFound = false;

                        // Check if trajetText includes the search value
                        if (trajetText.includes(value)) {
                            matchFound = true;
                            $(this).show();
                            // Expand this trajet
                            $(this).find(".collapse").collapse('show');
                            // Remove highlights
                            stations.removeClass("highlighted-station");
                        } else {
                            // Check if any station includes the search value
                            stations.each(function() {
                                var stationText = $(this).text().toLowerCase();
                                if (stationText.includes(value)) {
                                    matchFound = true;
                                    $(this).addClass("highlighted-station");
                                } else {
                                    $(this).removeClass("highlighted-station");
                                }
                            });

                            if (matchFound) {
                                $(this).show();
                                // Expand trajet to show highlighted station
                                $(this).find(".collapse").collapse('show');
                            } else {
                                $(this).hide();
                                // Collapse trajet if no match
                                $(this).find(".collapse").collapse('hide');
                                // Remove any highlights
                                stations.removeClass("highlighted-station");
                            }
                        }

                        // Auto-scroll to the highlighted station if matched
                        if ($(this).find(".highlighted-station").length > 0) {
                            $('html, body').animate({
                                scrollTop: $(this).find(".highlighted-station").offset().top - 100
                            }, 500);
                        }
                    });
                }
            });

            // Remove highlights when collapsing a trajet
            $(".collapse").on('hidden.bs.collapse', function () {
                $(this).find(".station-list li").removeClass("highlighted-station");
            });
        });
    </script>
</body>
</html>
