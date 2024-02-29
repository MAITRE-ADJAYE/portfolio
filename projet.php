<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Serif%3A400%2C700"/>
    <link rel="stylesheet" href="./styles/menu.css"/>
    <link rel="stylesheet" href="./styles/acceuil.css"/>
    <link rel="stylesheet" href="./styles/a_propos_de_moi.css"/>
    <link rel="stylesheet" href="./styles/contact.css"/>
    <link rel="stylesheet" href="./styles/logo.css"/>
    <link rel="stylesheet" href="./styles/projet.css"/>
</head>
<body>
    <header class="group-header">
        <?php include("logo.php");?>    
        <?php include("menu.php");?>   
    </header>

    <div class="image-acceuil">
        <p class="mot-bienvenue">
            Travaux Réalisés
        </p>
    </div>
    <div class="section_projet">
        <div class="projet_contenair">
            <img class="projet_image" src="images/maquette_figma.png" alt="projet_portfolio">
            <p class="projet_titre">
                Maquette de mon portfolio
            </p>
        </div>

        <div class="projet_contenair">
            <img class="projet_image" src="images/maquette_fablab.png" alt="projet_portfolio">
            <p class="projet_titre">
                Maquette du site Fablab Moanda
            </p>
        </div>

        <div class="projet_contenair">
            <img class="projet_image" src="images/mon_site.png" alt="projet_portfolio">
            <p class="projet_titre">
                Réalisation de mon site Portfolio
            </p>
        </div>
        <div class= "bloc-de-separation"></div>
    </div>
    <footer>
        <?php include("contact.php");?>
    </footer>
</body>

</html>