<?php

namespace App\Manager;
use App\Entity\Post;

class PostManager extends BaseManager
{
    public array $data;


    public function setHydratePost($data)
    {
        ;
        if(empty($data)){
            $data = new Post($this->getAllPosts());
        }
        return $data;
    }
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
    public function getAllPostsByUser(int $userId)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM post where userId = :userId  ");
        $stmt->execute(
            [
                "userId" => $userId,
            ]
        );
        $query = $stmt->fetchAll();
        var_dump($query);
        return true;
    }
    /**
     * @param Post $postId
     * @return Post/bool
     */
    public function deletePost(Post $post)
    {
        $stmt = $this->pdo->prepare("DELETE FROM `post` WHERE `post`.`postId` = :postId;");
        $stmt->execute(
            [
                "postId" => $post->getPostId(),
            ]
        );
        return true;
    }
    /**
     * @param Post $post
     * @return Post/bool
     */
    public function updatePost(Post $post)
    {
        $stmt = $this->pdo->prepare("UPDATE `post` SET `content` = 'str', `updatedate` = 'datetime' 
WHERE `post`.`postId` = :userId");
        $stmt->execute(
            [
                "userId" => $post->getUserId(),
            ]
        );


        return true;
    }

}