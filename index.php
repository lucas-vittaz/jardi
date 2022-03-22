<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <meta name="google-site-verification" content="..." />
    <meta name="robots" content="translate" />
    <meta name="googlebot" content="translate" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" /> -->

    <!-- Primary Meta Tags -->
    <title>Jardi'CA - Entretien d’espaces verts</title>
    <link rel="icon" href="onglet.png" />
    <meta name="title" content="Jardi'CA - Entretien d’espaces verts" />
    <meta
      name="description"
      content="Jeune entreprise chapelaine spécialisée dans l’entretien d’espaces verts et la création de pelouses.
    Particulièrement attaché à la satisfaction client, nous mettons tout en œuvre pour réaliser vos travaux les plus exigeants. "
    />
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="Jardi'CA - Entretien d’espaces verts" />
    <meta property="og:url" content="https://jardica.net/" />
    <meta property="og:title" content="Jardi'CA - Entretien d’espaces verts" />
    <meta
      property="og:description"
      content="Jeune entreprise chapelaine spécialisée dans l’entretien d’espaces verts et la création de pelouses.
      Particulièrement attaché à la satisfaction client, nous mettons tout en œuvre pour réaliser vos travaux les plus exigeants."
    />
    <meta property="og:image" content="onglet.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://jardica.net/" />
    <meta
      property="twitter:title"
      content="Meta Tags — Preview, Edit and Generate"
    />
    <meta
      property="twitter:description"
      content="Jeune entreprise chapelaine spécialisée dans l’entretien d’espaces verts et la création de pelouses.
      Particulièrement attaché à la satisfaction client, nous mettons tout en œuvre pour réaliser vos travaux les plus exigeants."
    />
    <meta property="twitter:image" content="onglet.png" />


    <!-- MapBox -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css' rel='stylesheet' />


    <!-- style and CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/0b266df6ca.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href=".public\css\style.css" />

  </head>
  <!-- ---Navbar--- -->

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a id="nav-logo" class="navbar-brand mx-5" href="/"></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div id="navbarNav" class="collapse navbar-collapse">
            <ul class="nav navbar-nav m-auto">
              <li class="nav-item">
                <a class="nav-link" href="#accueil">| Accueil |</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#propos">| À propos |</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#prestations">| Nos prestations |</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#réalisations">| Nos réalisations |</a>
              </li>
            </ul>
              <div id="btncontact" class="btn"><a href="#contact">Contactez-nous</a></div>
          </div>
        </div>
      </nav>

  <!-- ---Header--- -->

      <header id="accueil">
        <div id="header-1" class="container py-2">
          <div class="row" id="masthead-title">
            <div class="col">
              <h1 class="">Jardi'CA</h1>
              <p>
                ENTRETIEN ET CRÉATION D’ESPACES VERTS À LA CHAPELLE-SUR-ERDRE
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <a href="#propos" class="btn-enter">ENTRER</a>
            </div>
          </div>
        </div>
        <div id="header-2" class="container">
          <div class="row" id="masthead-contact">
            <div class="col-sm-12 col-md-3 d-flex">
              <i class="fa-solid fa-phone"></i><p>06 42 00 66 77</p>
            </div>
            <div class="col-sm-12 col-md-4 ">
              <i class="fa-solid fa-envelope"></i>
              <a href="mailto:contact@jardica.net" target="_blank">contact@jardica.net</a>
            </div>
          </div>
        </div>
      </header>
        
  <!-- ---A propos--- -->

  <section id="propos">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 col-xl-8 col-md-6 col-sm-12">
          <h2 class="">A propos</h2>
          <p class="">
            Jardi'CA est une entreprise chapelaine, spécialisée dans la création et l'entretien d'espaces verts.<br><br>
            Notre équipe de passionnés intervient principalement auprès d'une clientèle locale, à la Chapelle sur Erdre et ses alentours. Nous privilégions également un réseau de fournisseurs et de collaborateurs de proximité.<br><br>
            Que vous soyez une entreprise, un particulier ou une co-propriété, nous mettons tout en œuvre pour réaliser vos travaux les plus exigeants. Pour connaître le détail de nos prestations, <a href="#prestations">cliquez ici !</a><br><br>
            Pour toute question ou demande de contact, <a href="#contact"> cliquez ici !</a>
          </p>
        </div>
        <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12 my-5" id="img">
          <img src="/img/jardi_ca.jpg" alt="jardi ca">
        </div>
      </div>
    </div>
  </section>

  <!-- ---Nos prestations--- -->

  <section id="prestations">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-7 m-auto">
          <h2>Nos prestations</h2>
          <p class="card-text">
            Spécialisés dans l'entretien d'espaces verts, nous pouvons réaliser tous types de travaux.<br>
            Passionnés de créations de pelouses et de massifs fleuris, <br>
            Merci de nous contacter afin de bénéficier d'un devis gratuit
          </p>
        </div>
        <div class="col-sm-12 col-md-5">
          <h5 class="card-title"><span class="bold-title">01</span>Entretien d'espaces verts</h5>
          <div class="card">
            <div class="card-body m-auto">
              <ul>
                <li>Tonte de pelouses (toutes surfaces)</li>
                <li>Entretien de pelouses (scarification et regarnissage)</li>
                <li>Taille de haies et d'arbustes (toutes hauteurs)</li>
                <li>Taille d'arbres fruitiers, d'oliviers et de rosiers</li>
                <li>Préparation de potagers</li>
              </ul>
            </div>
            <div class="prestations_img"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-5">
          <h5 class="card-title"><span class="bold-title">02</span>Élagage</h5>
          <div class="card">
            <div class="card-body m-auto">
              <ul>
                <li>Élagage et abattage</li>
                <li>Broyage de branches</li>
                <li>Rognage de souches</li>
                <li>Fendage de bois</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col"></div>
        <div class="col-sm-12 col-md-5">
          <lottie-player
            class="my-lottie-logo text-center"
            src="https://assets2.lottiefiles.com/packages/lf20_mdmwone8.json"
            background="transparent"
            speed="0.5"
            style="width: 320px; height: 320px"
            loop
            autoplay
          ></lottie-player>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-5">
          <lottie-player
            class="my-lottie-logo text-center"
            src="https://assets9.lottiefiles.com/packages/lf20_mxlw4pl5.json"
            background="transparent"
            speed="0.5"
            style="width: 320px; height: 320px"
            loop
            autoplay
          ></lottie-player>
        </div>
        <div class="col-sm-12 col-md-5 m-auto">
          <h5 class="card-title"><span class="bold-title">03</span>Création paysagère</h5>
          <div class="card">
            <div class="card-body m-auto">
              <ul>
                <li>Engazonnement (création de pelouses initiale ou renouvelement)</li>
                <li>Création de massifs</li>
                <li>Plantations</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ---Nos réalisations--- -->

  <section id="réalisations">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h2 class="text-center">Nos réalisations</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 col-md-8 m-auto">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/img/réalisations/274773343_334464565307049_2230221044565975211_n (1).jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/img/réalisations/91349260_124230075847006_1388343076010852352_n.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/img/réalisations/251371546_405079217762089_5303124604777460101_n.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/img/réalisations/118645619_170481194555227_5856862403641409560_n.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/img/réalisations/274751621_691281301912019_7995885230946305209_n (1).jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>
      </div>
    </div>
  </section>

  <!-- ---Nos avis--- -->

  <section id="rating">
    <div class="container-fluid">
      <div class="row">
        <div class="col text-center">
          <h2>Avis clients</h2>
          <div class="shape_section mb-5"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-4 mb-5">
          <div class="my-card">
            <div class="profile profile-1"></div>
            <div class="row">
              <div class="d-flex col justify-content-between py-1 px-3 mt-5 mb-3">
                <h4>
                  Bazantay Jeremy
                </h4>
                <div>
                  <i class="fa-solid fa-star" style="color:yellow";></i>
                  <i class="fa-solid fa-star" style="color:yellow";></i>
                  <i class="fa-solid fa-star" style="color:yellow";></i>
                  <i class="fa-solid fa-star" style="color:yellow";></i>
                  <i class="fa-solid fa-star" style="color:yellow";></i>
                </div>
              </div>
            </div>
            <div class="row">
              <p class="mx-1">
                Nous avons confié  des travaux d’élagage dans notre propriété à l’entreprise Jardi C/A.<br>
                Charlie est très professionnel.<br>
                Je recommande cette entreprise à tous les Chapelains.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 mb-5">
          <div class="my-card">
            <div class="profile profile-1"></div>
            <div class="row">
              <div class="d-flex col justify-content-between py-1 px-3 mt-5 mb-3">
                <h4>
                  J Lemaire
                </h4>
                <div>
                  <i class="fa-solid fa-star" style="color:yellow";></i>
                  <i class="fa-solid fa-star" style="color:yellow";></i>
                  <i class="fa-solid fa-star" style="color:yellow";></i>
                  <i class="fa-solid fa-star" style="color:yellow";></i>
                  <i class="fa-solid fa-star" style="color:yellow";></i>
                </div>
              </div>
            </div>
            <div class="row">
              <p class="mx-1">
              Tres bonne expérience ! Nous avons sollicité Jardi'Chacha pour la taille de nos haies. Le travail est soigné, le ramassage aussi. Aucun dégât sur nos autres arbres et arbustes ou dans le potager. Génial ! Nous recommandons sans hésitation !</p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 mb-5">
          <div class="my-card">
            <div class="profile profile-1"></div>
            <div class="row">
              <div class="d-flex col justify-content-between py-1 px-3 mt-5 mb-3">
                <h4>
                  Bonnetaud Virginie
                </h4>
                <div>
                  <i class="fa-solid fa-star" style="color:yellow";></i>
                  <i class="fa-solid fa-star" style="color:yellow";></i>
                  <i class="fa-solid fa-star" style="color:yellow";></i>
                  <i class="fa-solid fa-star" style="color:yellow";></i>
                  <i class="fa-solid fa-star" style="color:yellow";></i>
                </div>
              </div>
            </div>
            <div class="row">
              <p class="mx-1">
              Travail consciencieux, résultat impeccable répondant à nos attentes.<br>
              Jardinier très sympathique, à l'écoute du client.<br><br></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ---Nous contacter--- -->

  <section id="contact">
    <div class="container-fluid text-center">
      <div class="row">
          <h2>Contactez-nous</h2>
          <p class="text-justify">Vous etes un particulier, une entreprise ou une co-propriété ?<br>
            Pour toute demandes, laissez nous un message,  et nous y répondrons avec plaisir dans les plus brefs délais.</p>
          <div class="shape_section mb-5"></div>
      </div>
      <div class="row">
        <div class="col">

          <?php
            if(array_key_exists('errors', $_SESSION)): ?> 
              <div class="alert alert-danger">
                <?= implode('li', $_SESSION['errors']); ?>
              </div>
          <?php endif;?>
          <?php
            if(array_key_exists('success', $_SESSION)): ?> 
              <div class="alert alert-success">
                Votre e-mail a bien été envoyé !
              </div>
          <?php endif;?>

          <div class="form-bg p-2">
            <form action="contact.php" method="POST">
              <div class="form-row">
                <div class="row">
                  <div class="col mb-3">
                    <input type="name" name="name" class="form-control" id="validationCustom01" placeholder="Votre Nom" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>" required>
                  </div>
                  <div class="col mb-3">
                    <input type="text" name="firstname" class="form-control" id="validationCustom02" placeholder="Votre Prénom" value="<?= isset($_SESSION['inputs']['firstname']) ? $_SESSION['inputs']['firstname'] : '';?>" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col mb-3">
                      <input type="email" name="email" class="form-control" id="validationCustomUsername" placeholder="Votre E-mail" aria-describedby="inputGroupPrepend"  value="<?= isset($_SESSION['inputs']['mail']) ? $_SESSION['inputs']['mail'] : '';?>" required>
                  </div>
                  <div class="col mb-3">
                    <input type="tel" name="tel" pattern="[0-9]{10}|\+33[0-9]{9}" class="form-control" id="validationCustom02" placeholder="Votre téléphone" value="<?= isset($_SESSION['inputs']['tel']) ? $_SESSION['inputs']['tel'] : '';?>" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col mb-3">
                    <input type="text" name='location' class="form-control" id="validationCustom03" placeholder="Lieu d'intervention" value="<?= isset($_SESSION['inputs']['location']) ? $_SESSION['inputs']['location'] : '';?>" required>
                  </div>               
                  <div class="col mb-3">
                      <select class="form-select" name="type" aria-label="Default select example" required>
                        <option value="" selected>Type de demande</option>
                        <option value="1">Devis</option>
                        <option value="2">Renseignements</option>
                        <option value="3">Recrutement</option>
                        <option value="4">Autre</option>
                      </select>
                    </div>
                </div>
                <div class="form-row">
                  <div class="col  mb-3">
                    <textarea type="text" name='subject' class="form-control" id="subject" placeholder="Précisez votre demande ..." required rows="5" cols="33" value="<?= isset($_SESSION['inputs']['subject']) ? $_SESSION['inputs']['subject'] : '';?>"></textarea>
                  </div>
              </div>
              <button class="btn btn-primary" name="submit" type="submit">Envoyer</button>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-9 col-md-8 m-auto my-5">
            <div id='map' style='width: auto; height: 350px;'></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ---Footer--- -->

  <footer>
    <div class="container-fluid">
      <div class="row flex-column flex-nowrap flex-sm-row flex-sm-wrap">
        <div class="col footer-logo"></div>
        <div class="col text-center">
          <h3>Plan du site</h3>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">
              <a href="#Accueil" class="nav-link p-0 text-muted">Accueil</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#propos" class="nav-link p-0 text-muted">A propos</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#prestations" class="nav-link p-0 text-muted"
                >Nos prestations</a
              >
            </li>
            <li class="nav-item mb-2">
              <a href="#réalisations" class="nav-link p-0 text-muted"
                >Réalisations</a
              >
            </li>
            <li class="nav-item mb-2">
              <a href="#avis" class="nav-link p-0 text-muted">Avis clients</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#contact" class="nav-link p-0 text-muted"
                >Nous contacter</a
              >
            </li>
          </ul>
        </div>
        <div class="col text-center">
          <h3>Contact</h3>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">
              
              <p><i class="fa-solid fa-location-dot"></i> 44240 La Chapelle-sur-Erdre</p>
            </li>
            <li class="nav-item mb-2">
              
              <p><i class="fa-solid fa-phone" id="phone-footer"></i> 06 42 00 66 77</p>
            </li>
            <li class="nav-item mb-2">
              <p><i class="fa-solid fa-envelope" id="envelope-footer"> </i> <a href="mailto:contact@jardica.net">contact@jardica.net</a></p>
            </li>
          </ul>
        </div>
        <div class="col text-center">
          <h3>Restez connecté !</h3>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">
              <p><a href="https://www.facebook.com/JardinierChapellesurerdre" target="_blank" class="nav-link p-0 text-muted"
                ><i class="fa-brands fa-facebook-square"></i
              > Facebook</a></p>
            </li>
            <li class="nav-item mb-2">
              <p><a href="https://www.leboncoin.fr/profil/0a92a70d-8c13-4241-9c18-25cd8a1bebaa/offres" target="_blank" class="nav-link p-0 text-muted">
                <i class="fa-solid fa-shop"></i>
              Location de matériel</a></p>
            </li>
            <li class="nav-item mb-2">
              <p><a href="https://www.google.com/maps/place/Jardi'CA/@47.3032138,-1.5463036,15z/data=!4m5!3m4!1s0x0:0x1eaa6899f9bc8382!8m2!3d47.3032138!4d-1.5463036" target="_blank" class="nav-link p-0 text-muted">
                <i class="fa-brands fa-google"></i>
               Google Buisness</a></p>
            </li>
          </ul>
        </div>
        <div class="justify-content-between py-4 my-4 border-top">
          <p class="text-center">© 2022 Jardi CA, tous droits réservés.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- SCRIPTS -->

  <!-- Lottie files script -->
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

  <!-- Form script -->
  <script src="/app.js"></script>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>
    
