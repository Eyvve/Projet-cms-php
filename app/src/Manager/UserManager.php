<?php

namespace App\Manager;

use App\Entity\User;

class UserManager extends BaseManager
{
    public function getAllUsers()
    {

        $stmt = $this->pdo->prepare("SELECT * FROM `user` ");
        $stmt->execute();
        $query = $stmt->fetchAll();
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
        $stmt = $this->pdo->prepare("SELECT use FROM user where userId = :userId ")
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