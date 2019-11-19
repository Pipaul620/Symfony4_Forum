<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{

    public function login(AuthenticationUtils $utils): Response
    {
        $error = $utils->getLastAuthenticationError();
        $lastLogin = $utils->getLastUsername();
        return $this->render('pages/login.html.twig',[
            'last_username' => $lastLogin,
            'error' => $error
        ]);
    }

    public function register(): Response
    {
        return $this->render('pages/register.html.twig');
    }

}