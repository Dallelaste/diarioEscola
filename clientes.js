// EXERCICIOS 1 E 2


var clientes = [
    {
        id: 1,
        nome: 'Luis Santos Silveira',
        idade: 18
    },
    {
        id: 2,
        nome: 'Ricardo Lopes Alves',
        idade: 30
    },
    {
        id: 3,
        nome: 'Gustavo Silva Junior',
        idade: 26
    }
];

var numero = "5(1)9-876-543-21";

clientes.forEach(cliente => //utilizando clientes para informação
    {
        var nomes = cliente.nome.split (' '); //formatar o nome, retirando espaçoes
        var primeiroNome = nomes[0]; //primeira string
        var ultimoSobrenome = nomes[nomes.length - 1]; //adquirindo a última string (elementos do array - 1)
        console.log(`${ultimoSobrenome}, ${primeiroNome}`);
    }   
);

var numeroLimpo = numero.replace(/\D/g, '') //formatando, retirando todos os não-dígitos

var numeroCorreto = `(${numeroLimpo.slice(0,2)})_${numeroLimpo.slice(2, 3)}_${numeroLimpo.slice(3,7)}-${numeroLimpo.slice(7)}`//utilizando slice para formatar de maneira adequada

console.log(numeroCorreto)

/* EXERCÍCIO 3

A função é: c
A função é: d

EXERCÍCIO 4

Sim, existem erros. A função b não é chamada pois é usado o return antes do alertUser. De modo similar, a função a não é chamada porque
a função d nunca acaba de fato, impossibilitando a chamada de a após o awaitd().
*/
