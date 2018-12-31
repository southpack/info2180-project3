

DROP DATABASE IF EXISTS hire;
CREATE DATABASE hire;
USE hire;

DROP TABLE IF EXISTS `Users`;
CREATE table Users(id INT UNSIGNED NOT NULL PRIMARY KEY auto_increment,
                   first_name varchar(50),
                   last_name varchar(50),
                   password varchar(50),
                   telephone INT(10),
                   email varchar(50),
                   date_joined DATE
                   );
                    

DROP TABLE IF EXISTS `Jobs`;
CREATE table Jobs(id INT UNSIGNED NOT NULL PRIMARY KEY auto_increment,
                   job_title varchar(50),
                   job_description varchar(50),
                   category varchar(50),
                   company_name varchar(50),
                   company_location varchar(50),
                   date_posted DATE
                   );
DROP TABLE IF EXISTS `Jobs_applied_for`;
CREATE table Jobs_applied_for(id INT UNSIGNED NOT NULL PRIMARY KEY auto_increment,
                    job_id INT (4),
                    user_id INT (4),
                    date_applied Date
                    );


INSERT INTO Users(first_name,last_name,password,telephone,email,date_joined) VALUES("Perma","Genna","password123","1999-888-7654","admin@hireme.com","2017-11-01");
INSERT INTO Users(first_name,last_name,password,telephone,email,date_joined) VALUES("Dario","Linton","dari24","1888-777-6666","dari@hireme.com","2017-11-21");

INSERT INTO Jobs(job_title,job_description,category,company_name,company_location,date_posted) VALUES("Product Marketing Manager ", "Marketing","Sales & Marketing", "Jamaica Gleaner","Heavendale","2018-11-03");
INSERT INTO Jobs(job_title,job_description,category,company_name,company_location,date_posted) VALUES("Software Engineer","coding","Programming", "UWI - MITS","Mona","2018-11-02");
INSERT INTO Jobs(job_title,job_description,category,company_name,company_location,date_posted) VALUES("Business Analyst - Scrum Master","Business","Programming", "NCB","Kingston","2018-11-01");
INSERT INTO Jobs(job_title,job_description,category,company_name,company_location,date_posted) VALUES("UI/UX Designer","Design","Design", "Jamaica Yellow Pages","Kingston","2018-10-20");
INSERT INTO Jobs(job_title,job_description,category,company_name,company_location,date_posted) VALUES("Direct Customer Support","Customer Support" ,"Customer Support", "UWI - Bursary","Kingston","2018-10-20");

INSERT INTO Jobs_applied_for(job_id,user_id,date_applied) VALUES(1,1,"2018-01-11");
INSERT INTO Jobs_applied_for(job_id,user_id,date_applied) VALUES(2,2,"2018-01-11");
