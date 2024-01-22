<?php
namespace App\Service;
class ServeiDadesEquip{
    private $equips=array(array("codi" => "1", "nom" => "Equip Roig", "cicle" =>"DAW", "curs"=>"23/24", "membres" => array("Josep","Alex","Edu","Adri")),
    array("codi" => "2", "nom" => "Equip Blau", "cicle" =>"DAW", "curs"=>"23/24", "membres" => array("Miquel","Javi","Jose","Angel")),
    array("codi" => "3", "nom" => "Equip Verd", "cicle" =>"DAW", "curs"=>"23/24", "membres" => array("Isma","Pablo","Hugo","Joan")),
    array("codi" => "4", "nom" => "Equip Groc", "cicle" =>"DAW", "curs"=>"23/24", "membres" => array("Kiko","Joselu","Jorge","Hector")));

    public function get(){
        return $this->equips;
    }
}
?>