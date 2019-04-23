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

    public function createMessage()
    {
        return $this->render('viewerMode/messages/messages_parts/createMessage.html.twig', [
            'controller_name' => 'VieweModeController',
        ]);
    }

    public function requestMeeting()
    {
        return $this->render('viewerMode/messages/messages_parts/requestMeeting.html.twig', [
            'controller_name' => 'VieweModeController',
        ]);
    }

    public function viewRequestMeeting()
    {
        return $this->render('viewerMode/messages/messages_parts/viewRequestMeeting.html.twig', [
            'controller_name' => 'VieweModeController',
        ]);
    }

    public function influencerProfil()
    {
        return $this->render('viewerMode/profil/index.html.twig', [
            'controller_name' => 'VieweModeController',
        ]);
    }

    public function chat()
    {
        return $this->render('viewerMode/messages/messages_parts/chat.html.twig', [
            'controller_name' => 'VieweModeController',
        ]);
    }
}
