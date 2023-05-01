<?php 

require_once("index.php");
require_once("ataques.php");

// a classe abaixo cria um Squirtle com atributos aleatórios--
class Squirtle extends Pokemon
{
    public function __construct()
    {
        parent::__construct();
        $this->nome = "Squirtle";
        $this->tipo = "água";

        $this->vida = $this->vida + 44;
        $this->ataque += 48;
        $this->defesa += 65;
        $this->ataqueEspecial += 50;
        $this->defesaEspecial += 64;
        $this->velocidade += 43;


        $ataqueList = new AtaquesAgua(); // chama a lista de ataques dos poke de água

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
        // Gera-se um pokemon primeiro usando $squirtle = new Squirtle
        // var_dump($squirtle->ataques[0])
        // esse codigo acima mostra o ataque 1, na posição 0 da lista de ataques do pokemon

        $this->ataques[] = $ataqueList->informacoes[$num_atk[0]];
        $this->ataques[] = $ataqueList->informacoes[$num_atk[1]];
        $this->ataques[] = $ataqueList->informacoes[$num_atk[2]];
        $this->ataques[] = $ataqueList->informacoes[$num_atk[3]];

       
    }
    

    // --------------------------- Ataques ------------------------------
    //lista de ataques que o Squirtle pode usar:
    //
    // Water Gun - 40 de poder base, 100% de precisão
    // Bubble - 40 de poder base, 100% de precisão
    // Aqua Tail - 90 de poder base, 90% de precisão
    // Aqua Jet - 40 de poder base, 100% de precisão, sempre ataca primeiro
    // Hydro Pump - 110 de poder base, 80% de precisão
    // Skull Bash - poder 130, acurácia 100, tipo normal
    // Ice Beam - poder 90, acurácia 100, tipo gelo

    // public function ataques ()
    // {
    //     $AtaquesAGUA = array(
    //         "Water Gun" => [
    //             "dano"      => 40,
    //             "Precissão" => 100,
    //             "tipo"      => "água",
    //             "extra"     => ""
    //         ],
    //         "Bubble" => [
    //             "dano"      => 40,
    //             "Precissão" => 100,
    //             "tipo"      => "água",
    //             "extra"     => ""
    //         ],
    //         "Aqua Tail" => [
    //             "dano"      => 90,
    //             "Precissão" => 90,
    //             "tipo"      => "água",
    //             "extra"     => ""
    //         ],
    //         "Aqua Jet" => [
    //             "dano"      => 40,
    //             "Precissão" => 90,
    //             "tipo"      => "água",
    //             "extra"     => "Ataca primeiro",
    //         ],
    //         "Hydro Pump" => [
    //             "dano"      => 110,
    //             "Precissão" => 80,
    //             "tipo"      => "água",
    //             "extra"     => "",
    //         ],
    //         "Skull Bash" => [
    //             "dano"      => 130,
    //             "Precissão" => 100,
    //             "tipo"      => "normal",
    //             "extra"     => "",
    //         ],
    //         "Ice Bean" => [
    //             "dano"      => 90,
    //             "Precissão" => 100,
    //             "tipo"      => "gelo",
    //             "extra"     => "",
    //         ]

    //     );
    // }

}




?>