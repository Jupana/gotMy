<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ViewerModeController extends AbstractController
{
   
    public function search()
    {
        return $this->render('viewerMode/search/search.html.twig', [
            'controller_name' => 'VieweModeController',
        ]);
    }

    public function events()
    {
        return $this->render('viewerMode/events/events.html.twig', [
            'controller_name' => 'VieweModeController',
        ]);
    }

    public function eventId()
    {
        return $this->render('viewerMode/events/eventId.html.twig', [
            'controller_name' => 'VieweModeController',
        ]);
    }

    public function messages()
    {
        return $this->render('viewerMode/messages/messages.html.twig', [
            'controller_name' => 'VieweModeController',
        ]);
    }
}
