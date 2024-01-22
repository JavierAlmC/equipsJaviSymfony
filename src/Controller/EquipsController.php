<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipsController extends AbstractController
{
    private $equips;
    public function __construct($dadesEquips){
        $this->equips = $dadesEquips->get();
    }
    #[Route('/equip/{codi?1}', name: 'dades_equips')]
    public function fitxa($codi)
    {
        $result = array_filter($this->equips,
        function($equip) use ($codi)
        {
            return $equip['codi'] == $codi;
        });
        if (count($result)>0)
        {
            $result = array_shift($result);
            //return new Response("<html><body>$resposta</body></html>");
            return $this->render('equips/dades_equip.html.twig',
        array('equip' => $result));
            
        }
        else
        {
            return $this->render('equips/dades_equip.html.twig',
        array('equip' => NULL));
        }
        
    }
}
?>
