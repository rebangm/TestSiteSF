<?php

namespace ShareIt\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ShareItFrontBundle:Default:index.html.twig', array('name' => "Romain"));
    }
}
