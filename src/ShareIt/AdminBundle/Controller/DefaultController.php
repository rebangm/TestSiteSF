<?php

namespace ShareIt\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ShareItAdminBundle:Default:index.html.twig');
    }
}
