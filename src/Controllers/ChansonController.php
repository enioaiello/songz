<?php
namespace App\Controllers;

use App\Core\BaseController;
use App\Core\EntityManager;

class ChansonController extends BaseController {
    public function index() {
        $entityManager = new EntityManager();
//        $chansons = $entityManager->findAll("chanson", "id_chanson");
        $chansons = $entityManager->query("SELECT * FROM chanteur INNER JOIN chanson ON chanteur.id_chanteur = chanson.id_chanteur;");

        $this->display('chansons', ["chansons" => $chansons]);
    }

    public function displayAddForm() {
        $this->display('add-chanson');
    }
}
