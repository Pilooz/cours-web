<style>
    .done {
        text-decoration: line-through;
        color:maroon;
    }
</style>

<div class="card fluid">
    <h4><span class="icon-edit"></span>&nbsp;Objectif : developper un blog from scratch</h4>
    <ol>
        <li class="done">Découper une page html (header/content/footer)</li>
        <li class="done">Faire un menu de navigation entre les différentes rubriques du blog</li>
        <li class="done">Penser le modèle Mysql qui permet de stocker les données du blog.</li>
        <li class="">Développer une page de liste d'articles
            <ol>
                <li class="">Editer un nouveau fichier <b>article-mode-liste.php</b></li>
                <li class="">L'intégrer dans content.php en utilisant 'require'.</li>
                <li class="">dans ce fichier, écrire un modèle html qui présente les données suivantes :
                    <ul>
                        <li class="">les tags associés,</li>
                        <li class="">le titre de l'aricle,</li>
                        <li class="">le résumé,</li>
                        <li class="">et un bouton "lire la suite"</li>
                    </ul>
                </li>
                <li class="">Faire une boucle php pour génerer ces modèles d'articles</li>
                <li class="">connecter mySQL à notre backend.</li>
                <li class="">s'assurer que Mysql est démarré, que la base de données est bien créée (via SQLWorbench)</li>
                <li class="">Saisir des articles dans la base de données (via PHPMyadmin)</li>
                <li class="">Saisir des tags dans la table 'tag' et faire des relations entre vos tag et vos articles dans la table 'articles_tags' (PHMyAdmin)</li>
                <li class="">Ecrire une requête SQL pour extraire les aritcles les plus récents de la BDD</li>
                <li class="">Modifier le modèle PHP pour prendre en compte les données des articles venant de la BDD</li>
                <li class="">Extraire les tags rattachés aux articles et les inclure au modèle de liste d'article</li>
                
            </ol>
        </li>
        <li class="">Développer une page de détails d'un article (visualisation d'un article)
            <ol>
                <li class="">Créer une action 'detail' et la prendre en compte de le fichier qui gère la liste des articles</li>
                <li class="">Développer la page HTML qui présente un article en détail</li>
                <li class="">Connecter à la BDD pour extraire les bonnes données.</li>
            </ol>
        </li>
        <li class="">Développer un formulaire d'ajout d'article
            <ol>
                <li class="">Créer une action 'ecrire' et la prendre en compte de le fichier qui gère la liste des articles</li>
                <li class="">Développer la page HTML qui présente un formulaire d'ajout d'un article</li>
                <li class="">Connecter à la BDD pour inserer les données provenant du formulaire.</li>
            </ol>
        </li>
    </ol>
</div>