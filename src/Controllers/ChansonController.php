<?php
namespace App\Controllers;

use App\Core\BaseController;
use App\Core\EntityManager;

class ChansonController extends BaseController {
    public function index() {
        $entityManager = new EntityManager();
        $chansons = $entityManager->findAll("chanson", "id_chanson");
        $chanteurs = $entityManager->findAll("chanteur", "id_chanteur");

        $this->display('chansons', ["chansons" => $chansons, "chanteurs" => $chanteurs]);
    }

    public function displayAddForm() {
        $this->display('add-chanson');
    }
}
