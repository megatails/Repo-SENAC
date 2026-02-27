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


/* 2 */

(/*nmCliente*/ 'Pateta', /*cpf*/ '44078507875',  /*email*/ 'PlutosFriend@gmail.com', /*cep*/ '11015906', /*cidade*/'Santos', /*estado*/ 'SP', /*nomeLogradouro*/ 'Rua Julio Conceição', /*bairro*/ 'Vila Mathias', /*numero*/ '102', /*complemento*/ 'casa'),

(/*nmCliente*/ 'Branca de Neve', /*cpf*/ '84829230991',  /*email*/ 'FFFFFF@hotmail.com', /*cep*/ '11346140', /*cidade*/'São Vicente', /*estado*/ 'SC', /*nomeLogradouro*/ 'Rua Milton Pinto', /*bairro*/ 'Parque das Bandeiras', /*numero*/ '411', /*complemento*/ 'apto 255'),

(/*nmCliente*/ 'Aladin', /*cpf*/ '62117314422',  /*email*/ 'PrinceAli@gmail.com', /*cep*/ '88064672', /*cidade*/'Florianópolis', /*estado*/ 'PA', /*nomeLogradouro*/ 'Rua Souza', /*bairro*/ 'Ribeirão da Ilha', /*numero*/ '16', /*complemento*/ 'casa'),

(/*nmCliente*/ 'Cinderela', /*cpf*/ '16219041135',  /*email*/ 'CrystalClear@uol.com', /*cep*/ '11015265', /*cidade*/'Santos', /*estado*/ 'GO', /*nomeLogradouro*/ 'Travessa José do Patrocínio', /*bairro*/ 'Macuco', /*numero*/ '666', /*complemento*/ 'apto 55A'),

(/*nmCliente*/ 'Mulan', /*cpf*/ '28380652703',  /*email*/ 'PericlesMagoExecutivo2020@gmail.com', /*cep*/ '11702215', /*cidade*/'Praia Grande', /*estado*/ 'RJ', /*nomeLogradouro*/ 'Avenida Doutor Roberto de Almeida Vinhas', /*bairro*/ 'Guilhermina', /*numero*/ '321', /*complemento*/ 'apto 616B'),

(/*nmCliente*/ 'Moana', /*cpf*/ '25469253775',  /*email*/ 'JosePalmeira334@gmail.com', /*cep*/ '11310350', /*cidade*/'São Vicente', /*estado*/ 'RJ', /*nomeLogradouro*/ 'Rua Campos de Bury', /*bairro*/ 'Centro', /*numero*/ '23', /*complemento*/ 'casa'),

(/*nmCliente*/ 'Asnésio', /*cpf*/ '98073163675',  /*email*/ 'DestinyLight@uol.com', /*cep*/ '11085000', /*cidade*/'Santos', /*estado*/ 'MG', /*nomeLogradouro*/ 'Avenida Martins Fontes', /*bairro*/ 'Saboó', /*numero*/ '41', /*complemento*/ 'casa'),

(/*nmCliente*/ 'Maga Patólogica', /*cpf*/ '71369705808',  /*email*/ null, /*cep*/ '23030437', /*cidade*/'Rio de Janeiro', /*estado*/ 'SP', /*nomeLogradouro*/ 'Rua Joacir Cruz', /*bairro*/ 'Guaratiba', /*numero*/ '75', /*complemento*/ 'casa'),

(/*nmCliente*/ 'Capitão Boeing', /*cpf*/ '43563235210',  /*email*/ 'FaceofDisney@hotmail.com', /*cep*/ '50740083', /*cidade*/'Recife', /*estado*/ 'AM', /*nomeLogradouro*/ '3ª Travessa Barão de Bonito', /*bairro*/ 'Cidade Universitária', /*numero*/ '420', /*complemento*/ 'apto 77A'),

(/*nmCliente*/ 'Pão Duro Mac Money', /*cpf*/ '07251764822',  /*email*/ 'ElegantMouseXOXO@gmail.com', /*cep*/ '50740083', /*cidade*/'Recife', /*estado*/ 'SP', /*nomeLogradouro*/ '3ª Travessa Barão de Bonito', /*bairro*/ 'Cidade Universitária', /*numero*/ '420', /*complemento*/ 'apto 77A')






