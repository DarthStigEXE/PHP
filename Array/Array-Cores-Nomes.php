<?php

//Criado por José Augusto Chaves Izabel

//11/02/2020

//Código com a intenção de criar um array, o primeiro com uma lista de cores e o segundo com uma lista de nomes.

$Cores = array("Azul", "Verde", "Vermelho", "Amarelo", "Roxo", "Preto", "Cinza", "Branco", "Laranja", "Bege", "Lilás", "Rosa");
$Nomes = array("Maria", "Edna", "José", "Augusto", "Almir", "Ana", "Luisa", "Roberto", "Ricardo", "Luciana", "Natália", "João");

echo '<strong>Impressão do primeiro número chamado no array "Cores":</strong>'."<br>\n";
echo $Cores[7];
echo "<br>\n";
echo '<strong>Impressão do primeiro número chamado no array "Nomes":</strong>'."<br>\n";
echo $Nomes[3];
echo "<br>\n";
echo '<strong>Impressão do segundo número chamado no array "Cores":</strong>'."<br>\n";
echo $Cores[3];
echo "<br>\n";
echo '<strong>Impressão do segundo número chamado no array "Nomes":</strong>'."<br>\n";
echo $Nomes[7];
?>