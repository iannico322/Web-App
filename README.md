# Web-App

MySQL code to run the web-app:

CREATE DATABASE IF NOT EXISTS newbies_db;

create Table tbl_students(
    studentID int(11) not null,
    lastName varchar(20) not null,
    firstName varchar(20) not null,
    MI varchar(4) not null,
    course varchar(20) not null,
    yearlevel varchar(10) not null,
    user_level varchar(10) DEFAULT 'user',
    status varchar(10) DEFAULT 'Active',
    primary key(studentID)
);
