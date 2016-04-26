<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Model\Entity\User;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function homeAction()
    {
        $view = new ViewModel();
        $this->layout('layout/home');
        return $view;
    }

    public function profiloAction()
    {
        $view = new ViewModel();
        $this->layout('layout/profilo');
        return $view;
    }

    public function benvenutoAction()
    {
        $view = new ViewModel();
        $this->layout('layout/benvenuto');
        return $view;
    }

    public function registratiAction()
    {
        $view = new ViewModel();
        $this->layout('layout/registrati');
        return $view;
    }
    public function cercaAction()
    {
        $view = new ViewModel();
        $this->layout('layout/cerca');
        return $view;
    }
}
