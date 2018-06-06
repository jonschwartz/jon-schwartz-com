<?php
namespace Jon\Controller;

use League\Plates\Engine;

class indexController extends Controller
{
    public function indexAction()
    {
        /** @var Engine $plate */
        $plate = $this->sm->get('League\Plates\Engine');

        echo $plate->render('index/index/index', [
            'title' => 'Welcome to Jon-Schwartz.com',
        ]);
    }

}