<?php

class HomeController extends Controller {

    /**
     * Returns a view of home
     */
    public function displayHome() {
        //look up the games names
        $conn = new DB();
        $req = $conn->connect()->prepare("SELECT * FROM game");
        $req->execute();
        $data = $req->fetchAll();

        $this->render('acceuil','Bienvenue sur Mundus !', $data);
    }

}