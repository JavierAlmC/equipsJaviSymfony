<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IniciController extends AbstractController
{
    private $equips;
    public function __construct($dadesEquips){
        $this->equips = $dadesEquips->get();
    }
    #[Route('/inici', name: 'inici')]
    public function inici()
    {
        //return new Response('Gestió d’equips del projecte de 2n de DAW');
        return $this->render('inici/inici.html.twig',array('equips'=>$this->equips));
    }
}
?>