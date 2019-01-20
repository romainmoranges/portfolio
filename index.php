<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Portfolio</title>
</head>

<body>

    <div class='svgsprite'>
        <?php include './img/sprite_symbol_pictos.svg' ?>
    </div>

    <div id="button">
        <svg class='svgicon'>
            <use xlink:href="#menu"></use>
        </svg> </div>
    <nav class='menu-mobile'>
        <h1>Romain <br />Moranges</h1>
        <ul class="main-nav">
            <li><a href="#accueil">Accueil</a></li>
            <li><a href="#apropos">A Propos</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#mecontacter">Me Contacter</a></li>
        </ul>
        <ul class="social-nav">
            <li>
                <a href="#">
                    <svg class='svgicon'>
                        <use xlink:href="#linkedin"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="#">
                    <svg class='svgicon'>
                        <use xlink:href="#github"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="#">
                    <svg class='svgicon'>
                        <use xlink:href="#twitter"></use>
                    </svg>
                </a>
            </li>
            <p><a href="#">Mentions légales</a></p>
        </ul>

    </nav>

    <section id="accueil">
        <div class="inner">
            <h2>Accueil</h2>
            <p class="accueil">
                Bienvenue, je suis Romain Moranges!</p>
            <p>Je suis étudiant à l'université Aix-Marseille, en Licence Professionnelle MIW, formant des développeurs
                web. Ici j'apprends les compétences nécessaires pour exercer convenablement le métier de développeur.
            </p>
            <p>Dans la continuité de ma démarche, je suis à la recherche d'un stage! D'une durée d'au moins 12
                semaines, il me permettra d'affiner mes connaissances et de m'apporter une expérience au sein d'un
                groupe. Je souhaite aussi apréhender des domaines sortant quelque peu de ma zone de confort.
            </p>

        </div>
    </section>

    <section id="apropos">
        <div class="inner">
            <h2>A Propos</h2>
            <p>Depuis jeune, le monde du numérique m'attire. Dès lors que j'ai eu accès à internet, la multiplicité des
                possibilité m'a passionné. De la musique au jeu vidéo en passant par le cinéma, il est possible de tout
                découvrir!</p>
            <p>Ainsi, après l'obtention de mon <span>baccalauréat économique et social</span> en 2016, j'ai décidé de
                me diriger vers un <span>DUT Métiers du Multimédia et de l'Internet</span>. Là bas, j'ai pu en savoir
                plus sur les différents métiers liés à la création numérique, comme l'infographie, l'audiovisuel ou la
                création de site web. Après un certain temps de réflexion, j'ai choisi de suivre cette dernière voie:
                le développement web. Vous pouvez retrouver mon CV en téléchargement <a href="#">ici</a>.</p>
            <p>C'est un domaine où la rigueur est de mise! Pas de place à l'improvisation. Il s'agit d'être précis et
                organisé dans sa méthode. Ce qui m'attire le plus ici, c'est l'envergure de la courbe de progression:
                il est presque impossible de ne plus rien avoir à apprendre.
        </div>
    </section>

    <section id="portfolio">
        <div class="inner">
            <h2>Portfolio</h2>
            <nav class="categories">
                <ul>
                    <li><a href="#">Tous</a></li>
                    <li><a href="#">Web</a></li>
                    <li><a href="#">Print</a></li>
                    <li><a href="#">Design</a></li>
                </ul>
            </nav>

            <article class="item">
                <h3>Setty Home</h3>

                <p class="description-projet">SettyHome est une projet de Webdesign réalisé durant la licence pro MIW.
                    Il s'agissait de créer un site web et une application pour SettyHome, une entreprise proposant
                    l'installation ou l'amménagement de systèmes domotiques</p>
                <p class="more">
                    <svg class='svgicon'>
                        <use xlink:href="#plus"></use>
                    </svg>
                </p>
                <div class="img-projet">
                    <div class="img"><img src="./img/portfolio/webdesign/home.jpg" alt="Page Home de l'app"></div>
                    <div class="img"><img src="./img/portfolio/webdesign/pageOuverte.jpg" alt="Page ouverte de l'app"></div>
                    <div class="img"><img src="./img/portfolio/webdesign/feature_Videosurveillance.jpg" alt="Feature particulière de l'app"></div>
                </div>
            </article>
        </div>


    </section>

    <section id="mecontacter">
        <div class="inner">
            <h2>Me Contacter</h2>
            <p>Vous pouvez me contacter par mail grâce au formulaire suivant:</p>
            <form action="">
                <label for="nom">
                    <h4>Nom</h4>
                    <input type="text" placeholder="Votre nom...">
                </label>
                <label for="email">
                    <h4>Email</h4>
                    <input type="email" placeholder="Votre mail...">
                </label>
                <label for="message">
                    <h4>Message</h4>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Ecrivez votre message..."></textarea>
                </label>

                <input type="button" value="Envoyer le message">

            </form>


    </section>

    <script src="./js/script.js"></script>

</body>

</html>