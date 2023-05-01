<?php 

class AtaquesAgua 
{
    public $informacoes;

    public function __construct()
    {
        $this->informacoes = array(
            // 0
            [
                "nome"      => "Water Gun", 
                "dano"      => 40,
                "Precissão" => 100,
                "tipo"      => "água",
                "extra"     => ""
            ],
            // 1
            [
                "nome"      => "Bubble",
                "dano"      => 40,
                "Precissão" => 100,
                "tipo"      => "água",
                "extra"     => ""
            ],
            // 2
            [
                "nome"      => "Aqua Tail",
                "dano"      => 90,
                "Precissão" => 90,
                "tipo"      => "água",
                "extra"     => ""
            ],
            // 3
            [
                "nome"      => "Aqua Jet",
                "dano"      => 40,
                "Precissão" => 90,
                "tipo"      => "água",
                "extra"     => "Ataca primeiro",
            ],
            // 4
            [
                "nome"      => "Hydro Pump",
                "dano"      => 110,
                "Precissão" => 80,
                "tipo"      => "água",
                "extra"     => "",
            ],
            // 5
            [
                "nome"      => "Skull Bash",
                "dano"      => 130,
                "Precissão" => 100,
                "tipo"      => "normal",
                "extra"     => "",
            ],
            // 6
            [
                "nome"      => "Ice Bean",
                "dano"      => 90,
                "Precissão" => 100,
                "tipo"      => "gelo",
                "extra"     => "",
            ]
        );
    }


    public function getInformacoes() {
        return $this->informacoes;
    }


}


// Ataques de GRAMA -----------------------
class AtaquesGrama 
{
    public $informacoes;

    public function __construct()
    {
        $this->informacoes = array(
            // 0
            [
                "nome"      => "Chicote de Vinha",
                "dano"      => 45,
                "Precissão" => 100,
                "tipo"      => "grama",
                "extra"     => "",
            ],
            // 1
            [
                "nome"      => "Raio Solar",
                "dano"      => 120,
                "Precissão" => 100,
                "tipo"      => "grama",
                "extra"     => "",
            ],
            // 2
            [
                "nome"      => "Pó Venenoso",
                "dano"      => 0,
                "Precissão" => 75,
                "tipo"      => "veneno",
                "extra"     => "envenena o oponente",
            ],
            // 3
            [
                "nome"      => "Dormir",
                "dano"      => 0,
                "Precissão" => 75,
                "tipo"      => "normal",
                "extra"     => "induz o sono no oponente",
            ],
            // 4
            [
                "nome"      => "Raio de Semente",
                "dano"      => 25,
                "Precissão" => 100,
                "tipo"      => "grama",
                "extra"     => "acerta o oponente 2 a 5 vezes",
            ],
            // 5
            [
                "nome"      => "Síntese",
                "dano"      => 0,
                "Precissão" => 100,
                "tipo"      => "grama",
                "extra"     => "cura 50% dos pontos de vida do usuário",
            ],
            // 6
            [
                "nome"      => "Pancada",
                "dano"      => 40,
                "Precissão" => 100,
                "tipo"      => "normal",
                "extra"     => "",
            ]
        );
    }


    public function getInformacoes() {
        return $this->informacoes;
    }

}

//Ataques FOGO --------------

class AtaquesFogo 
{
    public $informacoes;

    public function __construct()
    {
        $this->informacoes = array(
            // 0
            [    
                "nome"      => "Chama",
                "dano"      => 40,
                "precisão"  => 100,
                "tipo"      => "Fogo",
                "extra"     => ""
            ],
            // 1
            [
                "nome"      => "Brasas",
                "dano"      => 50,
                "precisão"  => 100,
                "tipo"      => "Fogo",
                "extra"     => "queimadura"
            ],
            // 2
            [
                "nome"      => "Lança-Chamas",
                "dano"      => 90,
                "precisão"  => 75,
                "tipo"      => "Fogo",
                "extra"     => "queimadura"
            ],
            // 3
            [
                "nome"      => "Garra de Metal",
                "dano"      => 80,
                "precisão"  => 95,
                "tipo"      => "Aço",
                "extra"     => ""
            ],
            // 4
            [
                "nome"      => "Ataque Rápido",
                "dano"      => 40,
                "precisão"  => 100,
                "tipo"      => "Normal",
                "extra"     => "Ataca primeiro"
            ],
            // 5
            [
                "nome"      => "Raio Solar",
                "dano"      => 120,
                "precisão"  => 100,
                "tipo"      => "Grama",
                "extra"     => "Requer 1 turno de carga"
            ],
            // 6
            [
                "nome"      => "Mega Punch",
                "dano"      => 80,
                "precisão"  => 85,
                "tipo"      => "Normal",
                "extra"     => ""
            ]
        );
    }
}

?>