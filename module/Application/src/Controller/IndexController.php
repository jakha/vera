<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $mainView = new ViewModel();

        $homeView = new ViewModel();
        $homeView->setTemplate('application/index/home');
        $contactsView = new ViewModel();
        $contactsView->setTemplate('application/index/contacts');

        $mainView->addChild($homeView, 'home')
                    ->addChild($contactsView, 'contacts');

        return $mainView;
    }
}
