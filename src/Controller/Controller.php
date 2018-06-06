<?php
namespace Jon\Controller;

use Zend\ServiceManager\ServiceManager;

class Controller
{
    /**
     * @var ServiceManager
     */
    protected $sm;

    public function __construct(ServiceManager $sm)
    {
        $this->sm = $sm;
    }
}