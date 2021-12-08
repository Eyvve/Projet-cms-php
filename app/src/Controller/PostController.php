<?php

namespace App\Controller;

use App\Fram\Factory\;
use App\Manager\PostManager;

class PostController extends BaseController
{

    /**
     *  Show all Posts
     */
    public function executeHomepage()
    {
        $postManager = new PostManager(PDOFactory::getMysqlConnection());
        $posts = $postManager->getAllPost();


        $this->render(
            'homepage.php',
            [
                'posts' => $posts,
                'test' => "hey hey hey"
            ]
        );
        
    }
}