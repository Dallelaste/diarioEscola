<?php
//EXERCÍCIOS 1, 2 E 3

$nomes = ['Francisco Souza', 'Guilherme Rosa', 'Arthur Golveia'];

$cliente1 = new stdClass();
$cliente1->nome = $nomes[0];

$cliente2 = new stdClass();
$cliente2->nome = $nomes[1];

$cliente3 = new stdClass();
$cliente3->nome = $nomes[2];

$arrayDeClientes = [$cliente1, $cliente2, $cliente3];

echo $arrayDeClientes[1]->nome."<br>"; //utilizando echo com %arraydeClientes, pegando o segundo dado.

$arrayDeNascimento = [
    'Francisco Souza' => '10-12-1996',
    'Arthur Golveia' => '14-01-2000',
    'Guilherme Rosa' => '26-05-1985',
    'Marcelo Planalto' => '26-05-1985'
]; //adicionando a estrutura $arrayDeNascimento

foreach ($arrayDeClientes as $cliente) {
    if (isset($arrayDeNascimento[$cliente->nome])) {
        $cliente->dataNascimento = $arrayDeNascimento[$cliente->nome];
    }
}//adicionando a data de nascimento dos clientes, somente caso esse cliente já exista.


usort ($arrayDeClientes, function($a, $b){ //usort para comparar
	return (strtotime($a->dataNascimento) > strtotime($b->dataNascimento)); //transformando string em data para fazer a comparação
});

foreach ($arrayDeClientes as $cliente) {
    echo "Nome: " . $cliente->nome . ", Data de Nascimento: " . $cliente->dataNascimento . "<br>"; //utilizando echo para printar no terminal
}
?>
