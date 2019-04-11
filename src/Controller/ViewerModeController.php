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

    public function findByCategory()
    {
        return $this->render('viewerMode/search/findByCategory.html.twig', [
            'controller_name' => 'VieweModeController',
        ]);
    }

    public function events()
    {
        return $this->render('viewerMode/events/events.html.twig', [
            'controller_name' => 'VieweModeController',
        ]);
    }

    public function eventLiveId()
    {
        return $this->render('viewerMode/events/eventLiveId.html.twig', [
            'controller_name' => 'VieweModeController',
        ]);
    }

    public function eventUpcomingId()
    {
        return $this->render('viewerMode/events/eventUpcomingId.html.twig', [
            'controller_name' => 'VieweModeController',
        ]);
    }

    public function eventVideoId()
    {
        return $this->render('viewerMode/events/eventVideoId.html.twig', [
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
