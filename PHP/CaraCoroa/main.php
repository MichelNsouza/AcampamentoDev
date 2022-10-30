<?php

echo "Cara ou Coroa\n";

$njogador = readline("indentifique-se: ");

echo  "Oi {$njogador}, você escolhe CARA ou COROA?\n";

do {

  $escolha = (int) readline ("Digite 0 para CARA e 1 para COROA: ");

}while($escolha !== 0 && $escolha !== 1);

$sort = rand(0, 1);

if($sort === $escolha){
 echo "Você ganhou!"; 
} else {
  echo "Eu ganhei de você!!!";
}
