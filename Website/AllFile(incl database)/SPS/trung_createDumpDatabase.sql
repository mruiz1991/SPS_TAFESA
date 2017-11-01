use admin_it_studies_dev;
select * from tblstudentstudyplantimings;
select * from tblqualstudyplan;
select * from tbldayofweek;
select * from tblstudentstudyplandetails;
select * from tblsisgrades_sr024;
select * from tblqualtafecodesica;

Drop table tblstudent;
CREATE TABLE IF NOT EXISTS tblStudent
(`id` VARCHAR(20) NOT NULL, 
`fName` VARCHAR(100),
`lName` VARCHAR(100), 
`email` VARCHAR(100),
`street` VARCHAR(100),
`city` VARCHAR(100),
`postcode` VARCHAR(10),
`phoneNo` VARCHAR(100),
`note` VARCHAR(225));

insert into tblStudent(`id`,`fName`,`lName`, `email`,`street`,`city`,`postcode`,`phoneNo`,`note`) values ('000937494','Trung','Le', 'xd.letrung@gmail.com','330 Portrush Rd', 'Heathpool - SA','5068', '0456 667 789','');

Drop table tblStudentErolment;
CREATE TABLE IF NOT EXISTS tblStudentErolment
(`id` VARCHAR(20), 
`qualification` VARCHAR(100),
`studyPlan` VARCHAR(100), 
`status` tinyint(1),
`semester` int(2),
`note` VARCHAR(225));

insert into tblStudentErolment values ('000937494','Diploma of Software Development','2016 S2',1,1,''),('000937494','Diploma of Software Development','2017 S1',0,2,'');


Drop table tblStudyPlan;
CREATE TABLE IF NOT EXISTS tblStudyPlan
(`studyPlan` VARCHAR(100), 
`CRN` VARCHAR(10),
`studyPath` VARCHAR(10), 
`subjectCode` VARCHAR(10),
`compentencyName` VARCHAR(225),
`credit` int(5),
`fee` double(8,2),
`result` VARCHAR(20));

INSERT INTO tblStudyPlan values ('2016 S2','13274','ADL','5C#W','Apply advanced programming skills in another language',80,424.00,'P'),
								('2016 S2','13295','ADL','5DD','Design a database',50,265.00,'C'),
                                ('2016 S2','12544','ADL','5JAM','Debug and Monitor applications',40,212.00,'P'),
                                ('2016 S2','12549','ADL','5JAM','Apply intermediate Object-oriented language sill',60,318.00,'P'),
                                ('2016 S2','13299','ADL','5STD','Deploy an application to production environment',40,212.00,'P'),
                                ('2016 S2','13303','ADL','5STD','Manage a project using software management',60,318.00,'P'),
                                ('2016 S2','12735','ADL','5WORK','Aplly testing techniques for software development',40,212.00,'P'),
                                ('2016 S2','12739','ADL','5WORk','Validate an application design against speccification',40,212.00,'P');

INSERT INTO tblStudyPlan values ('2017 S1','5435','ADL','5IOSMD','Build advanced user interface',60,318.00,''),
								('2017 S1','5444','ADL','5JAW','Apply object-orientation laguage skills',80,424.00,''),
                                ('2017 S1','5462','ADL','5SDA','Develop technical requirements for business solutions',30,159.00,''),
                                ('2017 S1','5453','ADL','5SDA','Design application architecture',40,212.00,''),
                                ('2017 S1','5469','ADL','6CLP','Create cloud computing services',60,318.00,''),
                                ('2017 S1','5477','ADL','6MITP','Manage ICT projects',80,424.00,''),
                                ('2017 S1','5485','ADL','6MITP','Plan and direct complex ICT project',80,424.00,'');
                                
Drop table tblEnrolCourse;
CREATE TABLE IF NOT EXISTS tblEnrolCourse
(`CRN` VARCHAR(10),
`studyPath` VARCHAR(10), 
`subjectCode` VARCHAR(10),
`tafeCode` VARCHAR(10),
`nationalCode` VARCHAR(20),
`compentencyName` VARCHAR(225),
`credit` int(5),
`fee` double(8,2),
`suggestForSemester` int(2));
                                
INSERT INTO tblEnrolCourse values ('13274','ADL','5C#W','TAADN','ICTPRG523','Apply advanced programming skills in another language',80,424.00,1),
								('13295','ADL','5DD','TAAHC','ICTDBS502','Design a database',50,265.00,1),
                                ('12544','ADL','5JAM','TAADK','ICTPRG503','Debug and Monitor applications',40,212.00,1),
                                ('12549','ADL','5JAM','TAADP','ICTPRG527','Apply intermediate Object-oriented language sill',60,318.00,1),
                                ('13299','ADL','5STD','TAADH','ICTPRG502','Deploy an application to production environment',40,212.00,1),
                                ('13303','ADL','5STD','TAADL','ICTPRG504','Manage a project using software management',60,318.00,1),
                                ('12735','ADL','5WORK','TAAMD','ICTPRG520','Aplly testing techniques for software development',40,212.00,1),
                                ('12739','ADL','5WORk','TAADR','ICTPRG529','Validate an application design against speccification',40,212.00,1);
                  
INSERT INTO tblEnrolCourse values ('5435','ADL','5IOSMD','TAAHY','ICTPRG506','Build advanced user interface',60,318.00,2),
								('5444','ADL','5JAW','TAADG','ICTPRG501','Apply object-orientation laguage skills',80,424.00,2),
                                ('5462','ADL','5SDA','TAAKL','ICTSAD505','Develop technical requirements for business solutions',30,159.00,2),
                                ('5453','ADL','5SDA','TAAHZ','ICTPRG506','Design application architecture',40,212.00,2),
                                ('5469','ADL','6CLP','TAAKA','ICTPRG604','Create cloud computing services',60,318.00,2),
                                ('5477','ADL','6MITP','TAACR','ICTPMG501','Manage ICT projects',80,424.00,2),
                                ('5485','ADL','6MITP','TAACT','ICTPMG609','Plan and direct complex ICT project',80,424.00,2);
                                
Select * from tblStudyPlan where `studyPlan`='2017 S1';

Drop table tblTimeTable;
CREATE TABLE IF NOT EXISTS tblTimeTable
(`subjectCode` VARCHAR(10),
`campus` VARCHAR(100),
`room` VARCHAR(10),
`lecturer` VARCHAR(100),
`time` VARCHAR(225));

INSERT INTO tblTimeTable values ('5JAW','ADL','N007','Dale Van Heer','Mon 18:00-21:00'),('5SDA','ADL','E323','Dale Van Heer','Tue 12:00-15:00'),('5IOSMD','ADL','E231','Nadil Sundarapperuma','Wed 9:00-12:00'),('6CLP','ADL','N007','Dale Van Heer','Mon 12:00-15:00'),('6MITP','ADL','N008','Kim Bond','Mon 15:00-18:00');