	idFuncionario INT PRIMARY KEY AUTO_INCREMENT,
	nmFuncionario VARCHAR(50) NOT NULL,
	cpf CHAR(11) NOT NULL UNIQUE,
	celular CHAR (11) NOT null
	
	celular CHAR (11) NOT null,
	ddd char (3)
)

CREATE TABLE equipamento (
	idEquipamento INT PRIMARY KEY AUTO_INCREMENT,
	nmEquipamento  VARCHAR(50) NOT NULL,
	qtd INT NOT NULL,
	varloHora DECIMAL (5,2) NOT NULL
	valorHora DECIMAL (5,2) NOT NULL

)

@@ -22,8 +22,8 @@ CREATE TABLE cliente (

CREATE TABLE aluguel (
	idAluguel INT PRIMARY KEY AUTO_INCREMENT,
	idCliente INT,
	idFuncionario INT,
	idCliente INT NOT NULL,
	idFuncionario INT NOT NULL,
	dataHoraRetirada DATETIME NOT NULL,
	datahoraDevolucao DATETIME,
	valorAPagar decimal (10,2),
@@ -131,14 +131,15 @@ VALUES
(/*nmCliente*/ 'Pão Duro Mac Money', /*cpf*/ '07251764822',  /*email*/ 'manda10conto@ig.com', /*cep*/ '06264170', /*cidade*/'Osasco', /*estado*/ 'SP', /*nomeLogradouro*/ 'Rua da Boa Vitória', /*bairro*/ 'Portal D Oeste', /*numero*/ '322', /*complemento*/ 'apto 135A')

/* 4 */
INSERT INTO cliente (nmCliente, cpf, email, cep, cidade, estado, nomeLogradouro, bairro, numero, complemento)
INSERT INTO funcionario (nmFuncionario, cpf, ddd, celular)
VALUES

(/*nmCliente*/ 'Cebolinha', /*cpf*/ '43527947086',  /*email*/ 'mestreDosPlanoshaha@hotmail.com.br', /*cep*/ '13024600', /*cidade*/'Campinas', /*estado*/ 'SP', /*nomeLogradouro*/ 'Rua Cinco', /*bairro*/ 'Cambuí', /*numero*/ '32', /*complemento*/ 'casa'),

(/*nmCliente*/ 'Cascão', /*cpf*/ '41675117039',  /*email*/ 'chovinistaMeuFilho@hotmail.com.br', /*cep*/ '13024600', /*cidade*/'Campinas', /*estado*/ 'SP', /*nomeLogradouro*/ 'Rua Cinco', /*bairro*/ 'Cambuí', /*numero*/ '47', /*complemento*/ 'casa'),
(/*nmFuncionario*/ 'Cebolinha', /*cpf*/ '43527947086', /*ddd*/ 11,/*celular*/ '997132541'),

(/*nmCliente*/ 'Chico Bento', /*cpf*/ '90524241015',  /*email*/ 'mestreDosPlanoshaha@hotmail.com.br', /*cep*/ null, /*cidade*/'Campinas', /*estado*/ 'SP', /*nomeLogradouro*/ 'Joaquim Egídio', /*bairro*/ 'Joaquim Egídio', /*numero*/ 'S/N', /*complemento*/ 'Fazenda')
(/*nmFuncionario*/ 'Cascão', /*cpf*/ '41675117039', /*ddd*/ 13,/*celular*/ '986428894'),

(/*nmFuncionario*/ 'Chico Bento', /*cpf*/ '90524241015', /*ddd*/ 13, /*celular*/ '977245565')

/* 5 */
INSERT INTO equipamento (nmEquipamento, qtd, valorHora)
@@ -147,4 +148,131 @@ VALUES
(/*nmEquipamento*/ 'Cadeira 04 Posições', /*qtd*/ 100, /*valorHora*/ 3.50),
(/*nmEquipamento*/ 'Guarda Sol P', /*qtd*/ 40, /*valorHora*/ 2.00),
(/*nmEquipamento*/ 'Guarda Sol G', /*qtd*/ 60, /*valorHora*/ 3.00),
(/*nmEquipamento*/ 'Mesinha', /*qtd*/ 30, /*valorHora*/ 1.50)
(/*nmEquipamento*/ 'Mesinha', /*qtd*/ 30, /*valorHora*/ 1.50)

/* 6 */
SELECT * FROM funcionario
SELECT * FROM cliente
SELECT * FROM equipamento
SELECT * FROM aluguel
SELECT * FROM aluguelequipamento

INSERT INTO aluguel (idCliente, idFuncionario, dataHoraRetirada, dataHoraDevolucao, valorAPagar, valorPago, pago, formaPagamento, qtVezes)
VALUES 
(11, 1, '2024-12-08 08:00:00', NULL, 2.00, 2.00, 1, 'Debito Mastercard', 1)

INSERT INTO aluguelequipamento (idEquipamento, idAluguel, valorItem, valorUnitario, qtd)
VALUES
(1, 4, 2.00, 2.00, 1)

/* 7 */

INSERT INTO aluguel (idCliente, idFuncionario, dataHoraRetirada, dataHoraDevolucao, valorAPagar, valorPago, pago, formaPagamento, qtVezes)
VALUES
(9, 3, '2024-12-27 14:00:00', NULL, 10.00, 10.00, 1, 'Credito Visa', 2)

UPDATE aluguel set dataHoraRetirada = '2024-12-08 8:00:00' WHERE idAluguel = 4

INSERT INTO aluguelequipamento (idEquipamento, idAluguel, valorItem, valorUnitario, qtd)
VALUES
(2, 5, 7.00, 3.50, 2)

INSERT INTO aluguelequipamento (idEquipamento, idAluguel, valorItem, valorUnitario, qtd)
VALUES
(4, 5, 3.00, 3.00, 1)

UPDATE equipamento SET qtd = 49 WHERE idEquipamento = 1
UPDATE equipamento SET qtd = 98 WHERE idEquipamento = 2
UPDATE equipamento SET qtd = 59 WHERE idEquipamento = 4

/* 8 */

INSERT INTO aluguel (idCliente, idFuncionario, dataHoraRetirada, dataHoraDevolucao, valorAPagar, valorPago, pago, formaPagamento, qtVezes)
VALUES
(4, 1, '2024-12-31 14:00:00', '2025-01-02 7:00:00', 2.00, 2.00, 1, 'Dinheiro', 1),

(9, 1, '2025-04-30 14:00:00', null, 2.00, 2.00, 1, 'Debito Mastercard', 1),

(6, 1, '2024-12-02 14:00:00', '2024-12-16 7:00:00', 2.00, 2.00, 1, 'Debito Elo', 1)

INSERT INTO aluguelequipamento (idEquipamento, idAluguel, valorItem, valorUnitario, qtd)
VALUES
(1, 6, 2.00, 2.00, 1),

(1, 7, 2.00, 2.00, 1),

(1, 8, 2.00, 2.00, 1)

UPDATE equipamento SET qtd = 37 WHERE idEquipamento = 3

/* 9 */
INSERT INTO aluguel (idCliente, idFuncionario, dataHoraRetirada, dataHoraDevolucao, valorAPagar, valorPago, pago, formaPagamento, qtVezes)
VALUES 
(11, 3, '2025-07-11 15:00:00', NULL, 10.00, null, 0, 'Dinheiro', 1),

(1, 3, '2025-02-21 18:35:00', '2025-03-01 09:00:00', 10.00, 10.00, 1, 'Dinheiro', 1),

(10, 3, '2022-02-28 00:35:00', '2026-01-01 07:00:00', 10.00, 10.00, 1, 'Cortesia', 1),

(3, 3, '2023-12-02 00:35:00', '2024-01-01 07:00:00', 10.00, 10.00, 1, 'PIX', 1),

(8, 3, '2022-07-17 00:35:00', '2026-08-05 07:00:00', 10.00, 10.00, 1, 'Dinheiro', 1),

(7, 3, '2024-08-09 00:35:00', '2026-09-01 07:00:00', 10.00, 10.00, 1, 'Debito Mastercard', 1)

INSERT INTO aluguelequipamento (idEquipamento, idAluguel, valorItem, valorUnitario, qtd)
VALUES
(1, 9, 4.00, 2.00, 2),
(1, 9, 3.00, 3.00, 1),

(1, 10, 4.00, 2.00, 2),
(1, 10, 3.00, 3.00, 1),

(1, 11, 4.00, 2.00, 2),
(1, 11, 3.00, 3.00, 1),

(1, 12, 4.00, 2.00, 2),
(1, 12, 3.00, 3.00, 1),

(1, 13, 4.00, 2.00, 2),
(1, 13, 3.00, 3.00, 1),

(1, 14, 4.00, 2.00, 2),
(1, 14, 3.00, 3.00, 1)

UPDATE equipamento SET qtd = qtd-12 WHERE idEquipamento = 2
UPDATE equipamento SET qtd = qtd-6 WHERE idEquipamento = 4

/* 10 */
SELECT nmCliente, email from cliente ORDER BY nmCliente asc 

/* 11 */
SELECT nmFuncionario, celular FROM funcionario ORDER BY nmFuncionario asc

/* 12 */
SELECT * FROM aluguel ORDER BY dataHoraRetirada ASC

/* 13 */
SELECT nmCliente, cidade, estado FROM cliente WHERE cidade IN ('Santos', 'São Vicente', 'Praia Grande', 'Cubatão') ORDER BY cidade ASC; /* coloquei os dois por que não entendi se é o nmCliente ou cidade para colocar em ordem alfabetica */
SELECT nmCliente, cidade, estado FROM cliente WHERE cidade IN ('Santos', 'São Vicente', 'Praia Grande', 'Cubatão') ORDER BY nmCliente ASC;

/* 14 */
SELECT nmEquipamento, qtd FROM equipamento ORDER BY qtd DESC;

/* 15 */
SELECT nmCliente FROM cliente WHERE complemento LIKE '%casa%' ORDER BY nmCliente ASC;

/* 16 */
SELECT nmCliente, estado FROM cliente WHERE estado <> 'SP';

/* 17 */
SELECT nmCliente FROM cliente WHERE nmCliente LIKE 'A%';

/* 18 */
SELECT * FROM cliente WHERE nmCliente LIKE 'M%' AND estado = 'PE';

/* 19 */
SELECT nmEquipamento, qtd FROM equipamento WHERE nmEquipamento LIKE '%Cadeira%' ORDER BY qtd DESC;

/* 20 */
SELECT * FROM aluguel WHERE dataHoraRetirada BETWEEN '2024-12-25 00:00:00' AND '2024-12-31 23:59:59' ORDER BY dataHoraRetirada ASC;

/* Exercicios 11/03/2026 - Manipulação avançada de dados */

/* 1 */
INSERT INTO aluguel (idCliente, idFuncionario, dataHoraRetirada, dataHoraDevolucao, valorAPagar, valorPago, pago, formaPagamento, qtVezes)
VALUES 
(11, 3, '2025-07-11 15:00:00', NULL, 10.00, null, 0, 'Dinheiro', 1)


INSERT INTO aluguelequipamento (idEquipamento, idAluguel, valorItem, valorUnitario, qtd)
VALUES
(1, 9, 4.00, 2.00, 2)

SELECT * FROM aluguelequipamento