<?php
 
/**
 * 
 * TODO: 1. Crie três variáveis para armazenar o seu nome, idade e esporte predileto.
 * 
 * TODO: 2. Crie um array com três tecnologias que você pretende aprender.
 * 
 * TODO: 3. Converta a variável com a idade para string e mostre com var_dump o valor dela antes e depois da conversão.
 * 
 * TODO: 4. Imprima na tela os valores de nome, idade e esporte predileto criados no escopo global por meio de uma função.
 * 
 */
 
 /**
  * TODO: 1. Crie três variáveis para armazenar o seu nome, idade e esporte predileto.
  */
  $nome = "João Batista";
  $idade = 21;
  $esporte = "Golfe";
 
  /**
   * TODO: 2. Crie um array com três tecnologias que você pretende aprender.
   */
  $tecnologias = ["PHP8", "JAVASCRIPT", "BOOTSTRAP5"];
 
  /**
   * TODO: 3. Converta a variável com a idade para string e mostre com var_dump o valor dela antes e depois da conversão.
   */
  $idadeString = (string) $idade;
  var_dump($idade);
  var_dump($idadeString);
 
  /**
   * TODO: 4. Imprima na tela os valores de nome, idade e esporte predileto criados no escopo global por meio de uma função.
   */
  function exibirGlobal(){
 
    global $nome,$idade,$esporte;
 
    echo "<hr>O nome escrito é: ".$nome."<br />";
    echo "A idade digitada é: ".$idade." anos.<br />";
    echo "O esporte predileto é: ".$esporte;
  }
  exibirGlobal();