<?php

$Hello = "Hello";

$World = "World";

$Ponto = "!!!";

$HelloWorld = $Hello." ".$World." ".$Ponto;

echo "<strong>Impressão da variável 'Hello' sem qualquer alteração:</strong><br>\n";

echo $Hello."<br>\n";

echo "<strong>Impressão da variável 'World' sem qualquer alteração:</strong><br>\n";

echo $World."<br>\n";

echo "<strong>Impressão da variável 'Ponto' sem qualquer alteração:</strong><br>\n";

echo $Ponto."<br>\n";

unset ($Hello, $Ponto);

echo "<strong>Impressão da variável 'Hello' após passar por um 'Unset' (Erro):</strong><br>\n";

echo $Hello;

echo "<br><strong>Impressão da variável 'Ponto' após passar por um 'Unset (Erro):'</strong><br>\n";

echo $Ponto;

echo "<br><strong>Impressão das variáveis 'Hello', 'World', 'Ponto'(Erro nas variáveis 'Hello' e 'Ponto', irá imprimir a variável 'World'):</strong><br>\n";

echo "<br>".$Hello." ".$World." ".$Ponto. "<br/>\n";

echo "<strong>Impressão da variável 'HelloWorld', sem qualquer alteração:</strong><br>\n";

echo $HelloWorld ."<br/>\n";

echo "<strong>Impressão da variável 'World', sem qualquer alteração:</strong><br>\n";

echo $World."<br/>\n";

unset ($HelloWorld);

echo "<strong>Impressão da variável 'HelloWorld' após passar por um 'Unset' (Erro):</strong><br>\n";

echo $HelloWorld;

?>