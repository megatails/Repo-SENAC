/*CREATE DATABASE jucaPizzas */

CREATE TABLE pizzas (
    idPizza INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    ingredientes VARCHAR(255) NOT NULL,
    valor DECIMAL(10, 2) NOT NULL
);
INSERT INTO pizzas (nome, ingredientes, valor) VALUES
('Calabresa', 'Mussarela, calabresa fatiada e cebola', 45.50),
('Mussarela', 'Mussarela e molho de tomate', 40.00),
('Frango com Catupiry', 'Frango desfiado, catupiry e mussarela', 52.90),
('Portuguesa', 'Mussarela, presunto, ovo, ervilha, cebola e calabresa', 62.90),
('Moda do Juca', 'Mussarela, peito de peru, palmito, alho poró e alcaparras', 72.50);
SELECT * FROM pizzas

CREATE TABLE bebidas (
	idBebida INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(50) NOT NULL,
	valor decimal(10,2) NOT NULL,
	tipo VARCHAR(50) NOT NULL,
	volumeMl INT NOT null
);

INSERT INTO bebidas (nome, valor, tipo, volumeMl)
VALUES
('Coca-Cola Lata', 4.00, 'Refrigerante', 350),
('Coca-Cola Vidro', 8.00, 'Refrigerante', 700),
('Coca-Cola Garrafa', 11.00, 'Refrigerante', 1000),
('Coca-Cola Garrafa', 14.00, 'Refrigerante', 2000),
('Café', 4.00, 'Café', 150),
('Cappuccino', 5.50, 'Café', 150),
('Caipirinha', 15.00, 'Alcoolico', 500),
('Vinho', 21.00, 'Alcoolico', 1000),
('Cerveja Heineken', 5.00, 'Alcoolico', 400),
('Whiskey', 19.00, 'Alcoolico', 700),
('Monster Rio Punch', 8.00, 'Energético', 470),
('Monster Mango Loco', 8.00, 'Energético', 470),
('Monster Pacific Punch', 8.00, 'Energético', 470),
('Suco Del Valle Morango', 8.00, 'Suco', 1000),
('Suco Del Valle Uva', 8.00, 'Suco', 1000),
('Suco Del Valle Laranja', 8.00, 'Suco', 1000),
('Suco Del Valle Maracuja', 8.00, 'Suco', 1000),
('Fanta Uva', 10.00, 'Refrigerante', 1000),
('Fanta Maça Verde', 10.00, 'Refrigerante', 1000)


SELECT * FROM bebidas WHERE tipo = 'Alcoolico'