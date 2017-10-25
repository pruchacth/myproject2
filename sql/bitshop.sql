#========================================================
# Information System and Business Computer, Huntra
# Rajamangala University of Technology Suvarnabhumi
# (c) 2017 by Dr.Arnut Ruttanatirakul (www.arnut.com)
# September 19, 2017
#=========================================================
#--create table
#--table name: member

CREATE TABLE member (
  no int(10) NOT NULL auto_increment,
  id varchar(10) NOT NULL,
  name varchar(30) NOT NULL,
  surname varchar(30) NOT NULL,
  age char(3) NOT NULL,
  sex varchar(5) NOT NULL,
  adress text NOT NULL,
  email varchar(30) NOT NULL,
  edu varchar(200) NOT NULL,
  company varchar(100) NOT NULL,
  salary int(7) NOT NULL,
  tel varchar(15) NOT NULL,
  mobile varchar(15) NOT NULL,
  user varchar(15) NOT NULL,
  password varchar(15) NOT NULL,
  replypassword varchar(15) NOT NULL,
  regdate datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (no,id)
);

#--insert data
INSERT INTO `member` VALUES (1, '10001', 'สายใจ', 'บ้านหันตรา', '22', 'ชาย', 'บ้าน', 'saijai@gmail.com', 'RMUTSB', 'home', 20000, '029418471', '0896661921', 'saijai', 'love123', 'love123', '0000-00-00 00:00:00');
INSERT INTO `member` VALUES (2, '10002', 'รักดี', 'รักการเรียน', '22', 'หญิง', 'บ้าน', 'rukdee@gmail.com', 'RMUTSB', 'home', 20500, '021111111', '0891412454', 'rukdee', 'love123', 'love123', '0000-00-00 00:00:00');
INSERT INTO `member` VALUES (3, '10003', 'ปิติ', 'บ้านหันตรา', '22', 'ชาย', 'หอ', 'piti@gmail.com', 'RMUTSB', 'home', 40000, '021241212', '0862132554', 'piti', 'love123', 'love123', '0000-00-00 00:00:00');
