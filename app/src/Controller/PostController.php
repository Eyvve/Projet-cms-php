<?php

namespace App\Controller;

use App\Fram\Factory\PDOFactory;
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

        $this->render(
            'homepage.php',
            [
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

    public function executeDeletePost()
    {
        $postManager = new PostManager(PDOFactory::getMysqlConnection());
        $btnDeletePost = $postManager->createPost();


        $this->render(
            'homepage.php',
            [
                'posts' => $btnDeletePost,
                'test' => "Suppression de post"
            ], 'Homepage'
        );

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