DROP DATABASE IF EXISTS myshop; 

-- 1. Membuat Database
CREATE DATABASE myshop;

-- 2. Membuat Table di Dalam Database
USE myshop;

CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255),
email VARCHAR(255),
password VARCHAR(255)
);

CREATE TABLE categories(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255)
);

CREATE TABLE items(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255),
description VARCHAR(255),
price INT,
stock INT,
category_id INT,
FOREIGN KEY (category_id) REFERENCES categories(id)
);

-- 3. Memasukkan Data pada Table

INSERT INTO users(name,email,password) 
VALUES
('John Doe', 'john@doe.com', 'john123'),
('Jane Doe', 'jane@doe.com', 'jane123');

INSERT INTO categories(name) VALUES ('gadget'),('cloth'),('men'),('women'),('branded');

INSERT INTO items(name,description,price,stock,category_id) VALUES
('Sumsang B50', 'Hape keren dari merek Sumsang', 4000000, 100, 1),
('Uniklooh', 'Baju keren dari merek ternama', 500000, 50, 2),
('IMHO Watch','Jam tangan anak yang jujur banget',2000000,10,1);

-- 4. Mengambil Data dari Database

SELECT id, name, email FROM users;

SELECT * FROM items WHERE price > 1000000;

SELECT * FROM items WHERE name LIKE '%sang%';

SELECT i.*, c.name  FROM items i JOIN categories c ON i.category_id = c.id

-- 5. Mengubah Data dari Database

UPDATE items SET price = 2500000 WHERE name = 'Sumsang B50';












