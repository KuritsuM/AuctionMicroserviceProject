<?php

namespace App\Controller;

use App\Repository\LotRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AuctionController extends AbstractController
{
    public function __construct(
        private LotRepository $lotRepository
    )
    {
    }

    #[Route('/index', name: 'app_index')]
    public function index() : Response
    {
        $lots = $this->lotRepository->findAll();

        dd($lots);

        return $this->json(
        [
            'dump' => array_count_values($lots)
        ]
    );
        /*return $this->json([
            'status' => 200,
            'controllerName' => 'auction_controller'
        ]);*/
    }
}