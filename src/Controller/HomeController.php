<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/activites", name="activites")
     */
    public function activite()
    {
        return $this->render('home/activites.html.twig');
    }

    /**
     * @Route("/user", name="new_user")
     */
    public function user()
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        return $this->render('user/new.html.twig', ['form'=> $form->createView(),]);
    }
}
