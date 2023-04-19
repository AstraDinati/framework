<?php

namespace Project\Controllers;

use \Core\Controller;

class UserController extends Controller
{
    private $users;
    public function __construct()
    {
        $this->users = [
            1 => ['name' => 'user1', 'age' => '23', 'salary' => 1000],
            2 => ['name' => 'user2', 'age' => '24', 'salary' => 2000],
            3 => ['name' => 'user3', 'age' => '25', 'salary' => 3000],
            4 => ['name' => 'user4', 'age' => '26', 'salary' => 4000],
            5 => ['name' => 'user5', 'age' => '27', 'salary' => 5000],
        ];
    }
    public function show($params)
    {
        $this->title = 'Действие show контроллера User';

        return $this->render('user/show', $this->users[ $params['id'] ]);
    }

    public function info($params)
    {
        $this->title = 'Действие info контроллера User';

        $ar[] = $this->users[ $params['id'] ][ $params['key'] ];
        return $this->render('user/info', $ar);
    }
    public function all()
    {
        $this->title = 'Действие all контроллера User';

        return $this->render('user/all', $this->users);
    }
    public function first($params)
    {
        $this->title = 'Действие first контроллера User';

        $ar = array_slice($this->users, 0, ( int )$params['n'], true);
        return $this->render('user/first', $ar);
    }
}
