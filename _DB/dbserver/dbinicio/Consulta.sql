CREATE TABLE funcionario (
	idFuncionario INT PRIMARY KEY AUTO_INCREMENT,
	nmFuncionario VARCHAR(50) NOT NULL,
	cpf CHAR(11) NOT NULL UNIQUE,
	celular CHAR (11) NOT null
	
)

CREATE TABLE equipamento (
	idEquipamento INT PRIMARY KEY AUTO_INCREMENT,
	nmEquipamento  VARCHAR(50) NOT NULL,
	qtd INT NOT NULL,
	varloHora DECIMAL (5,2) NOT NULL
	
)

CREATE TABLE cliente (
	idCliente INT PRIMARY KEY AUTO_INCREMENT,
	nmCliente VARCHAR(50) NOT NULL,
	cpf CHAR(11) NOT NULL UNIQUE
)

CREATE TABLE aluguel (
	idAluguel INT PRIMARY KEY AUTO_INCREMENT,
	idCliente INT,
	idFuncionario INT,
	dataHoraRetirada DATETIME NOT NULL,
	datahoraDevolucao DATETIME,
	valorAPagar decimal (10,2),
	valorPago DECIMAL(10,2),
	pago BIT,
	formaPagamento VARCHAR(50),
	qtVezes INT,
	
	CONSTRAINT fk_Aluguel_Cliente FOREIGN KEY (idCliente) REFERENCES cliente(idCliente),
	CONSTRAINT fk_Aluguel_Funcionario FOREIGN KEY (idFuncionario) REFERENCES funcionario(idFuncionario)
)

CREATE TABLE aluguelEquipamento (
	idAluguelEquipamento INT PRIMARY KEY AUTO_INCREMENT,
	idEquipamento INT,
	idAluguel INT,
	valorItem DECIMAL(10,2) NOT NULL,
	valorUnitario DECIMAL(10,2) NOT NULL,
	qtd INT,
	
	CONSTRAINT fk_aluguelEquipamento_equipamento FOREIGN KEY (idEquipamento) REFERENCES equipamento(idEquipamento),
	CONSTRAINT fk_aluguelEquipamento_aluguel FOREIGN KEY (idAluguel) REFERENCES aluguel(idAluguel)
)

ALTER TABLE cliente add
(
	email VARCHAR(100),
	cep char(8),
	cidade VARCHAR(30) NOT null,
	estado CHAR(2) NOT null,
	
	nomeLogradouro VARCHAR(100) NOT null, 
	numero VARCHAR(12) NOT null, 
	complemento VARCHAR(50)
)

ALTER TABLE cliente add
(
	bairro VARCHAR(40) NOT null
)

/* 1 */

INSERT INTO cliente
(
nmCliente, 
cpf, 
email, 
cep, 
cidade, 
estado, 
nomeLogradouro, 
bairro,
numero, 
complemento
)

/* 2 */

VALUES 
(/*nmCliente*/ 'Donald', /*cpf*/ '42212978839',  /*email*/ 'Quack123@uol.com', /*cep*/ '11015906', /*cidade*/'Santos', /*estado*/ 'SP', /*nomeLogradouro*/ 'Rua Julio Conceição', /*bairro*/ 'Vila Mathias', /*numero*/ '102', /*complemento*/ 'casa'),

(/*nmCliente*/ 'Margarida', /*cpf*/ '70414816897',  /*email*/ 'DuckDodgers123@uol.com', /*cep*/ '11346140', /*cidade*/'São Vicente', /*estado*/ 'SP', /*nomeLogradouro*/ 'Rua Milton Pinto', /*bairro*/ 'Parque das Bandeiras', /*numero*/ '411', /*complemento*/ 'apto 255'),

(/*nmCliente*/ 'Patinhas', /*cpf*/ '17395511921',  /*email*/ 'TenhoMaisDinheiroQueVoce@uol.com', /*cep*/ '88064672', /*cidade*/'Florianópolis', /*estado*/ 'SC', /*nomeLogradouro*/ 'Rua Souza', /*bairro*/ 'Ribeirão da Ilha', /*numero*/ '16', /*complemento*/ 'casa'),

(/*nmCliente*/ 'Huguinho', /*cpf*/ '02962048897',  /*email*/ 'DuckDodgers123@uol.com', /*cep*/ '11015265', /*cidade*/'Santos', /*estado*/ 'SP', /*nomeLogradouro*/ 'Travessa José do Patrocínio', /*bairro*/ 'Macuco', /*numero*/ '666', /*complemento*/ 'apto 55A'),

