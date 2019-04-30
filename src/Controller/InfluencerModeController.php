<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InfluencerModeController extends AbstractController
{
   
    public function influencerView()
    {
        return $this->render('influencerMode/index.html.twig', [
            'controller_name' => 'InfluencerModeController',
        ]);
    }

    public function influencerInfo()
    {
        return $this->render('influencerMode/influencerInfo.html.twig', [
            'controller_name' => 'InfluencerModeController',
        ]);
    }

    public function influencerProfil()
    {
        return $this->render('influencerMode/influencerProfil.html.twig', [
            'controller_name' => 'InfluencerModeController',
        ]);
    }
    public function influencerState()
    {
        return $this->render('influencerMode/stats/stats.html.twig', [
            'controller_name' => 'InfluencerModeController',
        ]);
    }
}
