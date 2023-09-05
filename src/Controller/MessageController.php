<?php

namespace App\Controller;

use App\Repository\MessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    #[Route('/', name: 'app_message')]
    public function index(MessageRepository $repoMessage): Response
    {
        $messages = $repoMessage->findAll();
       
        return $this->render('message/index.html.twig', [
            'controller_name' => 'MessageController',
            'messages' => $messages,
        ]);
    }
}
