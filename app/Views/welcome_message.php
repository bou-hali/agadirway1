<!-- app/Views/welcome_message.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Busway Agadir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

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

    <style>
    .scroll-item {
        transition: transform 0.2s;
    }

    .scroll-item:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    /* Custom colors */
    .bg-black {
        background-color: black;
    }

    .bg-orange {
        background-color: white;
        border: black 1px solid;
    }

    /* Responsive adjustments */
    @media (max-width: 767px) {
        .scroll-item {
            width: 100%;
            /* Full width on small screens */
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .scroll-item {
            width: 80%;
            /* Slightly smaller on medium screens */
        }
    }

    @media (min-width: 992px) {
        .scroll-item {
            width: 100%;
            /* Full width on large screens */
        }
    }

    /* Additional styling for trajet cards */
    .trajet-card {
        margin-bottom: 20px;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('plan-ligne-station') ?>">AGADIR<span
                    style="color: chocolate;">Way</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"> <a href="<?= base_url('plan-ligne-station') ?>" class="nav-link">Lignes
                            & stations </a></li>
                    <li class="nav-item"><a href="<?= base_url('/carte') ?>" class="nav-link">Abonnemsnts & tarifs</a>
                    </li>
                    <?php
          if (!session()->get('user_id')) {
          ?>
                    <li class="nav-item"><a href="/login" class="nav-link">se connecter</a></li>
                    <li class="nav-item"><a href="/register" class="nav-link">s'inscrire</a></li>
                    <?php
          } else {
          ?>
                    <li class="nav-item"><span class="nav-link"><?= session()->get('username') ?></span></li>
                    <li class="nav-item"><a href="/logout" class="nav-link">deconnecter</a></li>

                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('<?= base_url('img/bg_1.jpg') ?>');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center">
                <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text">
                        <h1 class="mb-4"><span>Bienvenue à Agadirway</span></h1>
                    </div>
                </div>
                <div class="col-lg-2 col"></div>
                <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">

                    <!-- Display Flashdata Error -->
                    <?php if (session()->getFlashdata('error')): ?>
                    <p class="alert alert-danger w-100"><?= esc(session()->getFlashdata('error')) ?></p>
                    <?php endif; ?>

                    <!-- Cherchez Form -->
                    <form action="<?= base_url('rechercher-trajet') ?>" method="POST"
                        class="request-form ftco-animate w-100">
                        <?= csrf_field() ?>
                        <h2>Cherchez votre Bus</h2>
                        <div class="form-group">
                            <label for="station_depart">Station départ</label>
                            <select name="station_depart" id="station_depart" required class="form-control">
                                <option value="">Sélectionner une station</option>
                                <?php foreach ($stations as $station): ?>
                                <option value="<?= esc($station['id']) ?>"
                                    <?= (old('station_depart') == $station['id']) ? 'selected' : '' ?>>
                                    <?= esc($station['nom']) ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="station_arrivee">Station arrivée</label>
                            <select name="station_arrivee" id="station_arrivee" required class="form-control">
                                <option value="">Sélectionner une station</option>
                                <?php foreach ($stations as $station): ?>
                                <option value="<?= esc($station['id']) ?>"
                                    <?= (old('station_arrivee') == $station['id']) ? 'selected' : '' ?>>
                                    <?= esc($station['nom']) ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Cherchez</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <section class="container py-5">
        <?php if (!empty($trajets)): ?>
        <h3 class="mb-4">Résultats :</h3>
        <div class="row">
            <?php foreach ($trajets as $trajet): ?>
            <div class="col-md-6 trajet-card">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?= esc($trajet['trajet_nom']) ?></h5>
                        <p class="card-text"><strong>Bus:</strong> <?= esc($trajet['bus_numero']) ?></p>
                        <?php if (!empty($trajet['stations'])): ?>
                        <h6>Stations :</h6>
                        <ul class="list-group list-group-flush">
                            <?php foreach ($trajet['stations'] as $station): ?>
                            <li class="list-group-item"><?= esc($station['nom']) ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php elseif (!empty($error)): ?>
        <p class="alert alert-info"><?= esc($error) ?></p>
        <?php endif; ?>
    </section>

    <section class="container-fluid py-5">
        <div class="row">
            <!-- First Box: Plan Ligne & Station -->
            <div class="col-md-4 mb-4">
                <div class="scroll-item bg-black text-white border-0">
                    <a href="<?= base_url('plan-ligne-station') ?>" class="text-decoration-none text-white">
                        <div class="p-4 text-center">
                            <div class="icon"><span class="flaticon-route"></span></div>
                            <h2 style="color: aliceblue;">Plan Ligne & Station</h2>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Second Box: Tarifs et Abonnements -->
            <div class="col-md-4 mb-4">
                <div class="scroll-item bg-orange text-black border-0">
                    <a href="<?= base_url('tarifs-abonnements') ?>" class="text-decoration-none text-black">
                        <div class="p-4 text-center">
                            <div class="icon"><span class="flaticon-customer-support"></span></div>
                            <h2>Tarifs et Abonnements</h2>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Third Box: Itinéraire -->
            <div class="col-md-4 mb-4">
                <div class="scroll-item bg-black text-white border-0">
                    <a href="<?= base_url('itineraire') ?>" class="text-decoration-none text-white">
                        <div class="p-4 text-center">
                            <div class="icon"><span class="flaticon-online-booking"></span></div>
                            <h2 style="color: aliceblue;">Itinéraire</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url('<?= base_url('img/about.jpg') ?>');">
                </div>
                <div class="col-md-6 wrap-about py-md-5 ftco-animate">
                    <div class="heading-section mb-5 pl-md-5">
                        <span class="subheading"></span>
                        <h2 class="mb-4">Bienvenue sur AgadirWay !</h2>
                        <p>Agadir Bus est votre application pour des trajets en bus plus simples et rapides à travers la
                            ville. Que vous soyez étudiant, navetteur quotidien, ou voyageur occasionnel, Agadir Bus
                            vous offre des horaires en temps réel, des itinéraires optimisés, et des informations
                            pratiques pour faciliter vos déplacements. Notre mission : rendre le transport public à
                            Agadir plus accessible et fiable pour tous.</p>
                        <p><a href="#" class="btn btn-primary">En savoir plus</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section services-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="icon"><i class="icon ion-md-bus"></i></div>
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Nos Services</span>
                    <h2 class="mb-2">Nos Services</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon"><i class="icon ion-md-bus"
                                        style="font-size: 30px; color: orange;"></i></div>
                                <h3 class="heading mb-0 pl-3">Recherche de Bus en Temps Réel</h3>
                            </div>
                            <p>Trouvez le meilleur itinéraire avec des horaires actualisés et la durée estimée.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon"><span class="oi oi-people" style="font-size: 30px;"></span></div>
                                <h3 class="heading mb-0 pl-3">Abonnements Étudiants</h3>
                            </div>
                            <p>Profitez de tarifs préférentiels pour les étudiants, pour un transport facile et
                                abordable.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon"><span class="oi oi-calendar" style="font-size: 30px;"></span></div>
                                <h3 class="heading mb-0 pl-3">Plans pour Navetteurs Quotidiens</h3>
                            </div>
                            <p>Simplifiez vos trajets quotidiens avec des abonnements adaptés.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon"><span class="oi oi-map" style="font-size: 30px;"></span></div>
                                <h3 class="heading mb-0 pl-3">Suivi des Bus en Direct</h3>
                            </div>
                            <p>Suivez votre bus en temps réel et gagnez du temps en planifiant mieux votre départ.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section actualites-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Actualités</span>
                    <h2 class="mb-2">Dernières Nouvelles</h2>
                </div>
            </div>
            <div class="view-content news__list" role="list">
                <div class="views-row" role="listitem">
                    <article class="click-details node node--type-actualite node--promoted node--view-mode-teaser">
                        <div class="node--row">
                            <div class="node--left">
                                <div class="node__tag">
                                    <span class="node__category">Mises à Jour</span>
                                </div>
                                <h3 class="node__title">
                                    <a href="/actualites/mise-a-jour-horaires" rel="bookmark">
                                        <span itemprop="name">Mise à Jour des Horaires de Bus 📅</span>
                                    </a>
                                </h3>
                                <span class="node__date">
                                    <time itemprop="dateCreated" datetime="2023-07-18T17:39:41+0200">18/07/2023</time>
                                </span>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="views-row" role="listitem">
                    <article class="click-details node node--type-actualite node--promoted node--view-mode-teaser">
                        <div class="node--row">
                            <div class="node--left">
                                <div class="node__tag">
                                    <span class="node__category">Lancements</span>
                                </div>
                                <h3 class="node__title">
                                    <a href="/actualites/lancement-application" rel="bookmark">
                                        <span itemprop="name">Lancement de la Nouvelle Application Mobile 📱</span>
                                    </a>
                                </h3>
                                <span class="node__date">
                                    <time itemprop="dateCreated" datetime="2023-08-15T14:00:00+0200">15/08/2023</time>
                                </span>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="views-row" role="listitem">
                    <article class="click-details node node--type-actualite node--promoted node--view-mode-teaser">
                        <div class="node--row">
                            <div class="node--left">
                                <div class="node__tag">
                                    <span class="node__category">Partenariats</span>
                                </div>
                                <h3 class="node__title">
                                    <a href="/actualites/partenariat-ecoles" rel="bookmark">
                                        <span itemprop="name">Partenariat avec les Écoles Locales 🎓</span>
                                    </a>
                                </h3>
                                <span class="node__date">
                                    <time itemprop="dateCreated" datetime="2023-09-10T10:30:00+0200">10/09/2023</time>
                                </span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Single Image for the Section -->
            <div class="section-image text-center my-4">
                <img src="<?= base_url('img/actualites-section-image.jpg') ?>" alt="Actualités" class="img-fluid">
            </div>

            <div class="read-more text-center mt-4">
                <a href="<?= base_url('actualites') ?>" class="btn btn--primary">Voir toutes les actualités</a>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="heading-section">Contactez-nous</h2>
                    <p>Si vous avez des questions ou besoin d’assistance, n’hésitez pas à nous contacter. Nous sommes là
                        pour vous aider !</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <form action="<?= base_url('contact') ?>" method="POST" class="bg-white p-5 contact-form">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <input type="text" name="nom" class="form-control" placeholder="Votre nom" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Votre email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="sujet" class="form-control" placeholder="Sujet">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Envoyer le message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="info-wrap bg-primary w-100 p-5">
                        <h3>Informations de contact</h3>
                        <p class="mb-4">Nous serions ravis de vous entendre. Voici comment nous contacter :</p>
                        <div class="d-flex align-items-center mb-3">
                            <span class="icon ion-md-pin mr-3"></span>
                            <p>123 Rue d'Agadir, Agadir, Maroc</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <span class="icon ion-md-call mr-3"></span>
                            <p>+212 6 123 456 78</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="icon ion-md-mail mr-3"></span>
                            <p>support@agadirbus.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Roulez avec nous</h2>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url('planifier-itineraire') ?>" class="py-2 d-block">Planifier mon
                                    itinéraire</a></li>
                            <li><a href="<?= base_url('explorer-reseau') ?>" class="py-2 d-block">Explorer le réseau</a>
                            </li>
                            <li><a href="<?= base_url('horaires-frequences') ?>" class="py-2 d-block">Horaires et
                                    fréquences</a></li>
                            <li><a href="<?= base_url('signaler-incident') ?>" class="py-2 d-block">Signaler un
                                    incident</a></li>
                        </ul>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Tickets et tarifs</h2>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url('titres-transport-disponibles') ?>" class="py-2 d-block">Titres de
                                    transport disponibles</a></li>
                            <li><a href="<?= base_url('tarifs-par-ligne') ?>" class="py-2 d-block">Tarifs par ligne</a>
                            </li>
                            <li><a href="<?= base_url('selectionner-titre-transport') ?>"
                                    class="py-2 d-block">Sélectionner un titre de transport</a></li>
                            <li><a href="<?= base_url('ou-acheter') ?>" class="py-2 d-block">Où acheter</a></li>
                            <li><a href="<?= base_url('demander-carte-transport') ?>" class="py-2 d-block">Demandez
                                    votre carte de transport</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">À votre service</h2>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url('rapporter-incident') ?>" class="py-2 d-block">Rapporter un
                                    incident ou un objet perdu</a></li>
                            <li><a href="<?= base_url('reclamations-suggestions') ?>" class="py-2 d-block">Réclamations
                                    et suggestions</a></li>
                            <li><a href="<?= base_url('confort-securite') ?>" class="py-2 d-block">Confort et sécurité à
                                    bord</a></li>
                            <li><a href="<?= base_url('avis') ?>" class="py-2 d-block">Nous voulons votre avis</a></li>
                            <li><a href="<?= base_url('evaluer-service') ?>" class="py-2 d-block">Évaluer la qualité du
                                    service</a></li>
                            <li><a href="<?= base_url('appels-offres') ?>" class="py-2 d-block">Appels d'offres en
                                    cours</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Nous contacter</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Rue Fictive,
                                        Agadir, Maroc</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929
                                            210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@agadirway.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> Tous droits réservés | Ce service est propulsé par <i class="icon-heart color-danger"
                            aria-hidden="true"></i> <a href="https://agadirway.com" target="_blank">AgadirWay</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg>
    </div>


    <!-- Bootstrap JS and dependencies -->
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

</body>

</html>