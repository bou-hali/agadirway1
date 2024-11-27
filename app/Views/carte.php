<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Options Navette</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
            .scroll-item {
        transition: transform 0.2s;
        }

        .scroll-item:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .bg-black {
            background-color: black;
        }

        .bg-orange {
            background-color:white;
            border: black 1px solid;
        }

        /* Responsive adjustments */
        @media (max-width: 767px) {
            .scroll-item {
                width: 100%; /* Full width on small screens */
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .scroll-item {
                width: 80%; /* Slightly smaller on medium screens */
            }
        }

        @media (min-width: 992px) {
            .scroll-item {
                width: 100%; /* Full width on large screens */
            }
        }
    </style>
  
</head>

<body>
     <!-- Affichage du message de succès ou d'erreur sous forme d'alerte -->
     <?php if (isset($successMessage)): ?>
        <div id="alertMessage" class="alert alert-success bg-green-500 text-white p-4 rounded-lg shadow-md mb-6 fixed top-10 left-1/2 transform -translate-x-1/2 z-50">
            <p><?php echo $successMessage; ?></p>
            <button onclick="closeAlert()" class="text-xl ml-4">&times;</button>
        </div>
    <?php elseif (isset($validation)): ?>
        <!-- Affichage des erreurs sous forme d'alerte -->
        <div id="alertMessage" class="alert alert-error bg-red-500 text-white p-4 rounded-lg shadow-md mb-6 fixed top-10 left-1/2 transform -translate-x-1/2 z-50">
            <p><?php echo "Il y a des erreurs dans votre formulaire."; ?></p>
            <button onclick="closeAlert()" class="text-xl ml-4">&times;</button>
        </div>
    <?php endif; ?>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand"href="<?= base_url('welcome_message') ?>" >AGADIR<span style="color: chocolate;">Way</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.html" class="nav-link">Lignes & stations </a></li>
          <li class="nav-item"><a href="pricing.html" class="nav-link">abonnements & tarifs</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="hero-wrap" style="background-image: url('img/enfants-enseignant-attente-bus-arret-bus_74855-13986.avif'); margin" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text justify-content-start align-items-center">
        <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
          <div class="text">
            <h1 class="mb-4"><span>Cart de reduction</span></h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="container-fluid py-5">
    <div class="row">
      <div class="col-md-3 mb-3">
        <div class="scroll-item bg-black text-white border-0" data-card="etudiant">
          <a href="#etudiant" class="text-decoration-none text-white">
            <div class="p-4 text-center">
              <h2 style="color: aliceblue;">Carte Étudiant</h2>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="scroll-item bg-orange text-black border-0" data-card="senior">
          <a href="#senior" class="text-decoration-none text-black">
            <div class="p-4 text-center">
              <h2>Carte Senior</h2>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="scroll-item bg-black text-white border-0" data-card="militaire">
          <a href="militair" class="text-decoration-none text-white">
            <div class="p-4 text-center">
              <h2 style="color: aliceblue;">Carte Militaire</h2>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="scroll-item bg-orange text-black border-0" data-card="professeur">
          <a href="#professeur" class="text-decoration-none text-black">
            <div class="p-4 text-center">
              <h2>Carte Professeur</h2>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>


  <section id="etudiant" class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('img/cart.png');">
      </div>
      <div class="col-md-6 wrap-about py-md-5 ftco-animate">
        <div class="heading-section mb-5 pl-md-5">
          <span class="subheading">Carte Étudiant</span>
          <h2 class="mb-4">Idéal pour les étudiants</h2>
          <p>La Carte Étudiant est conçue spécialement pour les étudiants afin de faciliter leurs déplacements en ville avec des tarifs réduits.</p>
          <p><strong>Documents nécessaires :</strong></p>
          <ul>
            <li>Photocopie de la CIN ou équivalent</li>
            <li>1 photo récente</li>
            <li>Carte d'étudiant valide</li>
          </ul>
          <p><a href="#" class="btn btn-primary">remplire demmande </a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="senior" class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('img/cart.png');">
      </div>
      <div class="col-md-6 wrap-about py-md-5 ftco-animate">
        <div class="heading-section mb-5 pl-md-5">
          <span class="subheading">Carte Senior</span>
          <h2 class="mb-4">Confort pour les seniors</h2>
          <p>La Carte Senior offre des trajets pratiques et économiques pour les voyageurs de 60 ans et plus.</p>
          <p><strong>Documents nécessaires :</strong></p>
          <ul>
            <li>Photocopie de la CIN ou équivalent</li>
            <li>1 photo récente</li>
            <li>Attestation de senior (si nécessaire)</li>
          </ul>
          <p><a href="#" class="btn btn-primary">remplire demmande </a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="militaire" class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('img/cart.png');">
      </div>
      <div class="col-md-6 wrap-about py-md-5 ftco-animate">
        <div class="heading-section mb-5 pl-md-5">
          <span class="subheading">Carte Militaire</span>
          <h2 class="mb-4">Carte spéciale pour les militaires</h2>
          <p>La Carte Militaire est dédiée aux membres des forces armées avec des avantages spéciaux pour leurs déplacements.</p>
          <p><strong>Documents nécessaires :</strong></p>
          <ul>
            <li>Photocopie de la CIN ou équivalent</li>
            <li>1 photo récente</li>
            <li>Carte d'identité militaire ou autre justificatif</li>
          </ul>
          <p><a href="#" class="btn btn-primary">remplire demmande </a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="professeur" class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('img/cart.png');">
      </div>
      <div class="col-md-6 wrap-about py-md-5 ftco-animate">
        <div class="heading-section mb-5 pl-md-5">
          <span class="subheading">Carte Professeur</span>
          <h2 class="mb-4">Carte pour les enseignants</h2>
          <p>La Carte Professeur offre des avantages pour les enseignants afin de faciliter leurs déplacements dans le cadre professionnel.</p>
          <p><strong>Documents nécessaires :</strong></p>
          <ul>
            <li>Photocopie de la CIN ou équivalent</li>
            <li>1 photo récente</li>
            <li>Attestation d'enseignement ou carte professionnelle</li>
          </ul>
          <p><a href="#" class="btn btn-primary">remplire demmande </a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="formulaire" class="ftco-section py-5 bg-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="bg-gray-50 p-8 rounded-lg shadow-lg">
          <h2 class="text-3xl font-semibold mb-6 text-center text-orange-600">Inscription à AgadirBus</h2>

          <form action="<?= base_url('carte') ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-4">
              <label for="nom" class="block text-sm font-medium text-gray-700">Nom complet</label>
              <input type="text" id="nom" name="nom" value="<?= set_value('nom') ?>" required placeholder="Votre nom" class="mt-2 block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
            </div>

            <div class="mb-4">
              <label for="email" class="block text-sm font-medium text-gray-700">Adresse email</label>
              <input type="email" id="email" name="email" value="<?= set_value('email') ?>" required placeholder="Votre email" class="mt-2 block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
            </div>

            <div class="mb-4">
              <label for="carte" class="block text-sm font-medium text-gray-700">Type de carte</label>
              <select id="carte" name="carte" class="mt-2 block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                <option value="etudiant" <?= set_value('carte') == 'etudiant' ? 'selected' : '' ?>>Carte Étudiant</option>
                <option value="senior" <?= set_value('carte') == 'senior' ? 'selected' : '' ?>>Carte Senior</option>
                <option value="militaire" <?= set_value('carte') == 'militaire' ? 'selected' : '' ?>>Carte Militaire</option>
                <option value="professeur" <?= set_value('carte') == 'professeur' ? 'selected' : '' ?>>Carte Professeur</option>
              </select>
            </div>

            <div class="mb-4">
              <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
              <textarea id="message" name="message" rows="4" class="mt-2 block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"><?= set_value('message') ?></textarea>
            </div>

            <div class="mb-4">
              <label for="documents" class="block text-sm font-medium text-gray-700">Télécharger vos documents</label>
              <input type="file" id="documents" name="documents" accept=".pdf,.jpg,.jpeg,.png" class="mt-2 block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
              <small class="text-gray-500">Accepte les fichiers PDF, JPG, PNG.</small>
            </div>

            <div class="mb-4 text-center">
              <button type="submit" class="px-6 py-2 bg-orange-600 text-white font-semibold rounded-lg hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500">
                Soumettre
              </button>
            </div>
</div>
          </form>
        </div>
      </div>
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
		  <div class="row">
			<div class="col-md-12 text-center">
			  <p>
				&copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Ce service est propulsé par <i class="icon-heart color-danger" aria-hidden="true"></i> <a href="https://agadirway.com" target="_blank">AgadirWay</a>
			  </p>
			</div>
		  </div>
		</div>
	  </footer>
       <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>




 <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
    e.preventDefault();

        const targetId = this.getAttribute('href');
        document.querySelector(targetId).scrollIntoView({
        behavior: 'smooth'
                        });
                    });
                });
                <!-- Script JS -->
   
       
        document.getElementById('formInscription').addEventListener('submit', function (event) {
            event.preventDefault(); 
           
            document.getElementById('confirmationMessage').classList.remove('hidden');

           
        });
        function closeAlert() {
            document.getElementById('alertMessage').style.display = 'none';
        }

        // Si vous voulez que l'alerte se ferme automatiquement après un délai (par exemple, 5 secondes)
        setTimeout(function() {
            const alert = document.getElementById('alertMessage');
            if (alert) {
                alert.style.display = 'none';
            }
        }, 5000)
    
 </script>
  <script src="js/cart.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
	  
	
	
	

	
	
  
</body>
</html>

