<?php include 'header.php'; ?>

<?php
 if(!empty($_POST['email'])) {
    $to      = 'romain.moranges@gmail.com';
    $message = $_POST['message'];
    $from = $_POST['email'];
    $objet = $_POST['objet'];
    $headers = 'From: '. $from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    mail($to, $objet, $message, $headers);
 }

?>
<div id="button">
    <svg class='svgicon'>
        <use xlink:href="#menu"></use>
    </svg>
</div>
<nav class='menu-mobile'>
    <a href='/'>
        <h1>Romain <br />Moranges</h1>
    </a>
    <ul class="main-nav">
        <li><a href="#accueil">Accueil</a></li>
        <li><a href="#apropos">A Propos</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#mecontacter">Me Contacter</a></li>
    </ul>
    <ul class="social-nav">
        <li><a href="https://www.linkedin.com/in/romain-moranges/">
                <svg class='svgicon'>
                    <use xlink:href="#linkedin"></use>
                </svg></a>
        </li>
        <li><a href="https://github.com/romainmoranges">
                <svg class='svgicon'>
                    <use xlink:href="#github"></use>
                </svg></a>
        </li>
        <li><a href="javascript:alert('Bientôt!')">
                <svg class='svgicon'>
                    <use xlink:href="#instagram"></use>
                </svg></a>
        </li>
        <p><a href="/mentionslegales.php">Mentions légales</a></p>
    </ul>

</nav>

<nav class='menu-desktop'>
    <a href='/'>
        <h1>Romain <br />Moranges</h1>
    </a>
    <ul class="main-nav">
        <li><a href="#accueil">Accueil</a></li>
        <li><a href="#apropos">A Propos</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#mecontacter">Me Contacter</a></li>
    </ul>
    <ul class="social-nav">
        <li>
            <a href="https://www.linkedin.com/in/romain-moranges/">
                <svg class='svgicon'>
                    <use xlink:href="#linkedin"></use>
                </svg>
            </a>
        </li>
        <li>
            <a href="https://github.com/romainmoranges">
                <svg class='svgicon'>
                    <use xlink:href="#github"></use>
                </svg>
            </a>
        </li>
        <li>
            <a href="javascript:alert('Bientôt!')">
                <svg class='svgicon'>
                    <use xlink:href="#instagram"></use>
                </svg>
            </a>
        </li>
        <p><a href="/mentionslegales.php">Mentions légales</a></p>
    </ul>

</nav>

<section id="accueil">
    <div class="inner">
        <h2>Accueil</h2>
        <p>
            Bienvenue, je suis Romain Moranges!</p>
        <p>Je suis étudiant à l'université Aix-Marseille, en Licence Professionnelle <span>Mobile Internet Webaster</span>,
            formant des <span>développeurs
                web</span>. Ici j'apprends les compétences nécessaires pour exercer le métier de développeur.
        </p>
        <p>Dans la continuité de ma démarche, <span>je suis à la recherche d'un stage!</span> D'une durée d'au moins 12
            semaines, il me permettra d'affiner mes connaissances et de m'apporter une expérience au sein d'un
            groupe. Je souhaite aussi apréhender des domaines sortant quelque peu de ma zone de confort, étant
            particulièrement intéressé par <span>l'IoT.</span>
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
            me diriger vers un <span>DUT Métiers du Multimédia et de l'Internet</span>, que j'ai décroché en 2018.
            Là bas, j'ai pu en savoir
            plus sur les différents métiers liés à la création numérique, comme l'infographie, l'audiovisuel ou la
            création de site web. Après un certain temps de réflexion, j'ai choisi de suivre cette dernière voie:
            le développement web. <a target="_blank" rel="noopener noreferrer" href="img/cv/cv2019.pdf"><span>Vous pouvez retrouver mon CV en téléchargement ici</a><span>.</p>
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
                <li><a href="/#portfolio">Tous</a></li>
                <?php
                        
                        $req = $bdd->prepare('SELECT * FROM `categories`');
                        $req->execute();
                        $cats = $req->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($cats as $cat) {
                            echo '<li><a href="?id_cat=' . $cat['id_cat'] . '#portfolio">'. $cat['libelle_cat'] . '</a></li>';
                        }

                        $req->closeCursor();
                    ?>
            </ul>
        </nav>


        <?php 
            $reqItems = $bdd->prepare('SELECT `id_item`, `titre`, `resume`, `image`, `libelle_cat`FROM items i INNER JOIN categories c ON i.id_cat = c.id_cat WHERE i.id_cat = :id_cat');
            // var_dump($_GET);
            // die;
            if (!empty($_GET)){
                switch ($_GET['id_cat']) {
                    case 1:
                    $reqItems->bindValue(':id_cat', 1);
                    $reqItems->execute();
                    $items = $reqItems->fetchAll(PDO::FETCH_ASSOC);
                    foreach($items as $item) {
                        echo display_items($item);
                        
                    }
                    break;
                    case 3:
                    $reqItems->bindValue(':id_cat', 3);
                    $reqItems->execute();
                    $items = $reqItems->fetchAll(PDO::FETCH_ASSOC);
                    // var_dump($items);
                    // die;
                    foreach($items as $item) {
                        echo display_items($item);
                    }
                    break;
                    case 5:
                    $reqItems->bindValue(':id_cat', 5);
                    $reqItems->execute();
                    $items = $reqItems->fetchAll(PDO::FETCH_ASSOC);
                    // var_dump($items);
                    // die;
                    foreach($items as $item) {
                        echo display_items($item);
                    }
                    break;
                    case 7:
                    $reqItems->bindValue(':id_cat', 7);
                    $reqItems->execute();
                    $items = $reqItems->fetchAll(PDO::FETCH_ASSOC);
                    // var_dump($items);
                    // die;
                    foreach($items as $item) {
                        echo display_items($item);
                    }
                    break;
                } 
            } else {
                $reqItems = $bdd->prepare('SELECT `id_item`, `titre`, `resume`, `image`, `libelle_cat`FROM items i INNER JOIN categories c ON i.id_cat = c.id_cat ');
                $reqItems->execute();
                $items = $reqItems->fetchAll(PDO::FETCH_ASSOC);
                foreach($items as $item) {
                    echo display_items($item);
                }

            $reqItems->closeCursor();
            }
            ?>

    </div>


</section>

<section id="mecontacter">
    <div class="inner">
        <h2>Me Contacter</h2>
        <p>Vous pouvez me contacter par mail à l'aide du formulaire suivant:</p>
        <div class="contact">
            <form action="/#mecontacter" method="post">
                <label for="objet">
                    <h4>Objet</h4>
                    <input id="objet" type="text" name="objet" placeholder="Objet..." required>
                </label>
                <label for="email">
                    <h4>Email</h4>
                    <input id="email" type="email" name="email"placeholder="Votre mail..." required>
                </label>
                <label for="message">
                    <h4>Message</h4>
                    <textarea name="message" id="message" rows="10" placeholder="Ecrivez votre message..." required></textarea>
                </label>

                <h4><input class='submit' type="submit" value="Envoyer le message"></h4>

            </form>
            <div>
                <h4>Téléphone:</h4>
                <p><a href="tel:0667898129">06-67-89-81-29</a></p>

                <h4>Adresse:</h4>
                <p>Route d'Orcival <br>Pont des Eaux <br> 63210 Nébouzat</p>
                <?php if (!empty($_POST['email'])) {
                        echo '<h4>Votre mail a été envoyé avec succès! </h4>';
                }
                ?>
            </div>
        </div>


</section>

<?php include 'footer.php'; ?>