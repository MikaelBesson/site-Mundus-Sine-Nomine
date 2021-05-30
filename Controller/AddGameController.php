<?php


class AddGameController extends Controller {
    public function displayAddGame() {
        $this->render('addGame', 'Ajoutez un jeu');
    }
}