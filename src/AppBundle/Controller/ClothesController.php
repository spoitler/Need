<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ClothesController extends Controller
{

    /**
     * @Route ("/homme", name="need_homme")
     */

    public function indexAction()
    {
        return $this->render('homme.html.twig', array());
    }
}
