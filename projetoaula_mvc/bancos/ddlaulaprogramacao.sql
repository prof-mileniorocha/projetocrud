CREATE TABLE produto (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    descricao VARCHAR(100) NOT NULL, 
    marca VARCHAR(50) NOT NULL, 
    modelo VARCHAR(50) NOT NULL, 
    cor VARCHAR(50) NOT NULL, 
    voltagem VARCHAR(10) NOT NULL, 
    peso VARCHAR(20) NOT NULL, 
    altura VARCHAR(20) NOT NULL, 
    largura VARCHAR(20) NOT NULL, 
    profundidade VARCHAR(20) NOT NULL,
    preco DECIMAL(10,2) NOT NULL
);