<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document de base</title>
</head>

<body>

    <div class='svgsprite'>
        <?php include './img/sprite_symbol_pictos.svg' ?>
    </div>

    <div id="button"> 
        <svg class='svgicon'>
            <use xlink:href="#menu"></use>
        </svg> </div>
    <nav>
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
        <h2>Accueil</h2>
        <p class="accueil">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit blanditiis, natus laborum
            voluptatibus mollitia iusto deleniti culpa repellendus officiis ratione explicabo nam odio, ipsam libero
            aliquid magni facere? Alias, distinctio.</p>
    </section>

    <section id="apropos">
        <h2>A Propos</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit blanditiis, natus laborum
            voluptatibus mollitia iusto deleniti culpa repellendus officiis ratione explicabo nam odio, ipsam libero
            aliquid magni facere? Alias, distinctio.</p>

    </section>

    <section id="portfolio">
        <h2>Portfolio</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit blanditiis, natus laborum
            voluptatibus mollitia iusto deleniti culpa repellendus officiis ratione explicabo nam odio, ipsam libero
            aliquid magni facere? Alias, distinctio.</p>


    </section>

    <section id="mecontacter">
        <h2>Me Contacter</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit blanditiis, natus laborum
            voluptatibus mollitia iusto deleniti culpa repellendus officiis ratione explicabo nam odio, ipsam libero
            aliquid magni facere? Alias, distinctio.</p>


    </section>

    <script src="./js/script.js"></script>

</body>

</html>