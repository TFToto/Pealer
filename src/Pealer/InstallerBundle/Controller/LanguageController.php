<?php
/**
 * @package     Pealer
 * @subpackage  Install
 *
 * @copyright Copyright (C) 2010-2017 by teglo. All rights reserved.
 * @license http://www.playjoom.org/en/about/licenses/gnu-general-public-license.html
 */

namespace Pealer\InstallerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LanguageController extends Controller
{
    /**
     * @Route("/installer/language", name="installer_language")
     */
    public function indexAction()
    {
    	return $this->render('install/language.html.twig', array(
    			'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
    	));
    	//return $this->render('install/index.html.twig');
    }
}
