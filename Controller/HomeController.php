<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';


class HomeController extends Controller {

    public function displayHome() {
        // chercher les games names
        $conn = new DB();
        $req = $conn->connect()->prepare("SELECT * FROM game");
        $req->execute();
        $data = $req->fetchAll();

        $this->render('acceuil','Bienvenue sur Mundus !', $data);
    }

}