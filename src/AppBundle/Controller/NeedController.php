<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class NeedController extends Controller
{

    /**
     * @Route ("/home", name="need_index")
     */


    public function indexAction()
    {
        $message = "hello World ! ";

        return $this->render('index.html.twig', array('message' => $message));
    }
}