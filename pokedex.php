<?php


class Pokedex{

    public $type;

    function __construct($type = null) {
        $this->type = $type;
    }

    public function getPokedexList($type = null){
        $url = "https://www.canalti.com.br/api/pokemons.json";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        return json_decode(curl_exec($ch));
    }

    public function createViewTable($pokemons){
        $table = '<table width="100%" border=1 align="center" style="font-size: 28px";>';
        $table .='<thead>';
            $table .= '<tr>';
                $table .= '<th>ID</th>';
                $table .= '<th>Name</th>';
                $table .= '<th>Photo</th>';
            $table .= '</tr>';
        $table .='</thead>';
        $table .='<tbody>';
        foreach($pokemons as $pokemon){
            $table .= '<tr align="center">';
                $table .= '<td>'.$pokemon->id.'</td>';
                $table .= '<td>'.$pokemon->name.'</td>';
                $table .= '<td> <img src="'.$pokemon->img.'" /></td>';
            $table .= '</tr>';
        }
        $table .='</tbody>';
        $table .= '</table>';
    
        echo $table;
    }
}

$pokedex = new Pokedex();
$pokemons = $pokedex->getPokedexList();

return $pokedex->createViewTable($pokemons->pokemon);