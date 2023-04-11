CREATE TABLE produto (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    descricao VARCHAR(100) NOT NULL, 
    marca VARCHAR(50) NOT NULL, 
    modelo VARCHAR(50) NOT NULL, 
    cor VARCHAR(50) NOT NULL, 
    voltagem DECIMAL NOT NULL, 
    peso DECIMAL NOT NULL, 
    altura VARCHAR(50) NOT NULL, 
    largura VARCHAR(10) NOT NULL, 
    profundidade VARCHAR(10) NOT NULL,
    preco DECIMAL NOT NULL, 
    status VARCHAR(10) NOT NULL
);