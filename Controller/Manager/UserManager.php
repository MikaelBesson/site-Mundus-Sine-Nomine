<?php


class UserManager {


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

    /**
     * for Add an new user
     * @param user $user
     */
    public function addUser(user $user) {
        $conn = new DB();
        $verif = new cleanInput();


        $id = null;
        $name = $verif->verifInput($_POST['name']);
        $password = $verif->verifInput($_POST['password']);
        $email = $verif->verifInput($_POST['email']);
        $role_fk = 2;

        $req = $conn->connect()->prepare("INSERT INTO user(id , name, password, email, role_fk)
                                                VALUES (:id,:name, :password, :email, :role_fk)");
        $req->bindValue('id', $id);
        $req->bindValue(':name', $name);
        $req->bindValue(':password', password_hash($password,PASSWORD_DEFAULT));
        $req->bindValue(':email', $email);
        $req->bindValue('role_fk', $role_fk);

        if($req->execute()) {
            echo 'utilisateur ajoutez avec succes';

        }
    }

    /**
     * edit an user
     * @param user $user
     */
    public function editUser(user $user) {
        $conn = new DB();
        $req = $conn->connect()->prepare("UPDATE user SET name = :name, password = :password, email = :email WHERE id = :id");
        $req->bindValue(':name', $user->getName());
        $req->bindValue(':password',password_hash($user->getPassword(),PASSWORD_DEFAULT));
        $req->bindValue(':email', $user->getEmail());
        $req->bindValue(':id', $user->getId());

        if($req->execute()){
            echo 'Utilisateur modifié avec succes !!';
        }
    }

    /**
     * delette an user
     * @param $userId
     */
    function deletteUser($userId)
    {
        $conn = new DB();
        $req = $conn->connect()->prepare("DELETE FROM user WHERE id = :id");
        $req->bindValue(':id', $userId);

        if ($req->execute()) {
            echo 'utilisateur supprimer avec succes';
        }
    }
}