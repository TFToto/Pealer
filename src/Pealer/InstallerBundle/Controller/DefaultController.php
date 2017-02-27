<?php

namespace Pealer\InstallerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/installer", name="installer")
     */
    public function indexAction()
    {
    	return $this->render('install/index.html.twig', array(
    			'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
    	));
        //return $this->render('PealerInstallerBundle:Default:index.html.twig');
    }
}
