<?php

namespace Orca\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OrcaFrontBundle:Default:index.html.twig', array('name' => "Romain"));
    }
}