(/*nmCliente*/ 'Luizinho', /*cpf*/ '38696205871',  /*email*/ 'PericlesMagoExecutivo2020@gmail.com', /*cep*/ '11702215', /*cidade*/'Praia Grande', /*estado*/ 'SP', /*nomeLogradouro*/ 'Avenida Doutor Roberto de Almeida Vinhas', /*bairro*/ 'Guilhermina', /*numero*/ '321', /*complemento*/ 'apto 616B'),

(/*nmCliente*/ 'Zezinho', /*cpf*/ '28710474803',  /*email*/ 'JosePalmeira334@gmail.com', /*cep*/ '11310350', /*cidade*/'São Vicente', /*estado*/ 'SP', /*nomeLogradouro*/ 'Rua Campos de Bury', /*bairro*/ 'Centro', /*numero*/ '23', /*complemento*/ 'casa'),

(/*nmCliente*/ 'Pardal', /*cpf*/ '57333836827',  /*email*/ 'DestinyLight@uol.com', /*cep*/ '11085000', /*cidade*/'Santos', /*estado*/ 'SP', /*nomeLogradouro*/ 'Avenida Martins Fontes', /*bairro*/ 'Saboó', /*numero*/ '41', /*complemento*/ 'casa'),

(/*nmCliente*/ 'Zé Carioca', /*cpf*/ '59507717706',  /*email*/ null, /*cep*/ '23030437', /*cidade*/'Rio de Janeiro', /*estado*/ 'RJ', /*nomeLogradouro*/ 'Rua Joacir Cruz', /*bairro*/ 'Guaratiba', /*numero*/ '75', /*complemento*/ 'casa'),

(/*nmCliente*/ 'Mickey', /*cpf*/ '10080634443',  /*email*/ 'FaceofDisney@hotmail.com', /*cep*/ '50740083', /*cidade*/'Recife', /*estado*/ 'PE', /*nomeLogradouro*/ '3ª Travessa Barão de Bonito', /*bairro*/ 'Cidade Universitária', /*numero*/ '420', /*complemento*/ 'apto 77A'),

(/*nmCliente*/ 'Minie', /*cpf*/ '92694644406',  /*email*/ 'ElegantMouseXOXO@gmail.com', /*cep*/ '50740083', /*cidade*/'Recife', /*estado*/ 'PE', /*nomeLogradouro*/ '3ª Travessa Barão de Bonito', /*bairro*/ 'Cidade Universitária', /*numero*/ '420', /*complemento*/ 'apto 77A')

SELECT * FROM cliente

/* 3 */
INSERT INTO cliente (nmCliente, cpf, email, cep, cidade, estado, nomeLogradouro, bairro, numero, complemento)
VALUES

(/*nmCliente*/ 'Pateta', /*cpf*/ '44078507875',  /*email*/ 'PlutosFriend@gmail.com', /*cep*/ '-', /*cidade*/'-', /*estado*/ 'SP', /*nomeLogradouro*/ '-', /*bairro*/ '-', /*numero*/ '-', /*complemento*/ '-'),

(/*nmCliente*/ 'Branca de Neve', /*cpf*/ '84829230991',  /*email*/ 'FFFFFF@hotmail.com', /*cep*/ '88600971', /*cidade*/'São Joaquim', /*estado*/ 'SC', /*nomeLogradouro*/ 'Rua Marcos Batista', /*bairro*/ 'Centro', /*numero*/ '520', /*complemento*/ 'apto 24'),

(/*nmCliente*/ 'Aladin', /*cpf*/ '62117314422',  /*email*/ 'PrinceAli@gmail.com', /*cep*/ '66610130', /*cidade*/'Belém', /*estado*/ 'PA', /*nomeLogradouro*/ 'Passagem Vinte e Cinco de Dezembro', /*bairro*/ 'Curió-Utinga', /*numero*/ '5', /*complemento*/ 'apto 12'),

(/*nmCliente*/ 'Cinderela', /*cpf*/ '16219041135',  /*email*/ 'CrystalClear@uol.com', /*cep*/ '74395040', /*cidade*/'Goiania', /*estado*/ 'GO', /*nomeLogradouro*/ 'Rua R', /*bairro*/ 'Setor Solar Santa Rita', /*numero*/ '10', /*complemento*/ 'casa'),

(/*nmCliente*/ 'Mulan', /*cpf*/ '28380652703',  /*email*/ 'AmantedosAnimaisOG@gmail.com', /*cep*/ '28898080', /*cidade*/'Rio das Ostras', /*estado*/ 'RJ', /*nomeLogradouro*/ 'Rua Ponte das Tábuas', /*bairro*/ 'Mar do Norte', /*numero*/ '79', /*complemento*/ 'apto 33'),

