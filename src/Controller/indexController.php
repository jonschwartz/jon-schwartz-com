<?php
namespace Jon\Controller;

use Symfony\Component\Routing\Annotation\Route;

class indexController
{
    /**
     * @Route("/", name="indexAction")
     */
    public function indexAction()
    {
        echo 'hello world';
    }

}