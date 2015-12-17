<?php

namespace ALSI\MyworldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostController extends Controller
{
    public function indexAction()
    {
        return $this->render('ALSIMyworldBundle:Default:index.html.twig');
    }
}
