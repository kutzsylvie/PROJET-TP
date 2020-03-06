<?php
require_once 'DataBase.php';
/**
 * Description of User
 *
 * @author kutz
 */
class users {
  /**
   *
   * @var type integer
   */
    public $id;
    /**
     *
     * @var type string
     */
    public $firstname;
    /**
     *
     * @var type string
     */
    public $lastname;
    /**
     *
     * @var type bool
     */

    public $email;
    /**
     *
     * @var type string
     */
    public $password;
    /**
     *
     * @var type integer
     */

    public $db;

    /**
     * Le constructeur de la classe utilisateur
     */

    public function __construct($_firstname = '', $_lastname = '', $_email = '', $_password = '', $_id_cathusers = 1) {
        $this->firsname = $_firstname;
        $this->lastname = $_lastname;
        $this->email = $_email;
        $this->password = $_password;
        $this->id_cathusers= $_id_cathusers;
        $this->db = Database::getInstance();
    }

    public function create() {
        $sql = 'INSERT INTO `users`(`firstname`,`lastname`,`email`,`password`, `id_cathusers`) VALUES (:firstname, :lastname, :email, :password, :id_cathusers)';
        $req = $this->db->prepare($sql);
        $req->bindValue(':firstname', $this->firsname, PDO::PARAM_STR);
        $req->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $req->bindValue(':email', $this->email, PDO::PARAM_STR);
        $req->bindValue(':password', $this->password, PDO::PARAM_STR);
        $req->bindValue(':id_cathusers', $this->id_cathusers, PDO::PARAM_INT);

        $req->execute();
    }

    public function getOne() {
        $sql = 'SELECT `id`,`firstname`,`lastname`,`email`,`password`, `id_cathusers` FROM `users` WHERE `id` = :id OR `email` = :email';
        $req = $this->db->prepare($sql);
        $req->bindValue(':id', $this->id, PDO::PARAM_INT);
        $req->bindValue(':email', $this->email, PDO::PARAM_STR);

        if ($req->execute()) {
            $users = $req->fetch(PDO::FETCH_OBJ);
            $this->firsname = $users->firstname;
            $this->lastname = $users->lastname;
            $this->email = $users->email;
            $this->password = $users->password;
            $this->id_cathusers = $users->id_cathusers;
            return $this;
        }
    }

    public function checkEmail() {
        $sql = 'SELECT COUNT(`id`) AS number_user FROM `users` WHERE `email` = :email';
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

    public function updatepwd() {
        $sql = 'UPDATE `users` SET `password` = :password WHERE `email = :email';
        $req = $this->db->prepare($sql);
        $req->bindValue(':password', $this->password, PDO::PARAM_STR);

        if ($sth->execute()) {
            return $this;
        }
        return false;
    }

}
