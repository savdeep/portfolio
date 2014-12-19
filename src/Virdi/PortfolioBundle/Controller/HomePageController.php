<?php

namespace Virdi\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Description of HomePageController
 *
 * @author Savdeep.Singh
 */
class HomePageController extends Controller {

    /**
     * @Route("/")
     * @Template()
     */
    public function homeAction() {
        return $this->render("VirdiPortfolioBundle:Home:home.html.twig", array());
    }

}
