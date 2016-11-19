# Author: Arvin Mai & Wei Jin & Han Wu
# ID: 10010
# Subject: CS556_Project_MySQL_Configuration
# Time: 11/03/2016

# reset database
DROP DATABASE IF EXISTS daycaredb;
# create database for daycare
CREATE DATABASE IF NOT EXISTS daycaredb;

# create table for parent profiles
CREATE TABLE IF NOT EXISTS daycaredb.primary_contact_profiles (
    # unique primary contact profile id
    id INT AUTO_INCREMENT UNIQUE,
    # relationship to kid
    relationship VARCHAR(10) NOT NULL,
    # english first name
    first_name VARCHAR(20) NOT NULL,
    # english last name
    last_name VARCHAR(20) NOT NULL,
    # chinese full name
    chinese_name VARCHAR(20),
    # age
    age TINYINT NOT NULL,
    # language spoken
    language_spoken VARCHAR(50) NOT NULL,
    # parent's job
    occupation VARCHAR(20) NOT NULL,
    # company name
    employer VARCHAR(30),
    # primary email address
    primary_email VARCHAR(30) UNIQUE NOT NULL,
    # additional email address
    additional_email VARCHAR(30),
    # cell phone number
    cell_phone_number CHAR(10) UNIQUE NOT NULL,
    # work phone number
    work_phone_number CHAR(10),
    # note 
    note VARCHAR(400),
    PRIMARY KEY (id)
);

# table for emergency contact profiles
CREATE TABLE IF NOT EXISTS daycaredb.emergency_contact_profiles (
    # unique emergency contact profiles
    id INT AUTO_INCREMENT UNIQUE,
    # relationship to kid
    relationship VARCHAR(10) NOT NULL,
    # english first name
    first_name VARCHAR(20) NOT NULL,
    # english last name
    last_name VARCHAR(20) NOT NULL,
    # chinese full name
    chinese_name VARCHAR(20),
    # home landline phone number
    home_phone_number CHAR(10),
    # occupation
    occupation VARCHAR(20),
    # work hours
    work_time VARCHAR(20),
    # work landline phone number
    work_phone_number CHAR(10),
    # cell phone number
    cell_phone_number CHAR(10) UNIQUE NOT NULL,
    # note
    note VARCHAR(400),
    PRIMARY KEY (id)
);

# create table for child's medical history
CREATE TABLE IF NOT EXISTS daycaredb.medical_history_records (
    # unique medical history records id
    id INT AUTO_INCREMENT UNIQUE,
    # child's height in cm (front-end will need to convert back and force to inches)
    height SMALLINT NOT NULL,
    # child's wieght (in pounds, no conversion needed in front-end)
    weight SMALLINT NOT NULL,
    # 細支氣管炎 (NULL means no history, otherwise stored in date "YYYY-MM" format)
    bronchiolitis DATE,
    # 肺炎 (NULL means no history, otherwise stored in date "YYYY-MM" format)
    pneumonia DATE,
    # 水痘 (NULL means no history, otherwise stored in date "YYYY-MM" format)
    chicken_pox DATE,
    # 肝炎 (NULL means no history, otherwise stored in date "YYYY-MM" format)
    hepatitis DATE,
    # 喉痧 (NULL means no history, otherwise stored in date "YYYY-MM" format)
    scarlet_fever DATE,
    # 麻疹 (NULL means no history, otherwise stored in date "YYYY-MM" format)
    measles DATE,
    # 德國麻疹 (NULL means no history, otherwise stored in date "YYYY-MM" format)
    german_measles DATE,
    # 腮腺炎 (NULL means no history, otherwise stored in date "YYYY-MM" format)
    mumps_ DATE,
    # 百日咳 (NULL means no history, otherwise stored in date "YYYY-MM" format)
    pertussis DATE,
    # 其他ㄐㄧ (in string format, like a note)
    other_illnesses VARCHAR(200),
    # medical history (front-end multiple choise stored into one variable)
    medical_history VARCHAR(300),
    # chronic illnesses history
    chronic_illnesses VARCHAR(200),
    # history of serious injuries or hospitalizations
    injuries_hospitalizations_history VARCHAR(200),
    # medication that will be administered regularly at daycare
    medication_admin VARCHAR(200),
    # allergy to medication (each item separate by comma)
    medication_allergy VARCHAR(200),
    # allergy reaction to above medication
    medication_reaction VARCHAR(200),
    # respiratory allergy (each item separate by comma)
    respiratory_allergy VARCHAR(200),
    # allergy reaction to above respiratory
    respiratory_reaction VARCHAR(200),
    # food allergy (each item separate by comma)
    food_allergy VARCHAR(200),
    # allergy reaction to above food
    food_reaction VARCHAR(200),
    # other allergy (each item separate by comma)
    other_allergy VARCHAR(200),
    # allergy reaction to above respiratory
    other_reaction VARCHAR(200),
    PRIMARY KEY (id)
);

