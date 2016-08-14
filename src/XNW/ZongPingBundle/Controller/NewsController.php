<?php

namespace XNW\ZongPingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    public function indexAction()
    {
        return $this->render('XNWZongPingBundle:News:index.html.twig');
    }
}
