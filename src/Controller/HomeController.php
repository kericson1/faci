<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Entity\User;
use App\Form\UserType;
use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ArticlesRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
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
    public function activite(ArticlesRepository $articlerepo)
    {
        return $this->render('home/activites.html.twig', [
            'articles' => $articlerepo->findAll(),
        ]);
    }

    /**
     * @Route("/propos", name="propos")
     */
    public function propos()
    {
        return $this->render('home/propos.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        #$contact = new Contact();
        #$contacts = $this->createForm(ContactType::class, $contact);
        return $this->render('home/contact.html.twig');
    }
}
