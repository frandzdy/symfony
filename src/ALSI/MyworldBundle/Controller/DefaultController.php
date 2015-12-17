<?php

namespace ALSI\MyworldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ALSIMyworldBundle:Default:index.html.twig');
    }
}
