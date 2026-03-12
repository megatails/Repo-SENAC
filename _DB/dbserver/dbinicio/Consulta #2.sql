SHOW TABLES /* Mostra as tableas que existem no banco de dados*/

/* Busca um dado dentro de uma tabela*/
SELECT * FROM animal
SELECT * FROM cliente

INSERT INTO animal /* Insere dados dentro de uma tabela*/

/* exemplo*/
INSERT INTO animal (idCliente, nmAnimal, especie, raca, peso, porte, sexo, anoNascimento)
VALUES (1, 'Bolota', 'Cachorro', 'Lhasa Apso', 24.6, 'p', 'f', '2012/07/03')

INSERT INTO animal (idCliente, nmAnimal, especie, raca, peso, porte, sexo, anoNascimento)
VALUES (2, 'floquinho', 'Cachorro', 'Lhasa Apso', 31.0, 'p', 'm', '1995/01/02')

INSERT INTO animal (idCliente, nmAnimal, especie, raca, peso, porte, sexo, anoNascimento)
VALUES (3, 'Toby', 'Cachorro', 'Shitzu', 16.7, 'p', 'm', '2011/07/03')

INSERT INTO animal (idCliente, nmAnimal, especie, raca, peso, porte, sexo, anoNascimento)
VALUES (4, 'Mia', 'Gato', 'Desconhecido', 24.6, 'p', 'f', '2015/07/03')

INSERT INTO animal (idCliente, nmAnimal, especie, raca, peso, porte, sexo, anoNascimento)
VALUES (5, 'Shira', 'Gato', 'bombaim', 32.2, 'p', 'f', '2013/01/01')

INSERT INTO animal (idCliente, nmAnimal, especie, raca, peso, porte, sexo, anoNascimento)
VALUES (5, 'Elita', 'Gato', 'Rajado', 10.0, 'p', 'f', '2026/01/16')

INSERT INTO animal (idCliente, nmAnimal, especie, raca, peso, porte, sexo, anoNascimento)
VALUES (2, 'Bidu', 'Cachorro', 'Schnauzer', 16.0, 'p', 'm', '1983/01/21')


UPDATE animal
SET anoNascimento = '2012/07/03'
WHERE idAnimal = 2

INSERT INTO cliente (nomeCliente, cpf, celular, email, cidade, estado, cep, nomeLogradouro, numero, complemento)
VALUES ('Rodrigo', '12332112323', '13445533226', 'abc@def.com', 'santos', 'sp', '11075401', 'Rua Pedro Americo', '231', 'apto a')

UPDATE cliente
SET nomeCliente = 'Rodrigo Leite', complemento = 'Apto a bloco b'
WHERE idCliente = 1

INSERT INTO cliente (nomeCliente, cpf, celular, email, cidade, estado, cep, nomeLogradouro, numero, complemento)
VALUES ('Fernandes', '34554334567', '66117824561', 'bob@lapis.com', 'santos', 'sp', '11070021', 'Rua Benedito Ernesto Guimaraes', '666', 'casa')

INSERT INTO cliente (nomeCliente, cpf, celular, email, cidade, estado, cep, nomeLogradouro, numero, complemento)
VALUES ('Walter', '99988800012', '63468289164', 'paup@itz.com', 'santos', 'sp', '00000000', 'Unknown', '000', 'apto 0')

INSERT INTO cliente (nomeCliente, cpf, celular, email, cidade, estado, cep, nomeLogradouro, numero, complemento)
VALUES ('Juca', '42006906700', '12345678900', 'juca@enterprise.com', 'santos', 'sp', '00000000', 'Av Conselheiro Nebias', '000', 'SENAC')

INSERT INTO cliente (nomeCliente, cpf, celular, email, cidade, estado, cep, nomeLogradouro, numero, complemento)
VALUES ('Gabriel Catela Garcia', '66699944432', '13998877666', 'bielbiel@uol.com.br', 'santos', 'sp', '11070000', 'Rua Carlos Gomes', '000', 'apto 0')

INSERT INTO veterinario
(nmVeterinario, crmv, celular, especialidade)
VALUES 
('Hugo Costa', '12345SP','13988745265','Cirurgia Veterinaria'),
('Cristina Mendes','54321RJ', '219854615322', 'Ortopedia Veterinaria'),
('José Manuel Lopez Mendonça', '54874SP', '1398565412', 'Cardiologia Veterinaria');

UPDATE veterinario SET nmVeterinario = 'Cristina Mendes' WHERE idVeterinario = 2

SELECT * FROM veterinario


