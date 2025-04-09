<div id="ajouter-chanson">
    <h1>Ajouter une chanson</h1>
    <form action="/chanson/store" method="post">
        <label>
            <input type="text" name="titre" id="titre" placeholder="Titre">
        </label>
        <label>
            <input type="text" name="chanteur" id="chanteur" placeholder="Chanteur">
        </label>
        <label>
            <input type="date" name="date" id="date">
        </label>
        <select name="genre" id="genre">
            <?php
            foreach ($categories as $category) {
                echo "<option value='" . $category["id_categorie"] . "'>" . $category["libelle_categorie"] . "</option>";
            }
            ?>
        </select>
        <input type="submit" value="Ajouter ma chanson">
    </form>
</div>