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