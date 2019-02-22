<?php include 'header.php'; 
$reqItem = $bdd->prepare('SELECT `titre`, `resume`, `image`, `libelle_cat` FROM items i INNER JOIN categories c ON i.id_cat = c.id_cat WHERE i.id_item= :id_item');
$reqItem->bindValue(':id_item', $_GET['id_item']);
$reqItem->execute();

$item = $reqItem->fetchAll(PDO::FETCH_OBJ);
?>
<section id="projet">
    <div class="inner">
        <a href="/#portfolio">
            < Retour</a> 
            <h1>
                <?= $item[0]->titre ?>
                </h1>

                <p>
                    <?= $item[0]->resume ?>
                </p>

                <?php 
if(!empty($item[0]->image)){
    echo '<div class="project-img"><img src="./img/portfolio/' . $item[0]->image . '"/></div>';
}

if ($item[0]->libelle_cat == 'Développement' || $item[0]->libelle_cat == 'Intégration' ) {
    echo '<p>Vous pouvez visiter <b><a href="https://github.com/romainmoranges">ma page Github                    <svg class="svgicon">
    <use xlink:href="#github"></use>
</svg></a></b> pour retrouver les sources de mes projets !</p> ';
}
?>
    </div>
</section>


<?php 
include 'footer.php';
?>