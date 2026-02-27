SHOW TABLES /* Mostra as tableas que existem no banco de dados*/

/* Busca um dado dentro de uma tabela*/
SELECT * FROM animal

INSERT INTO animal /* Insere dados dentro de uma tabela*/

/* exemplo*/
INSERT INTO animal (idCliente, nmAnimal, especie, raca, peso, porte, sexo, anoNascimento)
VALUES (1, 'Bolota', 'Cachorro', 'Lhasa Apso', 24.6, 'p', 'f', '2012/07/03')

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

