CREATE DATABASE elearning_db;
USE elearning_db;

CREATE TABLE students (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(100) NOT NULL,
	email VARCHAR(100) UNIQUE NOT NULL,
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE courses (
	id INT AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(150) NOT NULL,
	price DECIMAL(10,2) NOT NULL,
	category VARCHAR(50) NOT NULL
);

CREATE TABLE enrollments (
	id INT AUTO_INCREMENT PRIMARY KEY,
	student_id INT NOT NULL,
	course_id INT NOT NULL,
	enrolled_at DATETIME DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE,
	FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
);



SELECT c.title 
FROM courses c
JOIN enrollments e ON c.id = e.course_id
ORDER BY e.course_id DESC
WHERE category = Backend


INSERT INTO students (name, email) VALUES
('Ali Ahmed', 'ali@test.com'),
('Sara Benali', 'sara@test.com'),
('Youssef Karim', 'youssef@test.com'),
('Nadia Amrani', 'nadia@test.com'),
('Omar El Fassi', 'omar@test.com'),
('Student Test', 'student@test.com');

INSERT INTO courses (title, price, category) VALUES
('PHP POO', 150, 'Backend'),
('Laravel Avancé', 250, 'Backend'),
('Java Spring Boot', 300, 'Backend'),
('JavaScript Fondamentaux', 120, 'Frontend'),
('ReactJS', 220, 'Frontend'),
('SQL Avancé', 180, 'Database'),
('DevOps Basics', 350, 'DevOps');

INSERT INTO enrollments (student_id, course_id, enrolled_at) VALUES
(1, 1, '2024-01-10'),
(1, 2, '2024-01-12'),
(1, 3, '2024-01-15'),

(2, 1, '2024-02-01'),
(2, 4, '2024-02-03'),

(3, 2, '2024-03-10'),
(3, 3, '2024-03-11'),
(3, 5, '2024-03-15'),

(4, 4, '2024-04-01'),

(5, 1, '2024-05-01'),
(5, 2, '2024-05-02'),
(5, 3, '2024-05-03'),
(5, 6, '2024-05-04'),
(5, 7, '2024-05-05'),

(6, 2, '2024-06-01'),
(6, 3, '2024-06-02');



