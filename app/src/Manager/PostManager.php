<?php

namespace App\Manager;
use App\Entity\Post;
use PDO;

class PostManager extends BaseManager
{
    private $data;


    /**
     * @return Post[]
     */
    public function getAllPosts()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM post JOIN user ON post.userId = user.userId");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Post');
        $postquery = $stmt->fetchAll();
        return $postquery;
    }

    /**
     * @param Post $post
     * @return Post/bool
     */
    public function getAllPostsByUser(Post $post)
    {
        $stmt = $this->data->prepare("SELECT * FROM post where userId = :userId  ");
        $stmt->execute(
            [
                "userId" => $post->getPostId(),
            ]
        );
        $query = $stmt->fetch(PDO::FETCH_ASSOC);
        var_dump($query);
        return true;
    }


    public function deletePost($id)
    {
         $stmt = $this->pdo->prepare("DELETE FROM post WHERE postId = :postId ");
         $stmt->execute(
             [
                 ":postId" => $id
             ]

         );


    }
    /**
     * @param Post $post
     * @return Post/bool
     */
    public function updatePost($id)
    {
        $stmt = $this->pdo->prepare("UPDATE `post` SET `content` = 'str', `updatedate` = 'datetime' 
WHERE `post`.`postId` = :userId");
        $stmt->execute(
            [
                "userId" => $id,
            ]
        );


        return true;
    }

}