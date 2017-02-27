<?php
/**
 * @package     Pealer
 * @subpackage  HelloBundle
 *
 * @copyright Copyright (C) 2010-2017 by teglo. All rights reserved.
 * @license http://www.playjoom.org/en/about/licenses/gnu-general-public-license.html
 */
namespace Pealer\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

class DefaultController extends Controller {
    /**
     * @Route("/")
     */
    public function indexAction() {

    	if(!$this->_checkPlayJoomConfig()) {
    		return $this->redirectToRoute('installer');
    	} else {
    		return $this->render('default/index.html.twig', array(
    				'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
    		));
    	}
    }
    
    protected function _checkPlayJoomConfig() {
    	
    	$path = $_SERVER["DOCUMENT_ROOT"].'/playjoom/configurationnnnnnnnnnnnn.php';
    	$fs = new Filesystem();
    	
    	if($fs->exists($path)) {
    		return true;
    	} else {
    		return false;
    	}
    }
}
