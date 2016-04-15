<?php

namespace PAI\ParcelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PAIParcelBundle:Default:index.html.twig');
    }
}
