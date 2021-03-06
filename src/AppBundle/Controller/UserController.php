<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends Controller
{

	/**
	 * @Route ("/profile", name="need_user")
	 */

	public function indexAction()
	{
		return $this->render('need/user.html.twig', array());
	}

	/**
	 * @Route ("/profile/info", name="need_info")
	 */

	public function infoAction()
	{
		return $this->render('need/user_info.html.twig', array());
	}

	/**
	 * @Route ("/profile/modification-password", name="need__modif_password")
	 */

	public function passwordAction()
	{
		return $this->render('need/password_update.html.twig', array());
	}

	/**
	 * @Route ("/profile/commandes", name="need__commandes")
	 */

	public function commandeAction()
	{
		return $this->render('need/commandes.html.twig', array());
	}
}