<!-- Map Script -->

<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoiZGFsZ2Fyb3MiLCJhIjoiY2t4OW5udDg3MTE3aTJ1bW42ZmthbWd4NSJ9.zv3nSQDhyH5aLFsMnw2jww';
const map = new mapboxgl.Map({
    container: 'map', // container ID
    style: 'mapbox://styles/mapbox/streets-v11', // style URL
    center: [-1.551807, 47.298485], // starting position [lng, lat]
    zoom: 9.5 // starting zoom
  });
  
  map.on('load', () => {
  // Add a data source containing GeoJSON data.
  map.addSource('maine', {
  'type': 'geojson',
  'data': {
    'type': 'Feature',
    'geometry': {
      'type': 'Polygon',
      // These coordinates outline Maine.
      'coordinates': [
        [
          [-1.597711, 47.333608],
          [-1.592475, 47.328954],
          [-1.593334, 47.327151],
          [-1.588956, 47.324009],
          [-1.585748, 47.317961],
          [-1.586361, 47.314570],
          [-1.587790, 47.314155],
          [-1.584626, 47.312978],
          [-1.584728, 47.312425],
          [-1.584626, 47.312494],
          [-1.584013, 47.312148],
          [-1.584217, 47.311733],
          [-1.582176, 47.311387],
          [-1.581359, 47.311456],
          [-1.580951, 47.309726],
          [-1.581359, 47.309034],
          [-1.580645, 47.308203],
          [-1.579114, 47.308065],
          [-1.578297, 47.307165],
          [-1.579624, 47.303912],
          [-1.585646, 47.298374],
          [-1.585136, 47.295744],
          [-1.584115, 47.294913],
          [-1.585340, 47.293183],
          [-1.585136, 47.292352],
          [-1.586846, 47.284004],
          [-1.585867, 47.278164],
          [-1.583960, 47.272987],
          [-1.568132, 47.271612],
          [-1.564624, 47.269668],
          [-1.563079, 47.269610],
          [-1.562736, 47.269843],
          [-1.562307, 47.269901],
          [-1.559475, 47.270134],
          [-1.558574, 47.269305],
          [-1.558917, 47.265694],
          [-1.555141, 47.264179],
          [-1.555141, 47.261383],
          [-1.553253, 47.258471],
          [-1.550849, 47.257539],
          [-1.551021, 47.256840],
          [-1.548789, 47.256257],
          [-1.544498, 47.256141],
          [-1.540132, 47.255145],
          [-1.535669, 47.259106],
          [-1.538072, 47.265630],
          [-1.527429, 47.277511],
          [-1.526770, 47.283836],
          [-1.532950, 47.291521],
          [-1.532264, 47.295014],
          [-1.532435, 47.297342],
          [-1.529002, 47.303046],
          [-1.531062, 47.305374],
          [-1.531062, 47.308866],
          [-1.534323, 47.312940],
          [-1.537585, 47.314919],
          [-1.542392, 47.315850],
          [-1.543078, 47.318061],
          [-1.540503, 47.319108],
          [-1.542907, 47.327486],
          [-1.546168, 47.329231],
          [-1.547556, 47.333834],
          [-1.552543, 47.335221],
          [-1.553986, 47.338058],
          [-1.557595, 47.338645],
          [-1.558461, 47.340210],
          [-1.560482, 47.340895],
          [-1.560915, 47.342166],
          [-1.563802, 47.344709],
          [-1.563658, 47.347252],
          [-1.565534, 47.347937],
          [-1.566833, 47.351164],
          [-1.571886, 47.352436],
          [-1.572174, 47.352827],
          [-1.574195, 47.353316],
          [-1.574917, 47.349991],
          [-1.597711, 47.333608]
        ]
      ]
    }
  }
});
 
// Add a new layer to visualize the polygon.
map.addLayer({
  'id': 'lcse',
  'type': 'fill',
  'source': 'maine', // reference the data source
  'layout': {},
  'paint': {
    'fill-color': '#698020', // blue color fill
    'fill-opacity': 0.2
  }
});
// Add a black outline around the polygon.
map.addLayer({
  'id': 'outline',
  'type': 'line',
  'source': 'maine',
  'layout': {},
  'paint': {
    'line-color': '#000',
    'line-width': 3
    }
  });
});

  </script>

</body>
</html>

<?php

unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);

?>