INSERT INTO tipoServico (nmServico , valor)
VALUES 
('Banho/Tosa' , 90.00),
('Castração' , 200.00),
('Vacina' , 150.00),
('MicroChipagem' , 300.00),
('Ultrasom', 350.00);

INSERT INTO consulta
(idAnimal, idVeterinario, dataHora, pago, formaPagto, qtdVezes, valorTotal, valorPago)
VALUES
(
(SELECT idAnimal FROM animal WHERE nmAnimal = 'Bidu'),
1,
NOW(),
1,
'Cartão',
1,
150.00,
150.00
);
INSERT INTO consulta
(idAnimal, idVeterinario, dataHora, pago, formaPagto, qtdVezes, valorTotal, valorPago)
VALUES
(
(SELECT idAnimal FROM animal WHERE nmAnimal = 'Bidu'),
1,
NOW(),
1,
'Pix',
1,
90.00,
90.00
);

INSERT INTO consulta (idAnimal, idVeterinario, dataHora, pago, formaPagto, qtdVezes, valorTotal, valorPago)
VALUES
(2, 2, '2026-03-10 14:30:00', 0, 'Dinheiro', '0', 90.00, NULL),
(3, 2, '2026-01-25 09:00:00', 1, 'Pix', '0', 150.00, 150.00), 
(4, 2, '2026-03-29 18:00:00', 0, 'Crédito', '2', 300.00, NULL)
 
INSERT INTO consultatiposervico (idConsulta, idTipoServico, valorServico)
VALUES
(9, 1, 90.00), 
(10, 3, 150.00), 
(11, 4, 300.00)

ALTER TABLE consultatiposervico ADD valorServico DECIMAL(5,2)NOT NULL

INSERT INTO consulta (idAnimal, idVeterinario, dataHora, pago, formaPagto, qtdVezes, valorTotal, valorPago)
VALUES
(2, 3, '2026-03-03 10:00', 1, 'PIX', 1, 350.00, 350.00),
(3, 3, '2026-03-04 12:00', 1, 'Credito', 2, 150.00, 150.00)
 
INSERT INTO consultatiposervico(idConsulta, idTipoServico, valorServico)
VALUES
(14, 5, 350.00),
(15, 3, 150.00)

SELECT * FROM consulta


SELECT * FROM consultatiposervico WHERE idConsulta IN (10,15)     

SELECT datahora, nmAnimal, nomeCliente, nmServico from cliente
JOIN animal ON cliente.idCliente = animal.idCliente
JOIN consulta ON consulta.idAnimal = animal.idAnimal
JOIN consultatiposervico ON consulta.idConsulta = consultatiposervico.idConsulta
JOIN tiposervico ON consultatiposervico.idTipoServico = tiposervico.idTipoServico

/* listar nomeVeterinario, data em que consultou, animal que atendeu de todos os veterinarios */

SELECT veterinario.nmVeterinario, consulta.datahora, animal.nmAnimal FROM veterinario
INNER JOIN consulta
ON veterinario.idVeterinario = consulta.idVeterinario
JOIN animal
ON animal.idAnimal = consulta.idAnimal

/* trazer a quantidade de consultas executadas ao longo de todo o periodo */
SELECT COUNT(idConsulta) AS 'Qtd de consultas' FROM consulta /* AS = alias */

/* Trazer o servico mais caro */
SELECT MAX(valor) FROM tiposervico

/* trazer o serviço mais barato da clinica */
SELECT mix(valor) FROM tiposervico

/* trazer a media dos valores dos servicos*/
SELECT AVG(valor) AS 'A média dos valores é:' FROM tiposervico

/* trazer o faturamento bruto da clinica */
SELECT SUM(valorservico) AS 'faturamento' FROM consultatiposervico

/* Trazer a quantidade de consultas que ocorrem com cada animalzinho
ex.: Bidu ------ 3 consultas
	  Tobby ----- 2 consultas*/
	  
SELECT nmAnimal, COUNT(idConsulta) FROM consulta
right JOIN animal
ON consulta.idAnimal = animal.idAnimal
GROUP BY nmAnimal
ORDER BY COUNT(idConsulta) DESC

/* listar a quantidade de animais por especie */
SELECT especie, COUNT(idAnimal) AS 'Qtd'
FROM animal
 GROUP BY especie
 
 /*listar todas as cidades onde tenho clientes*/
SELECT DISTINCT cidade FROM cliente

SELECT DISTINCT raca FROM animal
WHERE especie = 'cachorro'

/* paginação - limitar quantidade de linhas */
SELECT * FROM veterinario
/*ORDER BY idVeterinario DESC */
LIMIT 2

/*  */