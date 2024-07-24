--Exercício 1

-- A
INSERT INTO Aluno (Id, Nome)
VALUES (1, "Lucas") --inserindo id e nome no aluno

INSERT INTO Responsavel(Id, Nome)
VALUES (1, "Pablo") --inserindo id e nome no pai

INSERT INTO Parentesco(IdResponsavel, IdAluno, Parentesco)
VALUES (1, 1, "Pai") --adicionando relação de pai e filho

--B
INSERT INTO Responsavel(Id, Nome)
VALUES (2, "Brenda") --adicionando id e nome na mãe

INSERT INTO Parentesco(IdResponsavel, IdAluno, Parentesco)
VALUES (2, 1, "Mãe") --adicionando relação de mãe e filho

--EXERCÍCIO 2

SELECT Aluno.Nome, Aluno.Id, Responsavel1.Nome, Responsavel1.Id, Parentesco1.Nome, Parentesco1.Id, Responsavel2.Nome, Responsavel2.Id, Parentesco2.Nome, Parentesco2.Id --selecionando todas tabelas necessárias
from Aluno
INNER JOIN Parentesco Parentesco1 ON Aluno.Id = Parentesco1.IdAluno --utilizando innerjoin para extrair dados
INNER JOIN Parentesco Parentesco2 ON Aluno.Id = Parentesco2.IdAluno and Parentesco1.Id != Parentesco2.Id
INNER JOIN Responsavel Responsavel1 ON Parentesco1.IdResponsavel = Responsavel1.Id
INNER JOIN Responsavel Responsavel2 ON Parentesco2.IdResponsavel = Responsavel2.Id

