<?php

namespace App\Controller;

use App\Fram\Factory\PDOFactory;
use App\Fram\Utils\Flash;
use App\Manager\PostManager;

class PostController extends BaseController
{

    /**
     *  Show all Posts
     */

    // TODO faire tous les phpdocs de toutes les actions


    public function executeGetAllPosts()
    {
        $postManager = new PostManager(PDOFactory::getMysqlConnection());
        $posts = $postManager->getAllPosts();
        var_dump($_POST["id"]);


        $this->render(
            'homepage.php',
            [
                "delete" => $delete,
                'posts' => $posts,
                'test' => "Tous les posts sont affichés"
            ],
            'homepage'
        );

    }

    public function executeCreatePost()
    {
        $postManager = new PostManager(PDOFactory::getMysqlConnection());
        $btnCreatePost = $postManager->createPost();


        $this->render(
            'homepage.php',
            [
                'posts' => $btnCreatePost,
                'test' => "Création de post"
            ], 'Homepage'
        );

    }

    public function executeDeletePostById()
    {
        //echo "coucou";
        //Flash::setFlash('alert','coucou '.$_POST['postId']);
        $postId = (int)($_POST['postId']);
        var_dump($postId);
        $postManager = new PostManager(PDOFactory::getMysqlConnection());
        $postManager->deletePost($postId);

        /*$this->render(
            'homepage.php',
            [
                'test1' => "Suppression de post jjj"
            ], 'Homepage'
        );*/
        header('Location: homepage');
        exit();
    }

    public function executeUpdatePost()
    {
        $postManager = new PostManager(PDOFactory::getMysqlConnection());
        $btnUpdatePost = $postManager->createPost();


        $this->render(
            'homepage.php',
            [
                'posts' => $btnUpdatePost,
                'test' => "Modification de post"
            ], 'Homepage'
        );

    }

    public function executeGetPostsByUser()
    {
        $postManager = new PostManager(PDOFactory::getMysqlConnection());
        $postsByUser = $postManager->createPost();


        $this->render(
            'homepage.php',
            [
                'posts' => $postsByUser,
                'test' => "Tous les posts de l'utilisateur sont affichés"
            ], 'Homepage'
        );

    }

    public function executeGetPostById()
    {
        $postManager = new PostManager(PDOFactory::getMysqlConnection());
        $postById = $postManager->createPost();


        $this->render(
            'homepage.php',
            [
                'posts' => $postById,
                'test' => "Le post recherché est affiché"
            ], 'Homepage'
        );

    }
}