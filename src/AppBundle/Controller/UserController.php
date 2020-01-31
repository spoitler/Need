<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends Controller
{

	/**
	 * @Route ("/user", name="need_user")
	 */

	public function indexAction()
	{
		return $this->render('user.html.twig', array());
	}
}
