<?php

namespace Orca\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OrcaAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
