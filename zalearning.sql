CREATE DATABASE zalearning;

USE zalearning; 

CREATE TABLE users (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    gender VARCHAR(255),
    date_of_birth DATE,
    email VARCHAR(255) UNIQUE,
    phone_number VARCHAR(255),
    password VARCHAR(255),
    role ENUM('admin', 'user'),
    token VARCHAR(255) NULL,
    token_expired_at TIMESTAMP NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);

CREATE TABLE classes (

    id INT PRIMARY KEY,
    class_name VARCHAR(255),
    class_thumbnail VARCHAR(255),
    class_desc TEXT,
    class_route VARCHAR(255),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);

CREATE TABLE user_classes (
    id INT PRIMARY KEY,
    user_id INT(11),
    class_id INT(11),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);

CREATE TABLE quiz_questions (
    id INT PRIMARY KEY,
    class_id INT,
    question TEXT,
    option_a VARCHAR(255),
    option_b VARCHAR(255),
    option_c VARCHAR(255),
    option_d VARCHAR(255),
    correct_answer CHAR(1),
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    FOREIGN KEY (class_id) REFERENCES classes(id)
);

CREATE TABLE quiz_answers (
    id INT PRIMARY KEY,
    user_id INT,
    class_id INT,
    user_quiz_id VARCHAR(255),
    question_id INT,
    user_answer CHAR(1),
    true_or_false BOOLEAN,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (class_id) REFERENCES classes(id),
    FOREIGN KEY (question_id) REFERENCES quiz_questions(id)
);

CREATE TABLE quiz_scores (
    id INT PRIMARY KEY,
    user_id INT,
    class_id INT,
    user_quiz_id VARCHAR(255),
    score INT,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (class_id) REFERENCES classes(id)
);




