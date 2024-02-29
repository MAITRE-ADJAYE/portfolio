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
</head>
<body>
    <header class="group-header">
    <?php include("logo.php");?>    
    <?php include("menu.php");?> 
    </header>

    <div class="image-acceuil">
        <p class="mot-bienvenue">
            BIENVENUE
            <br/>
            SUR MON PORTFOLIO
        </p>
    </div>


    <div class="presentation">
        
        <span class="paragraphe">
            Salut! Je suis 
            <br/>
            ADJAYE ADJAYE Luhonel
            <br/>
            Developpeur web
        </span>
        
        <div class="contenair_image_acceuil">
            <img class="presentation-image" src='./images/photo_acceuil.jpg'/>
        </div> 
    </div>
     
    <div class= "bloc-de-separation"></div>

    <div class="contenair_a_propos">
        <span class="a_propos_2">
            A PROPOS DE MOI
        </span>
    </div>
    

    <div class="propos-contenu">
        <p class="propos-1">
            Je m’appelle ADJAYA ADJAYE Luhonel, développeur Web en Formation au Fablab Moanda.
        </p>
        <p class="propos">
            Auparavant, j’ai effectué plusieurs années en tant que Maintenancier
            dans l’expertise technique de l'électricité Industriel ce qui m’a permis d’acquérir de très bonnes compétences telles que l’organisation, 
            l’écoute, le conseil ainsi que des qualités relationnelles importantes.
        </p>
        <p class="propos">
            J’ai profité de l’occasion d’effectuer une reconversion professionnelle dans le développement Web, domaine qui m’intéressait depuis de nombreuses années.
        </p>
    </div>

    <div class= "bloc-de-separation"></div>

    <footer id="contact">
    <?php include("contact.php");?>
    </footer>

</body>

</html>