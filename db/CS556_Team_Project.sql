# Author: Arvin Mai
# ID: 10010
# Subject: CS556_Project_MySQL_Configuration
# Time: 11/03/2016

# reset database
DROP DATABASE IF EXISTS daycaredb;
# create database for daycare
CREATE DATABASE IF NOT EXISTS daycaredb;

# create table for parent profile
CREATE TABLE IF NOT EXISTS daycaredb.parent_profiles (
    id INT AUTO_INCREMENT UNIQUE,
    child_id INT,
    name_english VARCHAR(40) NOT NULL,
    name_chinese VARCHAR(20),
    occupation VARCHAR(50) NOT NULL,
    salary INT NOT NULL,
    relation_with_child CHAR(5) NOT NULL,
    language_used VARCHAR(10) NOT NULL,
    PRIMARY KEY (id)
);

# create table for child profile
CREATE TABLE IF NOT EXISTS daycaredb.child_profiles (
    id INT AUTO_INCREMENT UNIQUE,
    mom_id INT NOT NULL,
    dad_id INT NOT NULL,
    name_english VARCHAR(40) NOT NULL,
    name_chinese VARCHAR(20),
    gender CHAR(6) NOT NULL,
    current_status CHAR(10) NOT NULL,
    start_date DATE NOT NULL,
    graduation_date DATE,
    PRIMARY KEY (id),
    FOREIGN KEY (mom_id)
        REFERENCES daycaredb.parent_profiles (id),
    FOREIGN KEY (dad_id)
        REFERENCES daycaredb.parent_profiles (id)
);


# create table for sign in/out record
CREATE TABLE IF NOT EXISTS daycaredb.signin_records (
    id INT AUTO_INCREMENT UNIQUE,
    child_id INT NOT NULL,
    parent_id INT NOT NULL,
    sign_in_timestamp DATETIME NOT NULL,
    sign_out_timestamp DATETIME,
    PRIMARY KEY (id),
    FOREIGN KEY (child_id)
        REFERENCES daycaredb.child_profiles (id),
    FOREIGN KEY (parent_id)
        REFERENCES daycaredb.parent_profiles (id)
);

# create table for daily record
CREATE TABLE IF NOT EXISTS daycaredb.daily_records (
    id INT AUTO_INCREMENT UNIQUE,
    child_id INT NOT NULL,
    record_date DATE NOT NULL,
    emotion VARCHAR(10),
    sleep_duration TIME NOT NULL,
    body_temperature TINYINT NOT NULL,
    defecation TINYINT NOT NULL,
    meal TINYTEXT,
    activity TEXT,
    defecation_at_home TINYINT,
    sleep_status TEXT,
    PRIMARY KEY (id),
    FOREIGN KEY (child_id)
        REFERENCES daycaredb.child_profiles (id)
);