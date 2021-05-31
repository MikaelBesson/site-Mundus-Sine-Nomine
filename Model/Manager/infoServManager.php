<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/infoServ.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/cleanInput.php';


/**
 * Class infoServManager
 */
class infoServManager {

    /**
     * return all infoserv
     * @return array
     */
    public function getInfoServ() {
        $conn = new DB();
        $infos = [];
        $req = $conn->connect()->prepare("SELECT * FROM infoserv");
        $req->execute();
        $data = $req->fetchAll();
        foreach($data as $data_info) {
            $infos[] = new infogame($data_info['id'],$data_info['serv_name'],$data_info['ip'],$data_info['password']);
        }
        return $infos;
    }


    /**
     * ADD SERVEUR INFO
     * @param $data
     * @return string
     */
    public function addInfoServ($data) {
        $conn = new DB();
        $verif = new cleanInput();

        $serv_name = $verif->verifInput($data['serv_name']);
        $ip = $verif->verifInput($data['ip']);
        $password = $verif->verifInput($data['password']);

        $req = $conn->connect()->prepare("INSERT INTO infoserv(serv_name, ip, password) VALUES (:serv_name, :ip, :password)");

        $req->bindValue('serv_name', $serv_name);
        $req->bindValue(':ip', $ip);
        $req->bindValue(':password', $password);

        if($req->execute()) {
            return "infos serveur ajoutez avec succes";
        }
        else{
            return 'erreur lors de l\'enregistrement';
        }
    }

    /**
     * edit server info
     * @param infoServ $infoServ
     */
    public function editInfoServ(infoServ $infoServ) {
        $conn = new DB();
        $req = $conn->connect()->prepare("UPDATE infoserv SET serv_name = :serv_name, ip = :ip, password = :password");
        $req->bindValue(':serv_name', $infoServ->getServName());
        $req->bindValue(':ip', $infoServ->getIp());
        $req->bindValue(':password', $infoServ->getPassword());

        if($req->execute()){
            echo 'info modifié avec succes !!';
        }
        else{
            echo "erreur pendant la modification";
        }
    }

    /**
     * delete server info
     * @param $infoservId
     */
    function deleteInfoServ($infoservId) {
        $conn = new DB();
        $req = $conn->connect()->prepare("DELETE FROM infoserv WHERE id = :id");
        $req->bindValue(':id', $infoservId);

        if ($req->execute()) {
            echo 'infos serveur supprimer avec succes';
        }
    }
}