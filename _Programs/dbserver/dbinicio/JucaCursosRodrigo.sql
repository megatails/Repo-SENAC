CREATE DATABASE JucaCursosRodrigo
USE JucaCursosRodrigo

CREATE TABLE alunos (
    idAluno INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    dataNascimento DATE NOT NULL
)

CREATE TABLE cursos (
    idCurso INT AUTO_INCREMENT PRIMARY KEY,
    nomeCurso VARCHAR(150) NOT NULL,
    cargaHoraria INT NOT NULL CHECK (carga_horaria > 0),
    valor DECIMAL(8,2) NOT NULL CHECK (valor > 0)
)

/* 3 */

INSERT INTO alunos (nome, email, dataNascimento) 
VALUES
('Ana Souza', 'ana@gmail.com', '2005-03-10'),
('Bruno Lima', 'bruno@gmail.com', '2000-07-21'),
('Carla Mendes', 'carla@gmail.com', '2003-11-05'),
('Daniel Rocha', 'daniel@gmail.com', '1997-01-18'),
('Amanda Silva', 'amanda@gmail.com', '2006-09-30')

/* 4 */
INSERT INTO cursos (nomeCurso, cargaHoraria, valor) 
VALUES
('SQL Básico – Uma linguagem para banco de dados', 40, 299.90),
('Java Fundamentos', 60, 399.90),
('C# para Iniciantes', 50, 349.90),
('Banco de Dados Avançado', 80, 499.90),
('Lógica de Programação', 30, 199.90)

/* 5 */
SELECT * FROM cursos

/* 6 */
SELECT nome
FROM alunos
WHERE TIMESTAMPDIFF(YEAR, dataNascimento, CURDATE()) > 21

/* 7 */
SELECT *
FROM cursos
WHERE valor < 400

/* 8 */
SELECT *
FROM alunos
WHERE nome LIKE 'A%'

/* 9 */
SELECT nomeCurso, valor
FROM cursos
WHERE nomeCurso LIKE '%Banco%'

/* 10 */
SELECT *
FROM alunos
ORDER BY nome ASC

/* 11 */
SELECT *
FROM cursos
ORDER BY valor DESC

/* 12 */
UPDATE alunos
SET email = 'ana@gmail.com.br'
WHERE nome = 'Ana Souza'

SELECT * FROM alunos

/* 13 */
UPDATE cursos
SET valor = 390.99
WHERE nomeCurso = 'C# para Iniciantes'

/* 14 */
DELETE FROM alunos
WHERE nome = 'Daniel Rocha'

/*--------------------------------*/

SELECT nome, dataNascimento, TIMESTAMPDIFF(YEAR, dataNascimento, CURDATE()) AS idade 
/* CURDATE pega a data atual, q no caso é usada na conta da funcao para pegar a idade*/
FROM alunos
ORDER BY idade DESC