# create table for child's medical care prodiver / facility
CREATE TABLE IF NOT EXISTS daycaredb.medical_care_profiles (
    # unique medical care profile id
    id INT AUTO_INCREMENT UNIQUE,
    # primary care physician(PCP) name
    pcp_name VARCHAR(50) NOT NULL,
    # clinic name
    clinic_name VARCHAR(40) NOT NULL,
    # PCP address
    address VARCHAR(50) NOT NULL,
    # PCP phone number
    phone_number CHAR(10) NOT NULL,
    # primary health insurance provider
    primary_health_insurance_provider VARCHAR(50) NOT NULL,
    # primary health insurance policy number
    primary_health_insurance_number CHAR(10) NOT NULL,
    # additional health insurance provider
    additional_health_insurance_provider VARCHAR(50) NOT NULL,
    # additional health insurance policy number
    additional_health_insurance_number VARCHAR(20) NOT NULL,
    PRIMARY KEY (id)
);

# create table for child profiles
CREATE TABLE IF NOT EXISTS daycaredb.child_profiles (
    # unique child profile id
    id INT AUTO_INCREMENT UNIQUE,
    # foreign key for primary contact
    mom_id INT,
    # foreign key for primary contact
    dad_id INT,
    # foreign key for emergency contact
    emer_1_id INT,
    # foreign key for emergency contact
    emer_2_id INT,
    # foreign key for medical history
    medical_history_id INT,
    # foreign key for medical care
    medical_care_id INT,
    # enrollment date (date which the parent fill the forms)
    enrollment_date DATE NOT NULL,
    # start date (date which the child start to come to daycare)
    start_date DATE,
    # withdraw date ( date which the child leave the daycare)
    withdraw_date DATE,
    # withdraw reason
    withdraw_reason VARCHAR(20),
    # english first name
    first_name VARCHAR(20) NOT NULL,
    # english last name
    last_name VARCHAR(20) NOT NULL,
    # chinese full name
    chinese_name VARCHAR(20),
    # chinese nick name
    nick_name VARCHAR(20),
    # gender
    sex CHAR(6) NOT NULL,
    # age
    age DATE NOT NULL,
    # birthday in format of MM/DD/YYYY
    birthday DATE NOT NULL,
    # child's primary language
    primary_language VARCHAR(20) NOT NULL,
    # home address
    address VARCHAR(50) NOT NULL,
    # landline phone number
    phone CHAR(10),
    # child status with daycare (ex: waiting list, current, pass, TBD)
    child_status VARCHAR(15),
    PRIMARY KEY (id),
    FOREIGN KEY (mom_id)
    REFERENCES daycaredb.primary_contact_profiles (id),
    FOREIGN KEY (dad_id)
    REFERENCES daycaredb.primary_contact_profiles (id),
    FOREIGN KEY (emer_1_id)
    REFERENCES daycaredb.emergency_contact_profiles (id), 
    FOREIGN KEY (emer_2_id)
    REFERENCES daycaredb.emergency_contact_profiles (id), 
    FOREIGN KEY (medical_history_id)
    REFERENCES daycaredb.medical_history_records (id),
    FOREIGN KEY (medical_care_id)
    REFERENCES daycaredb.medical_care_profiles (id)
);

# create table for sign in/out record
CREATE TABLE IF NOT EXISTS daycaredb.signin_records (
    # unique sign-in record id
    id INT AUTO_INCREMENT UNIQUE,
    # child id who sign-in
    child_id INT NOT NULL,
    # who take the child to daycare
    parent_signature VARCHAR(20),
    sign_in_timestamp DATETIME NOT NULL,
    sign_out_timestamp DATETIME,
    PRIMARY KEY (id),
    FOREIGN KEY (child_id)
        REFERENCES daycaredb.child_profiles (id)
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