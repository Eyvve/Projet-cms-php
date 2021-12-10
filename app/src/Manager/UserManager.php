<?php

namespace App\Manager;
use PDO;
use App\Entity\User;


class UserManager extends BaseManager
{

    public $data;

    public function setHydrateUser()
    {

        if(empty($this->data)){
            $this->data = new User($this->getAllUsers());
        }
        return $this->data;
    }

    /**
     * @return User[]
     */
    public function getAllUsers()
    {

        $stmt = $this->pdo->prepare("SELECT * FROM `user` ");
        $stmt->execute();
        $query = $stmt->fetchAll(PDO::FETCH_CLASS, User::class);
        return $query ;
    }

    /**
     * @param  $user
     * @return User/bool
     */
    public function getUsersByStatus(User $user)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM user where status = :status ");
        $stmt->execute(
            [

                "status" => $_GET['status'],
            ]
        );
        $query = $stmt->fetchAll();
        var_dump($query);
        return true;
    }
    /**
     * @param User $user
     * @return User/bool
     */
    public function deleteUser()
    {
        $stmt = $this->pdo->prepare("SELECT use FROM user where userId = :userId ");
        $stmt->execute(
            [
                "status" => $_GET['status'],
            ]
            );



        return true;
    }
    /**
     * @param Post $post
     * @return Post/bool
     */
    public function updateUser(Post $post)
    {

        return true;
    }

}