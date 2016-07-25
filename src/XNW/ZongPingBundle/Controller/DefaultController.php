<?php

namespace XNW\ZongPingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('XNWZongPingBundle:Default:index.html.twig');
    }

    public function fooAction()
    {
        return $this->render('XNWZongPingBundle:Default:index.html.twig');
    }
}
