<?php
namespace App\Controllers;

use App\Core\BaseController;

class ChansonController extends BaseController {
    public function index() {
        $this->display('chansons');
    }

    public function displayAddForm() {
        $this->display('add-chanson');
    }
}
