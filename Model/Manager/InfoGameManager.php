<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/Infogame.php';

/**
 * Class infoGameManager
 */
class infoGameManager {


    /**
     * return all info of game
     * @return array
     */
    public function getInfo() {
        $conn = new DB();
        $infos = [];
        $req = $conn->connect()->prepare("SELECT * FROM infogame");
        $req->execute();
        $data = $req->fetchAll();
        foreach($data as $data_info) {
            $infos[] = new infogame($data_info['dev'], $data_info['genre'],
                        $data_info['content'], $data_info['id']);
        }
        return $infos;
    }

    public function getLastId(){
        $conn = new DB();
        $req = $conn->connect()->prepare("SELECT MAX(id) as id FROM infogame");
        $req->execute();
        return $req->fetch();
    }


    /**
     * for add info Game
     * @param $dev
     * @param $genre
     * @param $content
     * @return string
     */
    public function addInfo($dev, $genre, $content) {
        $conn = new DB();
        $check = new cleanInput();

        $dev = $check->verifInput($dev);
        $genre = $check->verifInput($genre);
        $content = $check->verifInput($content);

        $req = $conn->connect()->prepare("INSERT INTO infogame(dev, genre, content)
                                                VALUES (:dev, :genre, :content)");

        $req->bindValue('dev', $dev);
        $req->bindValue('genre', $genre);
        $req->bindValue('content', $content);

        if(!$req->execute()) {
            return "une erreur est survenue";
        }

        return (new infogame($dev, $genre, $content, $this->getLastId()['id']));
    }


    /**
     * edit game info
     * @param infogame $infogame
     */
    public function editInfo(infogame $infogame) {
        $conn = new DB();
        $req = $conn->connect()->prepare("UPDATE infogame SET dev = :dev, genre = :genre, content = :content");

        $req->bindValue('dev', $infogame->getDev());
        $req->bindValue('genre', $infogame->getGenre());
        $req->bindValue('content', $infogame->getContent());

        if($req->execute()) {
            echo "modification effectuer avec succes !!";
        }
        else{
            echo " erreur pendant la modiffication";
        }
    }


    /**
     * delete game
     * @param $gameId
     */
    function deletteInfo($gameId) {
        $conn = new DB();
        $req = $conn->connect()->prepare("DELETE FROM infogame WHERE id = :id");
        $req->bindValue('id', $gameId);

        if($req->execute()) {
            echo 'jeux supprimer avec succes !!';
        }

    }


}