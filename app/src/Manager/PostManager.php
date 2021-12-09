<?php

namespace App\Manager;
use App\Entity\Post;

class PostManager extends BaseManager
{
    /**
     * @return Post[]
     */
    public function getAllPosts()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM post JOIN user ON post.userId = user.userID;");
        $stmt->execute();
        $query = $stmt->fetchAll();
        return $query;
    }

    /**
     * @param Post $post
     * @return Post/bool
     */
    public function getAllPostsByUser(Post $post)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM post where userId = :id  ");
        $stmt->execute(
            [
                "id" => $userId,
            ]
        );
        $query = $stmt->fetchAll();
        var_dump($query);
        return true;
    }
    /**
     * @param Post $post
     * @return Post/bool
     */
    public function deletePost(Post $post)
    {

        return true;
    }
    /**
     * @param Post $post
     * @return Post/bool
     */
    public function updatePost(Post $post)
    {

        return true;
    }

}