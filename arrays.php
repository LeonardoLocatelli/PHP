<?php
  $vet = array(1,2,"fusca","kombi");
  $lista_carros = array(
                        "fusca"=>5000, 
                        "kombi"=>1000,
                        "Marea"=>2000
                    );

/* definindo o valor novo para o fusca */
     $lista_carros["fusca"] = 6000;

/* chamando h2 html */
  echo "<h2>Vetor 1</h2>";

/*chamando vetor e atribuindo o valor a ele */ 
foreach ($vet as $valor):
    echo $valor . "<br>";
endforeach;

echo "<h2>Vetor 1 - outro for</h2>";
for ($i=0; $i<count($vet); $i++):
    echo $vet[$i] . "<br>";
endfor;

/* situação de quando eu estou passando pelo array associativo sendo aqui ele (lista_carros) 
mostrando a chave q é o carro e o valor  definido */
echo "<h2>Lista de carros </h2>";
foreach($lista_carros as $chave => $valor){
    echo "$chave - $valor <br>";
}





?>