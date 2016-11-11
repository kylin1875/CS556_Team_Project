/* 
 * Student Info: Name=wei jin, ID=9983
 * Subject: Course526_HWN1_fall_2016
 * Author: yewuy
 * Filename: school_db.sql
 * Date and Time: Nov 9, 2016 2:12:38 PM
 * Project Name: iphoneproject
 */
/**
 * Author:  yewuy
 * Created: Nov 9, 2016
 */
# reset database
DROP DATABASE IF EXISTS daycaredb;
# create database for daycare
CREATE DATABASE IF NOT EXISTS daycaredb;
# use the db
use daycaredb;

# reset database
DROP DATABASE IF EXISTS daycaredb;
# create database for daycare
CREATE DATABASE IF NOT EXISTS daycaredb;

CREATE TABLE IF NOT EXISTS daycaredb.primary_contact_profiles (
    id INT AUTO_INCREMENT UNIQUE,
    relationship VARCHAR(10) NOT NULL,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL,
    chinese_name VARCHAR(20),
    age TINYINT NOT NULL,
    language_spoken VARCHAR(50) NOT NULL,
    occupation VARCHAR(20) NOT NULL,
    employer VARCHAR(30),
    primary_email VARCHAR(30) UNIQUE NOT NULL,
    additional_email VARCHAR(30),
    cell_phone_number CHAR(10) UNIQUE NOT NULL,
    work_phone_number CHAR(10),
    note VARCHAR(400),
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS daycaredb.emergency_contact_profiles (
    id INT AUTO_INCREMENT UNIQUE,
    relationship VARCHAR(10) NOT NULL,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL,
    chinese_name VARCHAR(20),
    home_phone_number CHAR(10),
    occupation VARCHAR(20),
    work_time VARCHAR(20),
    work_phone_number CHAR(10),
    cell_phone_number CHAR(10) UNIQUE NOT NULL,
    note VARCHAR(400),
    PRIMARY KEY (id)
);


CREATE TABLE IF NOT EXISTS daycaredb.medical_history_records (
    id INT AUTO_INCREMENT UNIQUE,
    height SMALLINT NOT NULL,
    weight SMALLINT NOT NULL,
    bronchiolitis DATE,
    pneumonia DATE,
    chicken_pox DATE,
    hepatitis DATE,
    scarlet_fever DATE,
    measles DATE,
    german_measles DATE,
    mumps DATE,
    pertussis DATE,
    other_illnesses VARCHAR(200),
    medical_history VARCHAR(300),
    chronic_illnesses VARCHAR(200),
    injuries_hospitalizations_history VARCHAR(200),
    medication_admin VARCHAR(200),
    medication_allergy VARCHAR(200),
    medication_reaction VARCHAR(200),
    respiratory_allergy VARCHAR(200),
    respiratory_reaction VARCHAR(200),
    food_allergy VARCHAR(200),
    food_reaction VARCHAR(200),
    other_allergy VARCHAR(200),
    other_reaction VARCHAR(200),
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS daycaredb.medical_care_profiles (
    id INT AUTO_INCREMENT UNIQUE,
    pcp_name VARCHAR(50) NOT NULL, # primary care physician(PCP) name
    clinic_name VARCHAR(40) NOT NULL,
    address VARCHAR(50) NOT NULL,
    phone_number CHAR(10) NOT NULL,
    primary_health_insurance_provider VARCHAR(50) NOT NULL,
    primary_health_insurance_number CHAR(10) NOT NULL,
    additional_health_insurance_provider VARCHAR(50) NOT NULL,
    additional_health_insurance_number VARCHAR(20) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS daycaredb.child_profiles (
    id INT AUTO_INCREMENT UNIQUE,
    mom_id INT,
    dad_id INT,
    emer_1_id INT,
    emer_2_id INT,
    medical_history_id INT,
    medical_care_id INT,
    enrollment_date DATE NOT NULL,
    start_date DATE,
    withdraw_date DATE,
    withdraw_reason VARCHAR(20),
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL,
    chinese_name VARCHAR(20),
    nick_name VARCHAR(20),
    sex CHAR(6) NOT NULL,
    age DATE NOT NULL,
    birthday DATE NOT NULL,
    primary_language VARCHAR(20) NOT NULL,
    address VARCHAR(50) NOT NULL,
    phone CHAR(10),
    child_status VARCHAR(15),
    PRIMARY KEY (id),
    FOREIGN KEY (mom_id)
        REFERENCES daycaredb.primary_contact_profiles (id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (dad_id)
        REFERENCES daycaredb.primary_contact_profiles (id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (emer_1_id)
        REFERENCES daycaredb.emergency_contact_profiles (id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (emer_2_id)
        REFERENCES daycaredb.emergency_contact_profiles (id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (medical_history_id)
        REFERENCES daycaredb.medical_history_records (id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (medical_care_id)
        REFERENCES daycaredb.medical_care_profiles (id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS daycaredb.signin_records (
    id INT AUTO_INCREMENT UNIQUE,
    child_id INT NOT NULL,
    parent_signature VARCHAR(20),
    sign_in_timestamp DATETIME NOT NULL,
    sign_out_timestamp DATETIME,
    PRIMARY KEY (id),
    FOREIGN KEY (child_id)
        REFERENCES daycaredb.child_profiles (id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS daycaredb.daily_records (
    id INT AUTO_INCREMENT UNIQUE,
    child_id INT NOT NULL,
    record_date DATE NOT NULL,
    emotion VARCHAR(10),
    sleep_duration TIME NOT NULL,
    body_temperature TINYINT NOT NULL,
    defecation TINYINT NOT NULL,# 排便
    meal TINYTEXT,
    activity TEXT,
    defecation_at_home TINYINT,
    sleep_status TEXT,
    PRIMARY KEY (id),
    FOREIGN KEY (child_id)
        REFERENCES daycaredb.child_profiles (id) ON DELETE CASCADE ON UPDATE CASCADE
); 

insert into daycaredb.primary_contact_profiles values
(1,'father','xi','hua','asd',34,'english','sales','amzaon','qqq@qq.com','',4501232345,'',''),
(2,'mother','ha','xw','wc',52,'chinese','tech','apple','123@qq.com','',1231232345,'','');
# (3,'father','te','qq','ww',26,'english','sales','amzaon','345@qq.com','',4561232345,'','');

insert into daycaredb.emergency_contact_profiles values
(1,'father','xi','hua','asd','','sales','weekday','',4501232345,''),
(2,'mother','ha','xw','wc','','tech','weekday','',1231232345,'');
# (3,'father','te','qq','ww','','sales','weekday','',4561232345,'');

insert into daycaredb.medical_history_records values
(1,100,35,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null);
# (2,111,45,'','','','','','','','','','','','','','','','','','','','','',''),
# (3,120,46,'','','','','','','','','','','','','','','','','','','','','','');

insert into daycaredb.medical_care_profiles values 
(1,'aviad','mission','123 asd', 5101231234,'famers',111111,'alte',222222);
# (1,'ashiry','warm spring','345 asd', 5101222234,'famers',211111,'alte',422222),
# (1,'eva','fremont','234 asd', 5101234234,'famers',311111,'alte',522222);

insert into daycaredb.child_profiles values
(1,2,1,1,2,1,1,'2016-01-01','2016-02-01','2016-03-01','go back china','yue', 'yang','yue yang', 'cc','F','3-1-1','2012-03-01','chinese','123 ss', 5103121234,'drop');
# (2,2,2,2,2,2,2,'2016-01-01','2016-07-12','','','we', 'hua','yue yang', 'bb','m','1-1-1','2015-09-15','english','123 ss', 5103122334,'studing'),
# (3,3,3,3,3,3,3,'2016-01-01','2016-11-09','','','due', 'xaing','yue yang', 'aa','F','5-1-1','2012-14-09','chinese','123 ss', 5133121234,'studing');

insert into daycaredb.signin_records values
(1,1,'','2016-01-01 08:10:00',null);

insert into daycaredb.daily_records values
(1,1,'2016-01-01','','12:02:28',37,2,'','',1,'');

GRANT SELECT, INSERT, DELETE, UPDATE
ON daycaredb.*
TO admin@localhost
IDENTIFIED BY 'pass@word';


GRANT SELECT
ON daycaredb.child_profiles
TO admin@localhost
IDENTIFIED BY 'pass@word';