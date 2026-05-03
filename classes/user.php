<?php
require_once 'config/database.php';

class users extends database{
    private $table = 'user';

    public function create($nama, $email, $password){
        $qry = "INSERT INTO users (nama, email, password) values(?,?,?)";
        $stmt = $this->conn->prepare($qry);
        $stmt->bind_param("sss", $nama, $email, $password);
        return $stmt->execute();
    }

        public function read(){
        $qry = "SELECT * FROM users";
        return $this->conn->query($qry);
    }

    public function readByID($id){
        $qry = "SELECT * FROM users WHERE id=?";
        $stmt = $this->conn->prepare($qry);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function update($id, $nama, $email){
        $qry = "UPDATE users SET nama=?, email=? WHERE id=?";
        $stmt = $this->conn->prepare($qry);
        $stmt->bind_param("ssi", $nama, $email, $id);
        return $stmt->execute();
    }

    public function updateWithPassword($id, $nama, $email, $password){
        $qry = "UPDATE users SET nama=?, email=?, password=? WHERE id=?";
        $stmt = $this->conn->prepare($qry);
        $stmt->bind_param("sssi", $nama, $email, $password, $id);
        return $stmt->execute();
    }

    public function delete($id){
        $qry = "DELETE FROM users WHERE id=?";
        $stmt = $this->conn->prepare($qry);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
class user extends users {}
?>