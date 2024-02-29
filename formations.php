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
    <link rel="stylesheet" href="./styles/formations.css"/>

</head>
<body>
    <header class="group-header">
        <?php include("logo.php");?>    
        <?php include("menu.php");?>   
    </header>

    <div class="image-acceuil">
        <p class="mot-bienvenue">
            FORMATIONS
        </p>
    </div>
    
    <div class="section_formation">
        <div class="formation_contenair">
            <img class="formation_image-1" src="images/logo_fablab.png" alt="projet_portfolio">
            <p class="formation_titre">
                Fablab Moanda
                <br>DEV WEB/MOBILE
            </p>
        </div>

        <div class="formation_contenair">
            <img class="formation_image-2" src="images/canalplus.png" alt="projet_portfolio">
            <p class="formation_titre">
                Canal Academy
                <br>Spécialiste des systèmes de réception Ku,C
            </p>
        </div>

        <div class="formation_contenair">
            <img class="formation_image-2" src="images/ltob.jpg "alt="projet_portfolio">
            <p class="formation_titre">
                Lycée Technique Omar Bongo
                <br>Electromécanicien
            </p>
        </div>
        <div class= "bloc-de-separation"></div>
    </div>
    <footer>
        <?php include("contact.php");?>

    </footer>
</body>

</html>