<?php 

require_once("pokesAGUA.php");
require_once("pokesGRAMA.php");
require_once("pokesFOGO.php");
require_once("index.php");


$squirtle = new Squirtle;
$bulbasaur = new Bulbasaur;
$charmander = new Charmander;


echo "GERANDO UM SQUIRTLE";
//var_dump($squirtle);
echo "\n";

ECHO "GERANDO UM BULBASAUR";
//var_dump($bulbasaur);
echo "\n";

ECHO "GERANDO UM CHARMANDER";
// var_dump($charmander);
// echo "\n";


// echo $charmander->vida;
// var_dump($charmander->ataque_1);


// Testando as Batalhas:

$Batalha = new Batalha;

// --------- PokeVeloz ---------
// teste de PokeVeloz - Deve retornar um dos pokemon gerados 
// não cofundir que o pokemon que será retornado será todo seu conteúdo e não somente seu nome
var_dump( $Batalha->PokeVeloz($charmander, $charmander->ataques[0], $squirtle, $squirtle->ataques[2]));

// --------- PokeDerrotado ---------
// teste de pokemon derrotado
// Vai retornar null se nenhum dos pokemon estiver derrotado
var_dump($Batalha->PokeDerrotado($charmander,$squirtle));

// --------- Super Efetivo ---------
// testando se o verificador de supereefetividade funciona
// Deve retornar Super Efetivo pois o Squirtle é super efetivo contra o charmander
echo "Super Efetivo ---";
$temp = ($Batalha->SuperEfetivo($squirtle->tipo, $charmander->tipo));
$CT = $charmander->tipo;
$ST = $squirtle->tipo;
echo $ST;
echo $CT;
echo $temp;
echo "\n";

// --------- Pouco Efetivo ---------
// testando se o verificador de Pouca efetividade funciona
// Deve retornar Pouco Efetivo pois o Charmander é pouco efetivo contra o Squirtle
echo "Pouco Efetivo ---";
$pouco = ($Batalha->PoucoEfetivo($charmander->tipo, $squirtle->tipo,));
echo $pouco;
echo "\n";

// --------- Ataque ---------
// testando se o calculador de dano de ataque funciona
// Deve retornar Pouco Efetivo pois o Charmander é pouco efetivo contra o Squirtle
echo "----------------------------------- \n";
echo "Cálculo de Dano";
echo "\n";
$temp = ($Batalha->Dano($charmander, $charmander->ataques[0], $squirtle));
echo $temp;
echo "\n";

echo "Ataque charmander ";
$ataque = $charmander->ataques[0];
var_dump($ataque);

echo "Ataque: ";
$atak = $charmander->ataque;
echo $atak . "\n";
echo "Defesa: ";
$defesa = $squirtle->defesa;
echo $defesa;

// Estou indo dormir pois estou morrendo de sono, lembrar de arrumar o retorno dos valores das funções que verificão super efetividade 
// Boa noite.
?>