CREATE DATABASE shop;
USE shop;
CREATE TABLE products (
	id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name varchar(255),
	description text,
	price float
);

INSERT INTO products (name, description, price)
VALUES ('Piim', 'pastoriseeritud lehma niretis', 1.23);

SELECT id, name, description, price FROM products;

SELECT * FROM products;

SELECT id, name FROM products;

SELECT * FROM products WHERE price<5;

SELECT * FROM products WHERE id=4;

SELECT * FROM products ORDER BY price DESC;

SELECT * FROM products ORDER BY price DESC, name ASC;

SELECT * FROM products WHERE price>5 AND price<60;

SELECT * FROM products WHERE name LIKE 'Wine%';
SELECT * FROM products WHERE name LIKE '%e';
SELECT * FROM products WHERE description LIKE '%Leg%';
SELECT * FROM products WHERE description LIKE '%Leg%' OR price<5;
SELECT * FROM products WHERE NOT description LIKE '%Leg%';