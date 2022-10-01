<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthenticationController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index() : Response
    {
        return $this->json([
            'status' => 200,
            'controllerName' => 'authentication_controller'
        ]);
    }
}