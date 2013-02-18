<?php

namespace Fabsalito\SynkedinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SynkedinBundle:Default:index.html.twig', array('name' => $name));
    }
}
