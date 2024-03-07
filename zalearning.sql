CREATE DATABASE zalearning;

USE zalearning;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    gender VARCHAR(255),
    date_of_birth DATE,
    email VARCHAR(255) UNIQUE,
    phone_number VARCHAR(255),
    password VARCHAR(255),
    role ENUM('admin', 'user'),
    token VARCHAR(255) NULL,
    token_expired_at TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE classes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    class_name VARCHAR(255),
    class_thumbnail VARCHAR(255),
    class_desc TEXT,
    class_route VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE user_classes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT(11),
    class_id INT(11),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE quiz_questions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    class_id INT,
    question TEXT,
    option_a VARCHAR(255),
    option_b VARCHAR(255),
    option_c VARCHAR(255),
    option_d VARCHAR(255),
    correct_answer CHAR(1),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (class_id) REFERENCES classes(id)
);

INSERT INTO quiz_questions (class_id, question, option_a, option_b, option_c, option_d, correct_answer, created_at, updated_at) 
VALUES 
('1', 'Apa itu DOM (Document Object Model) dalam JavaScript?', 'a. Model untuk memanipulasi HTML dan XML', 'b. Bahasa pemrograman JavaScript', 'c. Sistem manajemen basis data', 'd. Protokol komunikasi internet', 'a', NOW(), NOW()),
('1', 'Bagaimana cara membuat fungsi di JavaScript?', 'a. create function myFunction()', 'b. function = myFunction()', 'c. def myFunction():', 'd. function myFunction()', 'd', NOW(), NOW()),
('1', 'Apa yang dimaksud dengan "closure" dalam konteks JavaScript?', 'a. Sebuah fungsi yang dapat diakses dari mana saja', 'b. Sebuah fungsi bersarang yang memiliki akses ke variabel-variabel di lingkungannya', 'c. Sebuah metode untuk menutup aplikasi', 'd. Sebuah fungsi yang tidak dapat diubah setelah dideklarasikan', 'b', NOW(), NOW()),
('1', 'Apa itu AJAX dalam JavaScript?', 'a. Sebuah teknik untuk mengirim dan menerima data secara asynchronous', 'b. Sebuah library untuk membuat animasi', 'c. Sebuah metode untuk memvalidasi formulir', 'd. Sebuah fungsi untuk menggambar grafik', 'a', NOW(), NOW()),
('1', 'Bagaimana cara menghandle error di JavaScript?', 'a. Menggunakan try-catch statement', 'b. Menggunakan alert box', 'c. Menggunakan console.log()', 'd. Semua jawaban benar', 'a', NOW(), NOW()),
('1', 'Apa itu JSON (JavaScript Object Notation)?', 'a. Sebuah bahasa pemrograman', 'b. Sebuah format pertukaran data', 'c. Sebuah metode pengambilan data dari database', 'd. Sebuah fungsi matematis', 'b', NOW(), NOW()),
('1', 'Bagaimana cara membuat loop (perulangan) di JavaScript?', 'a. for loop', 'b. while loop', 'c. do-while loop', 'd. Semua jawaban benar', 'd', NOW(), NOW()),
('1', 'Apa kegunaan dari "strict mode" dalam JavaScript?', 'a. Memaksa variabel untuk dideklarasikan sebelum digunakan', 'b. Mempercepat eksekusi kode', 'c. Memungkinkan penggunaan variabel tanpa deklarasi', 'd. Tidak ada perbedaan', 'a', NOW(), NOW()),
('1', 'Apa itu event bubbling dalam JavaScript?', 'a. Sebuah metode animasi', 'b. Sebuah teknik penyusunan elemen HTML', 'c. Sebuah properti objek', 'd. Sebuah peristiwa dimulai dari elemen terdalam dan naik ke elemen terluar', 'd', NOW(), NOW());

CREATE TABLE quiz_answers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    class_id INT,
    user_quiz_id VARCHAR(255),
    question_id INT,
    user_answer CHAR(1),
    true_or_false BOOLEAN,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (class_id) REFERENCES classes(id),
    FOREIGN KEY (question_id) REFERENCES quiz_questions(id)
);

CREATE TABLE quiz_scores (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    class_id INT,
    user_quiz_id VARCHAR(255),
    score INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (class_id) REFERENCES classes(id)
);
