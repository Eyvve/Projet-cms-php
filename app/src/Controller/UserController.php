<?php

namespace App\Controller;
use App\Fram\Factory\PDOFactory;
use App\Manager\UserManager;

class UserController extends BaseController
{
    /**
     *  Show all Users
     */

    // TODO faire tous les phpdocs de toutes les actions

    public function executeGetAllUsers()
    {
        $userManager = new UserManager(PDOFactory::getMysqlConnection());
        $users = $userManager->setHydrateUser();
        $users = json_encode($users);


        $this->render(
            'admin.php',
            [
                'users' => $users,
                'test' => "Tous les users sont affichés"
            ],
            'Admin'
        );

    }

}