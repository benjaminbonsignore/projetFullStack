@extends('layouts.app')

@section('content')
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title rel="shortcut icon" type="images/x-icon" href="../img/autre/logo.png">iphone-DTA</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-----------------NavBar--------------->
<div class="top-bar">
<div class="top-bar-left">
    
        <ul class="menu menu-hover-lines">
            <li><a href="ecommerce.php">Accueil</a></li>
            <li><a href="contact.php">inscription/connexion</a></li>
            <li><a href="service.php">Nos Services</a></li>
            <li><a href="#">Catégorie</a></li>

            <li><a href="panier/index.php">Panier</a></li>
        </ul>
    
</div>
    
<input type="search" name="search" placeholder="recherche" class="animated-search-form">
    </div>
    
    <div class="hero-section">
    
        <div class="hero-section-text">
                <h1>NOS SERVICES</h1>
        </div>
    
</div>
<!-----------------NavBar---------------> 
    <div class="texte">
    <h3>Nous réunissons des personnes d’exception pour réaliser des choses exceptionnelles.</h3>
        <p>Nous aimons réfléchir et agir, chacun à notre manière, pour constamment réinventer nos produits et nos pratiques afin d’aider les gens à vivre leurs passions de façon inédite. Cette innovation nous est inspirée par notre volonté commune de réaliser un travail de qualité, et par notre esprit d’équipe. Car ici, apprendre de ses collègues, c’est apprendre auprès des meilleurs.</p>
    </div>
    
    <div class="texte">
    <h3>Venez travailler là où toutes les phrases commencent par « Et si… ? »</h3>
        <p>Ici, nous sommes tous des innovateurs ou nous en avons le potentiel. C’est ce qui nous permet de concevoir des produits et des expériences que peu de gens peuvent imaginer. Par exemple, certains de nos ingénieurs ont mis au point des canevas logiciels qui ont transformé la recherche médicale, devenue plus rapide et plus précise. D’autres ont imaginé des dispositifs pour aider les personnes en fauteuil roulant à être en meilleure forme en suivant leur activité sur l’Apple Watch. En repensant l’intégralité de l’expérience client, nos équipes Retail ont révolutionné le secteur. Et tous les jours à l’heure du déjeuner, la boîte à pizza écologique brevetée par l’un des cuisiniers de notre café nous rappelle que chacun chez Apple, quel que soit son rôle, peut être l’artisan d’une innovation.</p>
    </div>
    
    <footer class="responsive-blog-footer">
  <div class="row">
    <div class="medium-8 columns small-order-2 medium-order-1 about-container">
      <div class="row">
        <div class="hide-for-small-only medium-4 columns about-section">
          <img src="img/ipad/6505323lpw-6505622-article-apple-iphone-education-scolaire-jpg_3977091_660x281.jpg">
        </div>
        <div class="medium-8 columns about-section">
          <h4> À propos de nous</h4>
          <p>Ici, nous sommes tous des innovateurs ou nous en avons le potentiel. C’est ce qui nous permet de concevoir des produits et des expériences que peu de gens peuvent imaginer. Par exemple, certains de nos ingénieurs ont mis au point des canevas logiciels qui ont transformé la recherche médicale, devenue plus rapide et plus précise. D’autres ont imaginé des dispositifs pour aider les personnes en fauteuil roulant à être en meilleure forme en suivant leur activité sur l’Apple Watch. En repensant l’intégralité de l’expérience client, nos équipes Retail ont révolutionné le secteur.</p>
        </div>
      </div>
    </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
@endsection
