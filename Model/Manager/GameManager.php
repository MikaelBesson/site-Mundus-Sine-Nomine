<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/Game.php';
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
     * @param string $name
     * @return game
     */
    public function getGame(string $name) :?game {
        $conn = new DB();
        $req = $conn->connect()->prepare("SELECT * FROM game WHERE name = :name");
        $req->bindValue(':name', $name);
        $req->execute();
        $data = $req->fetch();
        if($data) {
            return $game = new game($data['id'], $data['name'], $data['infogame_fk']);
        }
        else {
            return null;
        }
    }

    /**
     * @param $name
     * @param $dev
     * @param $genre
     * @param $content
     * @return string
     */
    public function addGame($name, $dev, $genre, $content) {
        $conn = new DB();
        $verif = new cleanInput();

        $game = $verif->verifInput($name);

        $infos = new infoGameManager();
        $info = $infos->addInfo($dev, $genre, $content);

        $req = $conn->connect()->prepare("INSERT INTO game (name, infogame_fk) VALUES (:name, :infogame_fk)");

        $req->bindValue(':name', $name);
        $req->bindValue(':infogame_fk', $info->getId());

        try {
            if($req->execute()) {
                return "jeux ajouté avec succès";
            }
            else{
                return 'erreur lors de l\'enregistrement';
            }
        }
        catch (PDOException $e){
            return 'le jeux est deja present';
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
            echo 'jeux modifié avec succès !!';
        }
        else{
            echo "erreur pendant la modification";
        }
    }


    /**
     * delete a game
     * @param $gameId
     */
    public function deleteGame($gameId) {
        $conn = new DB();
        $req = $conn->connect()->prepare("SELECT infogame_fk FROM game WHERE id = :id");
        $req->bindValue(':id', $gameId);
        if ($req->execute()) {
            $fk = $req->fetch()['infogame_fk'];
            $req = $conn->connect()->prepare("DELETE FROM infogame WHERE id = :id");
            $req->bindValue(':id', $fk);
            $req->execute();
            $req = $conn->connect()->prepare("DELETE FROM game WHERE id = :id");
            $req->bindValue(':id', $gameId);
            return 'jeux supprimer avec succès';
        }
        else {
            return "erreur pendant la suppression";
        }



    }

}