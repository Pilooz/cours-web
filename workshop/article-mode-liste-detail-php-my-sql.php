<div class='row'>
    <?php
    require('bdd.php');    

    // Gestion d'un paramètre de navigation
    $action = "liste";
    if (isset( $_GET["action"])) {
        $action = $_GET["action"];
    }

    // Liste de tous les articles
    $liste_article = db_select("select * from article a ORDER BY a.date_publication DESC");

    // Fonction qui renvoie la liste des tags pour un article donné
    function get_tag_list($article_id) {
        $tag_list = "";
        $list =  db_select("SELECT t.libelle FROM article_tag at, tag t WHERE at.tag_id = t.id AND at.article_id = $article_id ORDER by t.libelle ASC");
        foreach( $list as $k => $tag) {
            $tag_list .= "<mark class='tag'>" . $tag["libelle"] . "</mark>&nbsp;";
        }
        return $tag_list;
    }

    if ($action == "liste") {
        foreach ($liste_article as $index => $article) {
?>
    <div class="col-sm-4">
        <div class="card">
            <div class="section dark">
                <div class="tag-list">
                    <?php echo get_tag_list($article['id']) ?>
                </div>
                <h3><?php echo $article['titre']; ?></h3>
            </div>
            <div class="section">
                <p>
                <?php echo $article['accroche']; ?>
                </p>
            </div>
            <div class="section actions">
                <button class=""><a href="?nav=index&action=detail&id=<?php echo $article['id']; ?>"><span class="icon-info"></span>&nbsp;Lire la suite...</a></button>
            </div>
        </div>  
    </div>
    
<?php
            if ($index == 2 || $index == 5) {
                echo "</div>\n";
                echo"<div class='row'>\n"; 
            }
        }
?>

<?php 
    } // Fin if
    else { // Ici $action == "detail"
        $data_article = db_select("select * from article a WHERE a.id = " . htmlentities($_GET['id']));
        $data_article = $data_article[0];
        
?>
     <div class="col-sm-12">
        <p class="tag-list">
            <?php echo get_tag_list($data_article['id']); ?>
        </p>
        <h2>
            <?php echo $data_article['titre']; ?>
        </h2>
        <div class="accroche">
            <?php echo $data_article['accroche']; ?>
        </div>
        <article>
            <?php echo $data_article['texte']; ?>
        </article>
     </div>
<?php
    }
?>

</div>