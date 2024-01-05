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
    #[Route('/equip/{codi}', name: 'dades_equip')]
    public function fitxa($codi)
    {
        $result = array_filter($this->equips,
        function($equip) use ($codi)
        {
            return $equip['codi'] == $codi;
        });
        if (count($result)>0)
        {
            $resposta = "";
            $result = array_shift($result);
            $resposta .= "<ul><li> Nom: " . $result["nom"] . "</li>" .
            "<li> Cicle: " . $result["cicle"] . "</li>" .
            "<li> Curs: " . $result["curs"] . "</li>" .
            "<li> Membres: " . implode(', ',$result["membres"]) . "</li></ul>";
            return new Response("<html><body>$resposta</body></html>");
            
        }
        else
        {
            return new Response("No s'ha trobat l'equip: $codi");
        }
        
    }
}
?>
