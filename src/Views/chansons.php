<div id="chanson">
    <div class="filtre">
        <form action="/chansons" method="POST">
            <label>
                <input type="text" name="titre" id="titre" placeholder="Rechercher un titre">
            </label>
            <label>
                <input type="text" name="chanteur" id="chanteur" placeholder="Rechercher un chanteur">
            </label>
            <input type="submit" value="Recherche">
        </form>
    </div>
    <div class="content">
        <h1>Liste des chansons</h1>
        <?php
        foreach ($chansons as $chanson) {
            $titre = $chanson["titre"];
            $date = $chanson["date"];

            echo "
    <article class='article'>
           <div class='head'>
                <h2 class='title'>$titre</h2>
                <a href='/chanson/supprimer' class='button'><i class='ri-delete-bin-fill'></i></a>
           </div>
           <div class='body'>
               <ul>
                    <li>
                        De " . $chanson["nom_chanteur"] . "
                    </li>
                    <li>
                        Publié le $date
                    </li>
                </ul>
            </div>
    </article>";
        }
        ?>
    </div>
</div>