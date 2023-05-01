<?php 

class Pokemon
{
    public $nome;

    public int $vida;
    public int $ataque;
    public int $defesa;
    public int $ataqueEspecial;
    public int $defesaEspecial;
    public int $velocidade;

    public string $tipo;
    protected string $habilidade;

    public $ataques = [];


    public function __construct()
    {
        $this->vida = rand(0, 31);
        $this->ataque = rand(0, 31);
        $this->defesa = rand(0, 31);
        $this->ataqueEspecial = rand(0, 31);
        $this->defesaEspecial = rand(0, 31);
        $this->velocidade = rand(0, 31);

    }


}


// Classe de batalhas
class Batalha
{
    public function turnos($Poke_1, $Atk_1, $Poke_2, $Atk_2){

        $PokeDerrotado = $this->PokeDerrotado($Poke_1, $Poke_2); // puxa a função que verifica os poke derrotado, caso algum esteja derrotado a batalha acaba
        if ($PokeDerrotado != false){
            echo "O pokemon" . $PokeDerrotado->nome . "foi derrotado!";
        }

        $PrimeiroAtacante = $this->PokeVeloz($Poke_1, $Atk_1, $Poke_2, $Atk_2); // puxa a função que verifica qual pokemon é o mais rápido para ver qual atacará primeiro
        if ($PrimeiroAtacante == $Poke_1)
        {
            $PrimeiroDefensor = $Poke_2;
            $PrimeiroAtaque = $Atk_1;
            $SegundoAtaque = $Atk_2;
        }else {
            $PrimeiroDefensor = $Poke_1;
            $PrimeiroAtaque = $Atk_2;
            $SegundoAtaque = $Atk_1;
        }
        // os if else acima verifica os pomkemon com seus ataques e define quem atacará primeiro

        $Dano = $this->Dano ($PrimeiroAtacante, $PrimeiroAtaque, $PrimeiroDefensor);
        
        $PrimeiroDefensor->vida = $PrimeiroDefensor - $Dano;

        // Agora vamos verificar se o Pokemon que foi atacado foi derrotado 
        // se não seguiremos para o segundo ataque
        $PokeDerrotado = $this->PokeDerrotado($Poke_1, $Poke_2); 
        if ($PokeDerrotado != false){
            echo "O pokemon" . $PokeDerrotado->nome . "foi derrotado!";
        }

        // Agora vamos calculora o valor do segundo ataque
        // Cuidar que quem foi defensor no ataque passado agora é quem ataca e vice versa
        $Dano = $this->Dano ($PrimeiroDefensor, $SegundoAtaque, $PrimeiroAtacante);

        $PokeDerrotado = $this->PokeDerrotado($Poke_1, $Poke_2); 
        if ($PokeDerrotado != false){
            echo "O pokemon" . $PokeDerrotado->nome . "foi derrotado!";
        }

       

    }

    public function PokeVeloz ($Poke_1, $Atk_1, $Poke_2, $Atk_2)
    {
        if ($Poke_1->velocidade > $Poke_2->velocidade OR $Poke_1->$Atk_1["extra"] == "Ataca primeiro"){
            return $Poke_1;
        }else{
            return $Poke_2;
        }

    }

    // Ataque : essa função recebe dois valores, o pokemon atacador e o que irá receber o dano
    // mostra os ataques possíveis do atacante e faz o cálculo do dano recebido no outro pokemon


    // ------ Variável de dano dentro de array ataque --------------------------------------
    // para pegar o valor de dano do ataque que o pokemon tem é preciso usar o seguinte código:
    // $temp = $charmander->ataques[0]["dano"];
    // esse código atribui a variável $temp o valor do dano de charmander 
    // é um exemplo para entender como foi pego os valores de dano
    //
    // Como o ataque já nos foi passado não vamos usar a estrutura:    ataques[0]["dano"]
    // Pois ataques[0] já foi passado, então para pegar o valor do dano usamos somente:
    // $Ataque["dano"]     ---- $nomeDaVariávelDoAtaque["dano"]
    // -----------------------------------------------------------------------------------------

    public function Dano ($Poke_atacante, $Ataque, $Poke_defensor) 
    {
        // Cálculo de Dano:     -----------------------------------------------------------------
        // O Cálculo a seguir é o usado para calcular o dano de um pokemon, não é exatamente o calcuo correto mas por enquanto será usado
        // ((Poder de Ataque x Dano de Ataque / 4) / defesa) x Multiplicadores
        // --------------------------------------------------------------------------------------

        // Cálculo do Dano do ataque ----
        $Dano = ((($Ataque["dano"] * $Poke_atacante->ataque) / 4) / $Poke_defensor->defesa);
        
        // Multiplicador de Super Efetividade ----
        if ($this->SuperEfetivo($Poke_atacante->tipo, $Poke_defensor->tipo) == "Super Efetivo")
        {
            $Dano = $Dano * 1.5;
        }

        // Multiplicador de Pouco Efetividade ----
        $pouco = $this->PoucoEfetivo($Poke_atacante->tipo, $Poke_defensor->tipo);
        if ($pouco == "Pouco Efetivo")
        {
            $Dano = $Dano * 0.5;
        }

        // Multiplicador de Tipos iguais ----
        if ($Poke_atacante->tipo == $Ataque["tipo"] )
        {
            $Dano = $Dano * 1.5;
        }
        // O Dano já foi calculado

        return $Dano; // Retorna o Dano causado

    }


    public function SuperEfetivo ($tipo_1, $tipo_2)
    {

        // Grama x Água
        if ($tipo_1 == "grama" AND $tipo_2 == "água")
        {
            return true;
        }

        // Água x Fogo
        if ($tipo_1 == "água" AND $tipo_2 == "fogo")
        {
            return true;
        }

        // Fogo x Grama
        if ($tipo_1 == "fogo" AND $tipo_2 == "grama")
        {
            return true;
        }
    }

    // essa função verifica se o pokemon atacante tem desvantagem contra o defensor
    public function PoucoEfetivo ($tipo_1, $tipo_2)
    {
        //Água x Grama
        if ($tipo_1 == "água" AND $tipo_2 == "grama")
        return true;

        // Fogo x Água
        if ($tipo_1 == "fogo" AND $tipo_2 == "água")
        {
            return true;
        }

        // Grama x Fogo
        if ($tipo_1 == "grama" AND $tipo_2 == "fogo")
        return true;
    }

    public function PokeDerrotado ($Poke_1, $Poke_2){ // verifica se um dos pokemon está derrotado, caso esteja será retornado, caso contrário será retornado o valor False
        if ($Poke_1->vida <= 0 OR $Poke_2->vida <= 0){
            if ($Poke_1->vida <= 0){// Verifica se o primeiro pokemon está derrotado
                return $Poke_1;

            }else if ($Poke_2->vida <= 0){// Verifica se o segundo pokemon está derrotado
                return $Poke_2;


        }else {
            return false;
        }
        }
    }
}


