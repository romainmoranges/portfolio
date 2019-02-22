<?php 

define('HOST', 'localhost');
define('DB_NAME', 'portfolio');
define('USER', 'root');
define('PASS', '');

function getDB(){
    $bdd = false;
    try{
        $bdd = new PDO(
            'mysql:host='.HOST.';dbname='.DB_NAME.';charset=utf8',
            USER,
            PASS
        );
    }catch(Exception $e){
        var_dump($e);
    }
    return $bdd;
}

$bdd = getDB();

/* functions */

function display_items($item) {
    return '
    <a href="/item.php?id_item=' . $item['id_item'] . '" >
        <article class="item">
            <div class="item-head">
                <h3>' . $item['titre'] .'</h3>
                <h4>' . $item['libelle_cat']. '</h4>
            </div>
            <div class="item-content">
                <p>' . implode(' ', array_slice(explode(' ', $item['resume']), 0, 15)) . '...</p>
            </div>
        </article>
    </a>';
}