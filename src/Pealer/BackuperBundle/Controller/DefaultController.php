<?php

namespace Pealer\BackuperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/backuper")
     */
    public function indexAction()
    {
        echo 'Backuper controller<br>';
    	return $this->render('PealerBackuperBundle:Default:index.html.twig');
    }
}
