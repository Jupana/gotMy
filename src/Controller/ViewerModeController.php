<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ViewerModeController extends AbstractController
{
   
    public function search()
    {
        return $this->render('viewerMode/search.html.twig', [
            'controller_name' => 'VieweModeController',
        ]);
    }

    public function events()
    {
        return $this->render('viewerMode/events.html.twig', [
            'controller_name' => 'VieweModeController',
        ]);
    }
}
