<?php

namespace App\Manager;
use App\Entity\Post;

class PostManager extends BaseManager
{
    /**
     * @return Post[]
     */
    public function getAllPost()
    {

        $stmt = $this->pdo->prepare("SELECT * FROM post");
        $stmt->execute();
        $query = $stmt->fetchAll();
        var_dump($query);
    }

    /**
     * @param Post $post
     * @return Post/bool
     */
    public function createPost(Post $post)
    {

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