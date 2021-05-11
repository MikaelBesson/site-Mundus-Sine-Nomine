<?php


class HomeController extends Controller {

    public function displayHome() {
        $this->render('acceuil','Bienvenue sur Mundus !');
    }

}