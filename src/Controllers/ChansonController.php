<?php
namespace App\Controllers;

use App\Core\BaseController;
use App\Core\EntityManager;

class ChansonController extends BaseController {
    public function index() {
        $entityManager = new EntityManager();
        $chansons = $entityManager->query("SELECT * FROM chanteur INNER JOIN chanson ON chanteur.id_chanteur = chanson.id_chanteur;");

        $this->display('chansons', ["chansons" => $chansons]);
    }

    public function displayAddForm() {
        $entityManager = new EntityManager();
        $categories = $entityManager->findAll("categorie", "id_categorie");

        $this->display('add-chanson', ["categories" => $categories]);
    }

    public function store() {
        $entityManager = new EntityManager();
//        $chanteur = $entityManager->findOne("chanteur", "id_chanteur", $chanteur);
        $chanteur = 1;
        $chanson = [
            "titre" => $_POST["titre"],
            "date" => $_POST["date"],
            "id_chanteur" => $chanteur,
            "id_categorie" => $_POST["genre"]
        ];
        var_dump($chanson);
        $this->display('test', ["chanson" => $chanson]);
//        $entityManager->insert("chanson", $_POST);
    }
}
