<?php
    require('bdd.php');

    // Gestion d'un paramètre d'action
    $action = "liste";
    if ( isset($_GET['action'] )) {
        $action = $_GET['action'];
    }

    $liste_articles = db_select("select * from article as A order by A.date_publication desc");

    // Fonction qui renvoie les tags d'un article
    function get_tag_list($article_id) {
        $list = db_select("SELECT t.libelle, t.couleur FROM tag as t, article_tag as at WHERE at.tag_id = t.id AND at.article_id = $article_id order by t.libelle");
        $html_tag_list = "";
        foreach($list as $index => $tag) {
            $html_tag_list .= "<mark class='tag' style='color:" . $tag['couleur']. "'>" . $tag['libelle'] . "</mark>&nbsp;"; 
        }
        return $html_tag_list;
    }

    // Afficher la liste des derniers articles.
    if ($action == "liste") {
        $nb_article_line = 0;
        foreach($liste_articles as $index => $article) {
            if ($index == $nb_article_line) {
                $nb_article_line += 3;
                echo "<div class='row'>";
            }
?>
<!-- <div class="row"> -->
<div class="col-sm-4">
        <div class="card">
            <div class="section dark">
                <div class="tag-list">
                    <?php echo get_tag_list($article['id']); ?>
                </div>
                <h3><?php echo $article['titre']; ?></h3>
            </div>
            <div class="section">
                <p>
                    <?php echo $article['accroche']; ?>
                </p>
            </div>
             <div class="section actions">
                <button class=""><a href="?nav=index&action=detail&id=<?php echo $article['id']; ?>">Lire la suite...</a></button>
            </div>
 
        </div>
    </div>
<!-- </div> -->

<?php
            if ($index == $nb_article_line - 1 ) {
                echo "</div>";
            }
        }
} // Fin if action = liste
else { //action = detail
    $data_article = db_select("select * from article as A where A.id =" .  htmlentities($_GET['id']));
    // $data_article =  $data_article[0];
 ?>   
<div class="col-sm-12">
    <p class="tag-list">
        <?php echo get_tag_list($_GET['id']); ?>
    </p>
    <h2> <?php echo $data_article[0]['titre']; ?> </h2>
    <div class="accroche">
        <?php echo $data_article[0]['accroche']; ?>
    </div>
    <article>
        <?php echo $data_article[0]['texte']; ?>
    </article>
</div>

<?php 
} // Fin action = detail
?>