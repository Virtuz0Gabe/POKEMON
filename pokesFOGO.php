<?php 

require_once("index.php");



// a classe abaixo cria um charmander
class Charmander extends Pokemon
{
    public function __construct()
    {
        parent::__construct();
        $this->tipo = "fogo";

        $this->vida += 39;
        $this->ataque += 52;
        $this->defesa += 43;
        $this->ataqueEspecial += 60;
        $this->defesaEspecial += 50;
        $this->velocidade += 65;


        // --- Ataques ----
        $ataqueList = new AtaquesFogo(); // chama a lista de ataques dos poke de água
        // sistema de repetição que gera 4 numeros aleatórios diferentes:
        $num_atk = array();
        while (count($num_atk) < 4){ // vai fazer a repetição até que o array tenha tamanho 4
            $temp = rand(0,6);
            if (!in_array($temp, $num_atk)){ // verifica se o número aleatório já está no array, se tiver ele não adiciona, se não tiver ele adicona
                $num_atk[] = $temp; // adiciona mais um valor no array (o número aleatório)
            }
        }



        
        // adicionando os ataques aleatórios gerados no pokemon

        // O código abaixo seta os ataques da lista de ataque dos poke de água
        // são gerados 4 números aleatórios diferentes, esse números representam a um ataque da lista de ataques
        // Por exemplo o Número aleatório gerado 2, representa o ataque na posição 2 (3* posição da lista), isso acontece 4 vezes gerando 4 ataques 
        // aleatórios para o pokemon

        // Para acessar o valor do ataque que foi gerado faz-se o seguinte:
        // Gera-se um pokemon primeiro usando $charmander = new Charmander
        // var_dump($charmander->ataques[0])
        // esse codigo acima mostra o ataque 1, na posição 0 da lista de ataques do pokemon

        $this->ataques[] = $ataqueList->informacoes[0];
        $this->ataques[] = $ataqueList->informacoes[$num_atk[1]];
        $this->ataques[] = $ataqueList->informacoes[$num_atk[2]];
        $this->ataques[] = $ataqueList->informacoes[$num_atk[3]];


    }    


    // ---------------- Ataques ------------------

    //queimadura = 10% de queimar 

    // public function ataques ()
    // {
    //     $AtaquesFogo = [    
    //         "Chama" => [
    //             "dano" => 40,
    //             "precisão" => 100,
    //             "tipo" => "Fogo",
    //             "extra" => ""
    //         ],
    //         "Brasas" => [
    //             "dano" => 50,
    //             "precisão" => 100,
    //             "tipo" => "Fogo",
    //             "extra" => "queimadura"
    //         ],
    //         "Lança-Chamas" => [
    //             "dano" => 90,
    //             "precisão" => 75,
    //             "tipo" => "Fogo",
    //             "extra" => "queimadura"
    //         ],
    //         "Garra de Metal" => [
    //             "dano" => 80,
    //             "precisão" => 95,
    //             "tipo" => "Aço",
    //             "extra" => ""
    //         ],
    //         "Ataque Rápido" => [
    //             "dano" => 40,
    //             "precisão" => 100,
    //             "tipo" => "Normal",
    //             "extra" => ""
    //         ],
    //         "Raio Solar" => [
    //             "dano" => 120,
    //             "precisão" => 100,
    //             "tipo" => "Grama",
    //             "extra" => "Requer 1 turno de carga"
    //         ],
    //         "Mega Punch" => [
    //             "dano" => 80,
    //             "precisão" => 85,
    //             "tipo" => "Normal",
    //             "extra" => ""
    //         ]
        // ];
    // }

}


?>