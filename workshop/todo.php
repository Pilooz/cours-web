<div class="card fluid">
    <h4><span class="icon-edit"></span>&nbsp;Objectif : developper un blog from scratch</h4>
    <ol>
        <li><strike>Découper une page html (header/content/footer)</strike></li>
        <li><strike>Faire un menu de navigation entre les différentes rubriques du blog</strike></li>
        <li><strike>Penser le modèle Mysql qui permet de stocker les données du blog.</strike></li>
        <li>Développer une page de liste d'articles</li>
            <ol>
                <li>Editer un nouveau fichier <b>article-mode-liste.php</b></li>
                <li>L'intégrer dans content.php en utilisant 'require'.</li>
                <li>dans ce fichier, écrire un modèle html qui présente les données suivantes : </li>
                    <ul>
                        <li>les tags associés,</li>
                        <li>le titre de l'aricle,</li>
                        <li>le résumé,</li>
                        <li>et un bouton "lire la suite"</li>
                    </ul>
                <li>Faire une boucle php pour génerer ces modèles d'articles</li>
                <li>connecter mySQL à notre backend.</li>
                <li>s'assurer que Mysql est démarré, que la base de données est bien créée (via SQLWorbench)</li>
                <li>Saisir des articles dans la base de données (via PHPMyadmin)</li>
                <li>Ecrire une requête SQL pour extraire les aritcles les plus récents de la BDD</li>
                <li>Modifier le modèle PHP pour prendre en compte les données des articles venant de la BDD</li>
                
            </ol>
        <li>Développer une page de détails d'un article (visualisation d'un article)</li>
    </ol>
</div>