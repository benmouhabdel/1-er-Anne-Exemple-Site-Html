<?php
require 'connection.php';  // Assuming this file handles database connection

if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn,"SELECT * FROM 'tb_user' WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
}
    else{
        header("Location: login.php");
    
    }

?>







<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Test cv <?php echo $row ["name"];?> </title>
</head>
<body>
  <div class="profile">
    <nav>
      <img src="images.png" class="logo1">
      <ul>
        <li><a href="#accueil">Accueil</a></li>
        <li><a href="#accueil">Histoire</a></li>
        <li><a href="#boutique">Boutique</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="logout.php">logout</a></li>
      </ul>
      <img src="batman2.jpg" class="logo" onclick="toggleMenu()">
      <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
          <div class="u-info">
            <img src="batman2.jpg" class="logo">
            <h2>Menu :</h2>
          </div>
          <h3></h3>
          <a href="joker" class="sub-menu-wrap-link">
            <p>joker</p>
            <span></span>
          </a>
          <a href="superman" class="sub-menu-wrap-link">
            <p>superman</p>
            <span></span>
          </a>
          <a href="robin" class="sub-menu-wrap-link">
            <p>robin</p>
            <span></span>
          </a>
          <a href="pain" class="sub-menu-wrap-link">
            <p>pain</p>
            <span></span>
          </a>
        </div>
      </div>
    </nav>
  </div>
        <h1><br></h1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
        <section class="text" id="accueil">
        <h3><br></h3>
        <h1>  <span class="auto-typing"></span> est la : </h1>
        <p>bienvenu a vous tous dans notre site, <br>
         ici nous sommes dans un envirenement authentique et  sain nous souhaitant que vous trouvez votre solution de vie parmis nous.<br>
        nos produit sont d une qualité authentique et qui fascine le monde autour qui les etulisent. En chemin vers notre destin .    </p>
        
        <a href="histoir"> notre histoir: </a><br>
        <t> Dans les ténèbres de Gotham City, où la pègre règne et la corruption gangrène les institutions, une silhouette se dresse, un symbole de vengeance et d'espoir : Batman. <br>
        Batman n'est pas un super-héros ordinaire. Il est un symbole, une inspiration pour tous ceux qui luttent contre l'injustice. Sa croisade solitaire contre le crime est un phare dans la nuit, un rappel que même dans les ténèbres les plus profondes, l'espoir ne meurt jamais.  </t>
            
        <z></z>
         
    </section>
        <body2>
    <section1 id="boutique">
        <h2><br><br>
            la boutique:<br><br> nouvelle collection :</h2>
        <ul>
            <li>
                <img src="j1.jpg" alt="Produit 1">
                <h3>DC COMICS - FIGURINE - BATMAN - BATMAN GRIS REBIRTH 30CM </h3>
                <p>gotham est vide sans moi</p>
                <a href="#">xxxxx€</a>
            </li>
            <li>
                <img src="j2.jpg" alt="Produit 2">
                <h3>DC COMICS - FIGURINE - BATMAN - BATMAN TECH 30CM</h3>
                <p>gotham est en danger ou le detective criminel et notre hero pour y resoudre le crime</p><br>
                <a href="#">xxxxx€</a>
            </li>
            <li>
                <img src="j3.jpg" alt="Produit 3">
                <h3>Figurine Batman Basique The Batman Le Film 10 cm Noir </h3>
                <p> Batmobile est prete pour abattre </p><br><br><br>
                <a href="#">xxxxx€</a>
            </li>
             <li>
                <img src="images.jpg" alt="Produit 4">
                <h3>Figurine Mcfarlane - The Batman (2022) - Batman Version 2 - DC COMICS</h3>
                <p>Batmobile fera tout pour aider gotham de debarrasser le crime</p>
                <a href="#">xxxxx€</a>
            </li>
        </ul>
        </section1>
            </body2>
        
        <section2 id="heartless">
        <h2><br><br></h2>
        <ul>
            <li>
                <img src="12.jpg" alt="Produit 1">
                <h3>DC COMICS - BATMAN - DEGUISEMENT MASQUE DARK KNIGHT </h3>
                <p>gotham est vide sans moi</p>
                <a href="#">xxxxx€</a>
            </li>
            <li>
                <img src="13.jpg" alt="Produit 2">
                <h3>DC COMICS - FIGURINE - BATMAN - 30CM WING SUIT</h3>
                <p>gotham est en danger ou le detective criminel et notre hero pour y resoudre le crime</p><br>
                <a href="#">xxxxx€</a>
            </li>
            <li>
                <img src="14.jpg" alt="Produit 3">
                <h3> DC COMICS - FIGURINE - BATMAN - MCFARLANE 18 CM </h3>
                <p> Batmobile est prete pour abattre </p>
                <a href="#">xxxxx€</a>
            </li>
             <li>
                <img src="15.jpg" alt="Produit 4">
                <h3>LEGO®DC COMICS SUPER HEROES™ 76259 - LA FIGURINE DE BATMAN™ </h3>
                <p>Batmobile fera tout pour aider gotham de debarrasser le crime</p>
                <a href="#">xxxxx€</a>
            </li>
        </ul>
        </section2>
    
    <section2 id="peace">
        <h2><br><br></h2>
        <ul>
            <li>
                <img src="17.jpg" alt="Produit 1">
                <h3>DC COMICS - FIGURINE - BATMAN - 30CM</h3>
                <p>gotham est vide sans moi</p><br><br><br>
                <a href="#">xxxxx€</a>
            </li>
            <li>
                <img src="9.jpg" alt="Produit 2">
                <h3>DC COMICS - BATMAN - FIGURINE SERIE 10 - 30 CM</h3>
                <p>gotham est en danger ou le detective criminel et notre hero pour y resoudre le crime</p><br><br><br>
                <a href="#">xxxxx€</a>
            </li>
            <li>
                <img src="10.jpg" alt="Produit 3">
                <h3>DC COMICS BATMAN® - LAMPE FIGURINE </h3>
                <p> Batmobile est prete pour abattre </p>
                <a href="#">xxxxx€</a>
            </li>
             <li>
                <img src="11.jpg" alt="Produit 4">
                <h3>DC COMICS - FIGURINE - BATMAN - FIGURINE A FONCTIOn 30CM</h3>
                <p>Batmobile fera tout pour aider gotham de debarrasser le crime</p><br><br>
                <a href="#">xxxxx€</a>
            </li>
        </ul>
        </section2>
    
    <section2 id="love">
        <h2><br><br></h2>
        <ul>
            <li>
                <img src="2.jpg" alt="Produit 1">
                <h3>  DC COMICS - FIGURINE - BATMAN - S7 30CM </h3>
                <p>gotham est vide sans moi</p><br><br><br><br>
                <a href="#">xxxxx€</a>
            </li>
            <li>
                <img src="3.jpg" alt="Produit 2">
                <h3>DC COMICS - FIGURINE POP - BATMAN - BATMAN 1989</h3>
                <p>gotham est en danger ou le detective criminel et notre hero pour y resoudre le crime</p><br>
                <a href="#">xxxxx€</a>
            </li>
            <li>
                <img src="16.jpg" alt="Produit 3">
                <h3>DC COMICS - FIGURINE - BATMAN - S6 30CM</h3>
                <p> Batmobile est prete pour abattre </p><br><br><br><br>
                <a href="#">xxxxx€</a>
            </li>
             <li>
                <img src="18.jpg" alt="Produit 4">
                <h3>DC COMICS - VOITURE - 1:24 BATMOBILE THE BATMAN W -BATMAN FIGURE BLACK 2022 </h3>
                <p>Batmobile fera tout pour aider gotham de debarrasser le crime</p><br><br>
                <a href="#">xxxxx€</a>
            </li>
        </ul>
        </section2>
    <section2 id="pain">
        <h2><br><br></h2>
        <ul>
            <li>
                <img src="5.jpg" alt="Produit 1">
                <h3>Masque de vision nocturne Batman Spy Gear - Accessoire de déguisement </h3>
                <p>gotham est vide sans moi</p>
                <a href="#">xxxxx€</a>
            </li>
            <li>
                <img src="6.jpg" alt="Produit 2">
                <h3>BATMAN - Voiture Batmobile + Figurine Batman 30 cm - 6064628 </h3>
                <p>gotham est en danger ou le detective criminel et notre hero pour y resoudre le crime</p><br><br><br><br><br>
                <a href="#">xxxxx€</a>
            </li>
            <li>
                <img src="7.jpg" alt="Produit 3">
                <h3>Batman™ vs. Harley Quinn™ Lego 76220 - La Grande Récré </h3>
                <p> Batmobile est prete pour abattre </p><br><br>
                <a href="#">xxxxx€</a>
            </li>
             <li>
                <img src="8.jpg" alt="Produit 4">
                <h3>DC COMICS - VEHICULE - HOT WHEELS - BATMAN  </h3>
                <p>Batmobile fera tout pour aider gotham de debarrasser le crime</p><br><br>
                <a href="#">xxxxx€</a>
            </li>
        </ul>
        </section2>
    <br>
    <br><br><br><br><br><br><br>
        <section3 id="contact">
  <h2>Contactez-nous</h2>
  <z>N'hésitez pas à nous contacter pour toute question ou information.</z><br><br><br>

  <div class="coordonnees">
    <h3>Nos coordonnées :</h3>
    <ul>
      <li><i class="fa fa-phone"></i> Téléphone: +212 7 75 86 27 48</li>
      <li><i class="fa fa-envelope"></i> Email: contact@shifters.com</li>
      <li><i class="fa fa-map-marker"></i> Adresse: 12 Rue du Faubourg Saint-Honoré, 75008 Paris, France</li>
    </ul>
  </div>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="reseaux-sociaux">
    <h3>Suivez-nous sur les réseaux sociaux</h3>
      <li>
                <img src="cc.jpg" alt="instagram">
                <a href="#">XXXXXXXXXX</a>
            </li>
            <li>
                <img src="cc1.png" alt="twitter">
                <a href="#">XXXXXXXXXXX</a>
            </li>
            <li>
                <img src="cc2.png" alt="linkdin">
                <a href="#">XXXXXXXXXXX</a>
            </li>
  </div>
    </section3>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
        <ul>
        <p>abderrahman benmouh  &copy; shifters  - 2023</p><br>
        
            <li><a href="#">Mentions légales</a></li><br>
            <li><a href="#">Conditions générales de vente</a></li><br>
            <li><a href="#">Politique de confidentialité</a></li><br>
        </ul>
        </footer>
    
        <script>
        let subMenu = document.getElementById("subMenu");
            function toggleMenu(){
                subMenu.classList.toggle("open-menu");
            }
        </script>
        <div class="overlay"></div>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        let typed = new Typed('.auto-typing', {
            strings: ['batman','batman','batman','batman'],
            typeSpeed:  100,
            backSpeed:  100,
            loop: true,
            fadeOut: true,
            fadeOutClass: 'typed-fade-out',
            fadeOutDelay:  500
        });
    </script>
</body>
</html>
