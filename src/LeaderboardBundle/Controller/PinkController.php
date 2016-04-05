<?php

namespace LeaderboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PinkController extends  Controller
{
    public function deathsmilesAction()
    {
        return $this->render('LeaderboardBundle:deathsmiles:index.html.twig');
    }
    public function mushihimesamaAction()
    {
        return $this->render('LeaderboardBundle:mushihimesama:index.html.twig');
    }
}
