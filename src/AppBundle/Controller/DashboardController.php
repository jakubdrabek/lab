<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    /**
     * @Route("/dashboard", name="dashboard_index")
     */
    public function indexAction()
    {
        $number = mt_rand(0, 100);

        return $this->render('dashboard/index.html.twig', array(
            'number' => $number
        ));
    }
}