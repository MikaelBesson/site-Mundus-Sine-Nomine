<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/Role.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/cleanInput.php';


class RoleManager {

    /**
     * return all roles
     * @return array
     */
    public function getRoles() {
        $conn = new DB();
        $roles =[];
        $req = $conn->connect()->prepare("SELECT * FROM role");
        $req->execute();
        $data = $req->fetchAll();
        foreach($data as $data_role) {
            $roles[] = new Role( $data_role['role'], intval($data_role['id']));
        }
        return $roles;
    }

    /**
     * return all roles
     * @param int $id
     * @return Role
     */
    public function getRole(int $id): Role {
        $conn = new DB();

        $req = $conn->connect()->prepare("SELECT * FROM role WHERE id=:id");
        $req->bindValue(':id', $id);
        $req->execute();
        $data = $req->fetch();

        return new Role( $data['role'], intval($data['id']));
    }

    /**
     * @param $role
     * @param $id
     * @return string
     */
    public function addRole($role, $id) {
        $conn = new DB();
        $verif = new cleanInput();
        $role = $verif->verifInput($role);

        $req = $conn->connect()->prepare("INSERT INTO role(role, id) VALUES (:role, :id)");

        $req->bindValue(':role', $role);
        $req->bindValue(':id', $id);

        if($req->execute()){
            return "role ajoutez avec succès";
        }
        else {
            return "erreur lors de l\'enregistrement";
        }
    }

    /**
     * edit a role
     * @param role $role
     */
    public function editRole(role $role) {
        $conn = new DB();
        $req = $conn->connect()->prepare("UPDATE role SET role = :role WHERE id = :id");
        $req->bindValue(':role', $role->getRole());
        $req->bindValue(':id', $role->getId());

        if($req->execute()) {
            echo 'role modifié avec succès !!';
        }
        else{
            echo "erreur pendant la modification";
        }
    }

    /**
     * delete a role
     * @param $roleId
     */
    public function deleteRole($roleId) {
        $conn = new DB();
        $req = $conn->connect()->prepare("DELETE FROM role WHERE id = :id");
        $req->bindValue(':id', $roleId);

        if($req->execute()) {
            echo 'role supprimer avec succès';
        }
        else{
            echo "erreur pendant la modification";
        }
    }
}