<?php 

require_once("index.php");
require_once("ataques.php");



// a classe abaixo cria um Bulbasaur
class Bulbasaur extends Pokemon
{
    public function __construct()
    {
        parent::__construct();
        $this->tipo = "grama";

        $this->vida += 45;
        $this->ataque += 49;
        $this->defesa += 49;
        $this->ataqueEspecial += 65;
        $this->defesaEspecial += 65;
        $this->velocidade += 45;


        // --- Ataques ----
        $ataqueList = new AtaquesGrama(); // chama a lista de ataques dos poke de água
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
        // Gera-se um pokemon primeiro usando Squirtle = new Squirtle
        // var_dump($squirtle->ataques[0])
        // esse codigo acima mostra o ataque 1, na posição 0 da lista de ataques do pokemon

        $this->ataques[] = $ataqueList->informacoes[$num_atk[0]];
        $this->ataques[] = $ataqueList->informacoes[$num_atk[1]];
        $this->ataques[] = $ataqueList->informacoes[$num_atk[2]];
        $this->ataques[] = $ataqueList->informacoes[$num_atk[3]];




        $this->habilidade = 'Overgrow';
    }    


    // public function ataques ()
    // {
    //     $ataques_bulbasaur = [
    //         "Chicote de Vinha" => [
    //             "dano" => 45,
    //             "Precissão" => 100,
    //             "tipo" => "grama",
    //             "extra" => "",
    //         ],
    //         "Raio Solar" => [
    //             "dano" => 120,
    //             "Precissão" => 100,
    //             "tipo" => "grama",
    //             "extra" => "",
    //         ],
    //         "Pó Venenoso" => [
    //             "dano" => 0,
    //             "Precissão" => 75,
    //             "tipo" => "veneno",
    //             "extra" => "envenena o oponente",
    //         ],
    //         "Dormir" => [
    //             "dano" => 0,
    //             "Precissão" => 75,
    //             "tipo" => "normal",
    //             "extra" => "induz o sono no oponente",
    //         ],
    //         "Raio de Semente" => [
    //             "dano" => 25,
    //             "Precissão" => 100,
    //             "tipo" => "grama",
    //             "extra" => "acerta o oponente 2 a 5 vezes",
    //         ],
    //         "Síntese" => [
    //             "dano" => 0,
    //             "Precissão" => 100,
    //             "tipo" => "grama",
    //             "extra" => "cura 50% dos pontos de vida do usuário",
    //         ],
    //         "Pancada" => [
    //             "dano" => 40,
    //             "Precissão" => 100,
    //             "tipo" => "normal",
    //             "extra" => "",
    //         ],
    //         "Raízes Sugadoras" => [
    //             "dano" => 75,
    //             "Precissão" => 100,
    //             "tipo" => "grama",
    //             "extra" => "cura metade do dano causado ao usuário",
    //         ]
    //     ];
    // }
}

// $teste = new Squirtle;
// var_dump($teste);


?>