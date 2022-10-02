<?php


namespace App\Controller;


use App\Message\LotMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class AuthenticationController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index(MessageBusInterface $messageBus) : Response
    {
        $msg = new LotMessage("It's here", "It's description");
        $messageBus->dispatch($msg);

        return $this->json([
            'status' => 200,
            'controllerName' => 'authentication_controller2'
        ]);
    }
}