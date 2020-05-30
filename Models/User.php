<?php
require_once 'Database.php';
// registration model
/**
 * Description of User
 *
 * @author kutz
 */
class User {
  /**
   *
   * @var type integer
   */
    public $idUsers;
    /**
     *
     * @var type string
     */
    public $lastname;
    /**
     *
     * @var type string
     */
    public $firstname;
    /**
     *
     * @var type bool
     */

    public $email;
    /**
     *
     * @var type string
     */
    public $phone;
    /**
     *
     * @var type integer
     */
    public $_password;
    /**
     *
     * @var type integer
     */

    public $db;

    /**
     * Le constructeur de la classe utilisateur
     */

    public function __construct( $_lastname = '',$_firstname = '', $_email = '',$_phone = '', $_password = '',$_message = '', $_newsletter = '',  $_id_role = '1') {     
        $this->lastname = $_lastname;
        $this->firstname = $_firstname;
        $this->email = $_email;      
        $this->phone = $_phone;
        $this->password = $_password;
        $this->message = $_message;
        $this->newsletter = $_newsletter;
        $this->id_role= $_id_role;
        $this->db = Database::getInstance();
    }

    public function create() {
        $sql = 'INSERT INTO `users`(`lastname`,`firstname`,`email`, `phone`,`password`,`message`,`newsletter`, `id_role`) VALUES (:firstname, :lastname, :email, :phone, :password, :message, :newsletter,  :id_role)';
        $req = $this->db->prepare($sql);
        $req->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $req->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $req->bindValue(':email', $this->email, PDO::PARAM_STR);
        $req->bindValue(':phone', $this->phone, PDO::PARAM_STR);
        $req->bindValue(':password', $this->password, PDO::PARAM_STR);
        $req->bindValue(':message', $this->message, PDO::PARAM_STR);
        $req->bindValue(':newsletter', $this->newsletter, PDO::PARAM_INT);
        $req->bindValue(':id_role', $this->id_role, PDO::PARAM_INT);
        $req->execute();
    }
// view profil data
    public function getOne() {
        $sql = 'SELECT `idUsers`,`lastname`,`firstname`,`email`,`phone`,`password`,`message`,`newsletter`, `id_role` FROM `users` WHERE `id` = :id OR `email` = :email';
        $req = $this->db->prepare($sql);
        $req->bindValue(':idUsers', $this->idUsers, PDO::PARAM_INT);
        $req->bindValue(':email', $this->email, PDO::PARAM_STR);


        if ($req->execute()) {
            $user = $req->fetch(PDO::FETCH_OBJ);
            $this->idUsers = $user->idUsers;
            $this->lastname = $user->lastname;
            $this->firstname = $user->firstname;
            $this->email = $user->email;
            $this->phone = $user->phone;
            $this->password = $user->password;
            $this->message = $user->message;
            $this->newsletter = $user->newsletter;
            $this->id_role = $user->id_role;
            return $this;
        }
    }

    public function checkEmail() {
        $sql = 'SELECT COUNT(`idUsers`) AS number_user FROM `users` WHERE `email` = :email';
        $req = $this->db->prepare($sql);
        $req->bindValue(':email', $this->email, PDO::PARAM_STR);
        $exist_user = false;
        if($req->execute()){
            $result = $req->fetchColumn(0);
            if(is_numeric($result) && $result > 0){
                $exist_user = true;
            }
        }
        return $exist_user;
    }
// update profil data
    public function update() {
        $sql = 'UPDATE users SET lastname = :lastname, firstname = :firstname, email = :email, phone = :phone, password = :password  WHERE id = :id';
        $sth = $this->db->prepare($sql);
        $sth->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $sth->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $sth->bindValue(':email', $this->email, PDO::PARAM_STR);
        $sth->bindValue(':phone', $this->phone, PDO::PARAM_STR);
        $sth->bindValue(':password', $this->password, PDO::PARAM_STR);
        $sth->bindValue(':id', $this->id, PDO::PARAM_INT);
        if ($sth->execute()) {
            return $this;
        }
        return false;
    }
// delete profil data
public function delete() {
    $sql = 'DELETE FROM users WHERE id = :idUsers';
    $sth = $this->db->prepare($sql);
    $sth->bindValue(':id', $this->id, PDO::PARAM_INT);
    if ($sth->execute()) {
        return $this;
    }
    return false;
}
}