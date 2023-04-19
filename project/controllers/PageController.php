<?php
namespace Project\Controllers;

use \Core\Controller;
use \Project\Models\Page;

class PageController extends Controller
{
    public function act()
    {
        $this->title = 'Действие act контроллера Page';
        return $this->render('page/act', [
            'header' => 'список юзеров',
            'users'  => ['user1', 'user2', 'user3'],
        ]);
    }
    private $pages;

    public function __construct()
    {
        $this->pages = [
            1 => ['title'=>'страница 1', 'text'=>'текст страницы 1'],
            2 => ['title'=>'страница 2', 'text'=>'текст страницы 2'],
            3 => ['title'=>'страница 3', 'text'=>'текст страницы 3'],
        ];
    }

    public function show($params)
    {
        $this->title = $this->pages[$params['id']]['title'];

        return $this->render('page/show', $this->pages[ $params['id'] ]);
    }

    public function one($params)
    {
        $page = (new Page) -> getById($params['id']);
        $this->title = $page['name'];

        return $this->render('page/one', [
            'name' => $page['name'],
            'quantity' => $page['quantity'],
            'price' => $page['price']
        ]);
    }

    public function all()
    {
        $page = (new Page) -> getAll();
        $this->title = 'Список всех продуктов';

        return $this->render('page/all', [
            'pages' => $page,
            'h1' => $this->title
        ]);
    }
}
