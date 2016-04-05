<?php

namespace LeaderboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotPinkController extends Controller
{
    public function crimzonCloverAction($lien)
    {
        $lien=['lien'=>$lien];
        return $this->render('LeaderboardBundle:crimzonClover:index.html.twig',$lien);
    }
    public function ikarugaAction($color)
    {
        $color=["color" => $color];
        return $this->render('LeaderboardBundle:ikaruga:index.html.twig',$color);
    }
}
