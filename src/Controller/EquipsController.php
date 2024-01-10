<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipsController extends AbstractController
{
    private $equips=array(array("codi" => "1", "nom" => "Equip Roig", "cicle" =>"DAW", "curs"=>"23/24", "membres" => array("Josep","Alex","Edu","Adri")),
    array("codi" => "2", "nom" => "Equip Blau", "cicle" =>"DAW", "curs"=>"23/24", "membres" => array("Miquel","Javi","Jose","Angel")),
    array("codi" => "3", "nom" => "Equip Verd", "cicle" =>"DAW", "curs"=>"23/24", "membres" => array("Isma","Pablo","Hugo","Joan")),
    array("codi" => "4", "nom" => "Equip Groc", "cicle" =>"DAW", "curs"=>"23/24", "membres" => array("Kiko","Joselu","Jorge","Hector")));
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
