<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/game.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/cleanInput.php';


class GameManager {


    /**
     * return all games
     * @return array
     */
    public function getGames() {
        $conn = new DB();
        $games = [];
        $req = $conn->connect()->prepare("SELECT * FROM game");
        $req->execute();
        $data = $req->fetchAll();
        foreach($data as $data_game) {
            $games[] = new game($data_game['id'], $data_game['name'], $data_game['infogame_fk']);
        }
        return $games;
    }


    /**
     * add a new game
     * @param $data
     * @return string
     */
    public function addGame($data) {
        $conn = new DB();
        $verif = new cleanInput();

        $name = $verif->verifInput($data['name']);
        $infogame = $verif->verifInput($data['infogame_fk']);

        $req = $conn->connect()->prepare("INSERT INTO game(name, infogame_fk) VALUES (:name, :infogame_fk)");

        $req->bindValue(':name', $name);
        $req->bindValue(':infogame', $infogame);

        if($req->execute()) {
            return "game ajoutez avec succes";
        }
        else{
            return 'erreur lors de l\'enregistrement';
        }
    }

    /**
     * edit a game
     * @param game $game
     */
    public function editGame(game $game) {
        $conn = new DB();
        $req = $conn->connect()->prepare("UPDATE game SET name = :name WHERE id = :id");
        $req->bindValue(':name', $game->getName());
        $req->bindValue(':id', $game->getId());

        if($req->execute()){
            echo 'game modifié avec succes !!';
        }
        else{
            echo "erreur pendant la modification";
        }
    }


    /**
     * delete a game
     * @param $gameId
     */
    function deleteGame($gameId) {
        $conn = new DB();
        $req = $conn->connect()->prepare("DELETE FROM game WHERE id = :id");
        $req->bindValue(':id', $gameId);

        if ($req->execute()) {
            echo 'game supprimer avec succes';
        }
    }

}