(/*nmCliente*/ 'Moana', /*cpf*/ '25469253775',  /*email*/ 'FilhaDoOceano@gmail.com', /*cep*/ '23970970', /*cidade*/'Parati', /*estado*/ 'RJ', /*nomeLogradouro*/ 'Rua José Milton de Oliveira', /*bairro*/ 'Centro', /*numero*/ 'S/N', /*complemento*/ 'casa'),

(/*nmCliente*/ 'Asnésio', /*cpf*/ '98073163675',  /*email*/ 'AnestesiaBrasileira@uol.com', /*cep*/ '30421635', /*cidade*/'Belo Horizonte', /*estado*/ 'MG', /*nomeLogradouro*/ 'Beco da Terezinha', /*bairro*/ 'Ventosa', /*numero*/ '420', /*complemento*/ 'apto 12'),

(/*nmCliente*/ 'Maga Patólogica', /*cpf*/ '71369705808',  /*email*/ 'contemplem-A-Maga@gmail.com', /*cep*/ '11531240', /*cidade*/'Cubatão', /*estado*/ 'SP', /*nomeLogradouro*/ 'Rua São Clóvis', /*bairro*/ 'Vila dos Pescadores', /*numero*/ '1074', /*complemento*/ 'apto 2'),

(/*nmCliente*/ 'Capitão Boeing', /*cpf*/ '43563235210',  /*email*/ 'biggest747@uol.com', /*cep*/ '69073129', /*cidade*/'Manaus', /*estado*/ 'AM', /*nomeLogradouro*/ 'Beco Patu', /*bairro*/ 'Crespo', /*numero*/ '20', /*complemento*/ 'casa'),

(/*nmCliente*/ 'Pão Duro Mac Money', /*cpf*/ '07251764822',  /*email*/ 'manda10conto@ig.com', /*cep*/ '06264170', /*cidade*/'Osasco', /*estado*/ 'SP', /*nomeLogradouro*/ 'Rua da Boa Vitória', /*bairro*/ 'Portal D Oeste', /*numero*/ '322', /*complemento*/ 'apto 135A')

/* 4 */
INSERT INTO funcionario (nmFuncionario, cpf, ddd, celular)
VALUES


(/*nmFuncionario*/ 'Cebolinha', /*cpf*/ '43527947086', /*ddd*/ 11,/*celular*/ '997132541'),

(/*nmFuncionario*/ 'Cascão', /*cpf*/ '41675117039', /*ddd*/ 13,/*celular*/ '986428894'),

(/*nmFuncionario*/ 'Chico Bento', /*cpf*/ '90524241015', /*ddd*/ 13, /*celular*/ '977245565')

/* 5 */
INSERT INTO equipamento (nmEquipamento, qtd, valorHora)
VALUES
(/*nmEquipamento*/ 'Cadeira 02 Posições', /*qtd*/ 50, /*valorHora*/ 2.00),
(/*nmEquipamento*/ 'Cadeira 04 Posições', /*qtd*/ 100, /*valorHora*/ 3.50),
(/*nmEquipamento*/ 'Guarda Sol P', /*qtd*/ 40, /*valorHora*/ 2.00),
(/*nmEquipamento*/ 'Guarda Sol G', /*qtd*/ 60, /*valorHora*/ 3.00),
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
(11, 3, '2025-7-11 15:00:00', NULL, 2.00, 2.00, 1, 'Dinheiro', 1),

(1, 3, '2025-2-21 18:35:00', '2025-3-01 09:00:00', 2.00, 2.00, 1, 'Dinheiro', 1),

(14, 3, '2025-12-25 00:35:00', '2026-01-01 07:00:00', 2.00, 2.00, 1, 'Debito Visa', 1),

(14, 3, '2025-12-25 00:35:00', '2026-01-01 07:00:00', 2.00, 2.00, 1, 'Debito Visa', 1),

(14, 3, '2025-12-25 00:35:00', '2026-01-01 07:00:00', 2.00, 2.00, 1, 'Debito Visa', 1),

(14, 3, '2025-12-25 00:35:00', '2026-01-01 07:00:00', 2.00, 2.00, 1, 'Debito Visa', 1)

UPDATE aluguel SET valorAPagar = 7.00, valorPago = 7.00 WHERE idAluguel IN (9,10,11)

INSERT INTO aluguelequipamento (idEquipamento, idAluguel, valorItem, valorUnitario, qtd)
VALUES
(1, 9, 4.00, 2.00, 2),
(1, 9, 3.00, 3.00, 1),

UPDATE aluguelequipamento SET valorItem = 4.00 WHERE idAluguelEquipamento = 9

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
SELECT dataHoraRetirada FROM aluguel ORDER BY dataHoraRetirada ASC

/* 13 */
SELECT 


