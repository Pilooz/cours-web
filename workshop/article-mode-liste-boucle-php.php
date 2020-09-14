<?php
    $liste_article = Array(1, 2, 3, 4, 5, 6);

    function modulo( $value, $modulus ){
        return ( $value % $modulus + $modulus ) % $modulus;
    }

    foreach ($liste_article as $index => $article_id) {
        if (  $index == 0 || $index == 3 ) {
            echo "<div class='row'>\n";
        }
?>
    <div class="col-sm-4">
        <div class="card">
            <div class="section dark">
                <div class="tag-list">
                <mark class="tag">tag1</mark>
                <mark class="tag">tag2</mark>
                </div>
                <h3>Ici le titre de l'article #<?php echo $article_id; ?></h3>
            </div>
            <div class="section">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at magna dignissim, dictum nunc varius, tristique nisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                </p>
            </div>
            <div class="section actions">
                <button class=""><a href="?nav=index&action=detail"><span class="icon-info"></span>&nbsp;Lire la suite...</a></button>
            </div>
        </div>  
    </div>
    
<?php
        if ($index == 2 || $index == 5) {
            echo "</div>\n"; 
        }
    }
?>