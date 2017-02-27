<?php

namespace Pealer\UpdaterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/updater", name="updater")
     */
    public function indexAction()
    {
        return $this->render('PealerUpdaterBundle:Default:index.html.twig');
    }
}
