<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/User.php';

/**
 * Class UserManager
 */
class UserManager {

    public function checkLog($email, $pass) {
        $conn = new DB();
        $req = $conn->connect()->prepare("SELECT * FROM user WHERE email = :email");
        $req->bindValue(':email', $email);
        if($req->execute()){
            $data = $req->fetch();
            if($data){
                if(password_verify($pass, $data['password'])){
                    $user = new user($data['id'],$data['name'],$data['password'],$data['email'],$data['role_fk']);
                    return $user;
                }
                else {
                    return null;
                }
            }
            else {
                return null;
            }
        }
        else {
            return null;
        }
    }


    /**
     * return all users
     * @return array
     */
    public function getUsers() {
        $conn = new DB();
        $users = [];
        $req = $conn->connect()->prepare("SELECT * FROM user");
        $req->execute();
        $data = $req->fetchAll();
        foreach($data as $data_user) {
            $users[] = new user($data_user['id'], $data_user['name'], $data_user['password'], $data_user['email'], $data_user['role']);
        }
        return $users;
    }

    public function getUserByName($name) {
        $conn = new DB();
        $user = new user();
        $req = $conn->connect()->prepare("SELECT * FROM user WHERE name = :name");
        $req->bindValue(':name', $name);

        $req->execute();
        $data = $req->fetch();
        if($data) {
            $user = new user($data['id'], $data['name'], $data['password'], $data['email'], $data['role_fk']);
            return $user;
        }
        return null;
    }

    /**
     * add a new user
     * @param $data
     * @return string
     */
    public function addUser($data) {
        $conn = new DB();
        $verif = new cleanInput();

        $name = $verif->verifInput($data['name']);
        $password = $verif->verifInput($data['password']);
        $email = $verif->verifInput($data['email']);
        $role_fk = 2;

        $req = $conn->connect()->prepare("INSERT INTO user(name, password, email, role_fk)
                                                VALUES (:name, :password, :email, :role_fk)");

        $req->bindValue(':name', $name);
        $req->bindValue(':password', password_hash($password,PASSWORD_DEFAULT));
        $req->bindValue(':email', $email);
        $req->bindValue('role_fk', $role_fk);

        if($req->execute()) {
            return "utilisateur ajoutez avec succes";
        }
        else{
            return 'erreur lors de l\'enregistrement';
        }
    }

    /**
     * @param user $user
     * @return string
     */
    public function editUser(user $user) {
        $conn = new DB();
        $req = $conn->connect()->prepare("UPDATE user SET name = :name, email = :email, role_fk = :role WHERE id = :id");
        $req->bindValue(':name', $user->getName());
        $req->bindValue(':email', $user->getEmail());
        $req->bindValue(':role', $user->getRole());
        $req->bindValue(':id', $user->getId());

        if($req->execute()){
            return 'Utilisateur modifié avec succès !!';
        }
        else{
            return "erreur pendant la modification";
        }
    }

    /**
     * @param $userId
     * @return string
     */
    function deleteUser($userId) {
        $conn = new DB();
        $req = $conn->connect()->prepare("DELETE FROM user WHERE id = :id");
        $req->bindValue(':id', $userId);

        if ($req->execute()) {
            return 'utilisateur supprimer avec succès';
        }
        else{
            return 'erreur pendant la modification';
        }
    }
}