<?php

namespace App\MessageHandler;

use App\Entity\Lot;
use App\Message\LotMessage;
use App\Repository\LotRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class LotMessageHandler
{
    public function __construct(
        private LotRepository $lotRepository,
        private EntityManagerInterface $em
    )
    {
    }

    public function __invoke(LotMessage $lotMessage) {
        $lot = new Lot();
        $lot->setTitle($lotMessage->getTitle());
        $lot->setDescription($lotMessage->getDescription());

        $this->lotRepository->save($lot, flush: true);

        //$this->em->persist($lot);
        //$this->em->flush();
        fwrite(STDOUT, 'something  something');
    }
}