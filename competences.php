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
        <link rel="stylesheet" href="./styles/competences.css"/>
    </head>
    <body>
        <header class="group-header">
            <?php include("logo.php");?>    
            <?php include("menu.php");?>   
        </header>

        <div class="image-acceuil">
            <p class="mot-bienvenue">
                COMPETENCES
            </p>
        </div>

        <div class="section_competences">
            <div class="competence_contenair">
                <p class="competence_titre">
                    1.Mise en place environment de traveil DEV
                </p>
                
                <ul class= "competences_liste">
                    <li>Installation d'un système OS</li>
                    <li>Installation d'IDE</li>
                    <li>Versionning de code Gestion (Git et Github)  </li>
                    <li>Utilisation d'outils de Gestion de Projet:Jira,Trello</li>
                    <li>Utilisation d'outils Bureautique</li>
                </ul>
                
            </div>

            <div class="competence_contenair">
                <p class="competence_titre">
                    2.Maquettage d'application Web et Mobile
                </p>
                
                <ul class= "competences_liste">
                    <li>Adobe XD</li>
                    <li>Figma</li>
                </ul>
                
            </div>

            <div class="competence_contenair">
                <p class="competence_titre">
                    3.Langae de Programmation
                </p>
            <div class="competences_3">
                <ul class= "competences_liste">
                    <li>jQuery</li>
                    <li>Bootstrap</li>
                    <li>ANGULARRJS</li>
                    <li>Node</li>
                </ul>
                <ul class="competences_progra">
                    <li>Vue.js</li>
                    <li>Spring Boot</li>
                    <li>Laravel</li>
                    <li>WordPress</li> 
                </ul>
            </div>
            </div>

            <div class="competence_contenair">
                <p class="competence_titre">
                    4.Réalisation de Site Web Statique et Dynamique
                    <br>Framework
                </p>
            <div class="competences_liste2">
                <ul class= "competences_liste">
                    <li>CSS</li>
                    <li>html</li>
                    <li>JavaScript</li>
                </ul>
                <ul>
                    <li>Python</li>
                    <li>C++</li>
                    <li>Java</li>
                    <li>C#</li>
                </ul>
            </div>
            </div>

            <div class="competence_contenair">
                <p class="competence_titre">
                    5.Concevoir et déployer une Base de donnée SQL et NoSQL
                </p>
                
                <ul class= "competences_liste">
                    <li>MySQL</li>
                    <li>MongoDB</li>
                </ul>
                
            </div>

            <div class="competence_contenair">
                <p class="competence_titre">
                    6.Réalisation une application Mobile
                </p>
                
                <ul class= "competences_liste">
                    <li>Flutter</li>
                    <li>Dart</li>
                </ul>
                
            </div>
            <div class="competence_contenair">
                <p class="competence_titre">
                    7.Assurer l'intégration et le deployement continu d'une Application Web
                </p>
                
                <ul class= "competences_liste">
                    <li>GitLab</li>
                    <li>jenkins</li>
                </ul>   
            </div>
            <div class="competence_contenair">
                <p class="competence_titre">
                    8.Deocumenter le deployement d'une App Web et Mobile
                </p>
                
                <ul class= "competences_liste">
                    <li>GitLab</li>
                    <li>jenkins</li>
                </ul> 
            </div>

        </div>
        
        <div class= "bloc-de-separation"></div>
    
    <footer>
        <?php include("contact.php");?>
    </footer>
</body>

</html>