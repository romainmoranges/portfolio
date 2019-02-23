<?php include 'header.php'; 
$reqItem = $bdd->prepare('SELECT `titre`, `resume`, `image`, `libelle_cat`, `url` FROM items i INNER JOIN categories c ON i.id_cat = c.id_cat WHERE i.id_item= :id_item');
$reqItem->bindValue(':id_item', $_GET['id_item']);
$reqItem->execute();

$item = $reqItem->fetchAll(PDO::FETCH_OBJ);

$input = $item[0]->libelle_cat;
switch ($input) {
    case 'Développement':
        $class = 'developpement';
        break;
    case 'Intégration':
        $class = 'integration';
        break;
    case 'Infographie':
        $class = "infographie";
        break;
    case 'Communication':
        $class = 'communication';
        break;
}

?>
<section id="projet" class="<?= $class ?>">
    <div class="inner">
        <a href="/#portfolio">
            < Retour</a> 
            <h1>
                <?= $item[0]->titre; ?>
                </h1>

                <p>
                    <?= nl2br($item[0]->resume); ?>
                </p>

                <?php 
if(!empty($item[0]->image)){
    echo '<div class="project-img"><img src="' . $item[0]->image . '"/></div>';
}

if ($item[0]->libelle_cat == 'Développement' || $item[0]->libelle_cat == 'Intégration' ) {
    echo '<p>Vous pouvez visiter <b><a href="' . $item[0]->url . '">ma page Github                    <svg class="svgicon">
    <use xlink:href="#github"></use>
</svg></a></b> pour retrouver les sources de ce projet !</p> ';
} else {
    if (!empty($item[0]->url)) {
    echo '<p>Vous pouvez consulter ce document <b><a target="_blank" rel="noopener noreferrer" href="' . $item[0]->url . '"> à cette adresse</a></b>';
    }
}
?>
    </div>
</section>


<?php 
include 'footer.php';
?>