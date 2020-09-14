<div class='row'>
    <?php
    require('bdd.php');    

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
</div>