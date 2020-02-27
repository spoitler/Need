<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class NeedController extends Controller
{

    /**
     * @Route ("/home", name="need_home")
     */

    public function indexAction()
    {
        $message = "hello World ! ";

        return $this->render('need/index.html.twig', array());
    }

    /**
     * @Route ("/marques", name="need_marques")
     */

    public function marquesAction()
    {

        return $this->render('need/marques.html.twig', array());
    }

    /**
     * @Route ("/apropos", name="need_about")
     */

    public function aboutAction()
    {

        return $this->render('need/about.html.twig', array());
    }

    /**
     * @Route ("/contact", name="need_contact")
     */

    public function contactAction()
    {

        return $this->render('need/contact.html.twig', array());
    }




}