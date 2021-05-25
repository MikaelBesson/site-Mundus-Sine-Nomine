<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/infogame.php';

class infoGameManager {

    public function getInfo() {
        $conn = new DB();
        $infos = [];
        $req = $conn->connect()->prepare("SELECT * FROM infogame");
        $req->execute();
        $data = $req->fetchAll();
        foreach($data as $data_info) {
            $infos[] = new infogame($data_info['dev'], $data_info['genre'],
                        $data_info['content'], $data_info['serv_name'], $data_info['ip'], $data_info['password'], $data_info['id']);
        }
        return $infos;
    }


    /**
     * for add info Game
     * @param $data
     * @return string
     */
    public function addInfo($data) {
        $conn = new DB();
        $verif = new cleanInput();

        $dev = $verif->verifInput($data['dev']);
        $genre = $verif->verifInput($data['genre']);
        $content = $verif->verifInput($data['content']);
        $serv_name = $verif->verifInput($data['serv_name']);
        $ip = $verif->verifInput($data['ip']);
        $password = $verif->verifInput($data['password']);

        $req = $conn->connect()->prepare("INSERT INTO infogame(dev, genre, content, serv_name, ip, password)
                                                VALUES (:dev, :genre, :content, :serv_name, :ip, :password)");

        $req->bindValue('dev', $dev);
        $req->bindValue('genre', $genre);
        $req->bindValue('content', $content);
        $req->bindValue('serv_name', $serv_name);
        $req->bindValue('ip', $ip);
        $req->bindValue('password', $password);

        if($req->execute()) {
            return "contenue ajoutez avec succes !!";
        }
        else{
            return "une erreur est survenue ";
        }
    }


    /**
     * edit game info
     * @param infogame $infogame
     */
    public function editInfo(infogame $infogame) {
        $conn = new DB();
        $req = $conn->connect()->prepare("UPDATE infogame SET dev = :dev, genre = :genre, content = :content,
                                            serv_name = :serv_name, ip = :ip, password = :password");

        $req->bindValue('dev', $infogame->getDev());
        $req->bindValue('genre', $infogame->getGenre());
        $req->bindValue('content', $infogame->getContent());
        $req->bindValue('serv_name', $infogame->getServName());
        $req->bindValue('ip', $infogame->getIp());
        $req->bindValue('password', $infogame->getPassword());

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
            echo 'game supprimer avec succes !!';
        }

    }


}