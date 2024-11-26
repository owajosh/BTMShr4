# humanresourcesprojectBTMS
CREATE DATABASE analytics_dashboard;

USE analytics_dashboard;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    joined_date DATE
);

CREATE TABLE activities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    activity_type VARCHAR(100),
    activity_value INT,
    activity_date DATE
);

CREATE TABLE classifications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(100),
    percentage DECIMAL(5,2)
);
