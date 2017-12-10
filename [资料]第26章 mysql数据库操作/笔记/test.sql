-- 班级表
create table class(
	id int unsigned auto_increment primary key,
	name varchar(50) not null,
	ctime int not null
);

-- 学员表
create table user(
	id int unsigned auto_increment primary key,
	username varchar(50) not null,
	age tinyint not null
);

-- 填充class数据
insert into class(name,ctime) values('class1',unix_timestamp());
insert into class(name,ctime) values('class2',unix_timestamp());
insert into class(name,ctime) values('class3',unix_timestamp());
insert into class(name,ctime) values('class4',unix_timestamp());

-- 填充user数据
insert into user(username,age) values('user1',19);
insert into user(username,age) values('user2',29);
insert into user(username,age) values('user3',31);
insert into user(username,age) values('user4',22);
insert into user(username,age) values('user5',23);
insert into user(username,age) values('user6',18);
insert into user(username,age) values('user7',17);
insert into user(username,age) values('user8',25);
insert into user(username,age) values('user9',27);
insert into user(username,age) values('user10',32);

-- 还有与班级有关系的user表
create table user(
	id int unsigned auto_increment primary key,
	username varchar(50) not null,
	age tinyint not null,
	class_id int not null
);

insert into user(username,age,class_id) values('user1',19,1);
insert into user(username,age,class_id) values('user2',19,1);
insert into user(username,age,class_id) values('user3',19,1);
insert into user(username,age,class_id) values('user4',19,1);
insert into user(username,age,class_id) values('user5',19,2);
insert into user(username,age,class_id) values('user6',19,3);
insert into user(username,age,class_id) values('user7',19,2);
insert into user(username,age,class_id) values('user8',19,1);
insert into user(username,age,class_id) values('user9',19,2);
insert into user(username,age,class_id) values('user10',19,3);
insert into user(username,age,class_id) values('user10',19,4);
insert into user(username,age,class_id) values('user10',19,5);
insert into user(username,age,class_id) values('user10',19,5);
insert into user(username,age,class_id) values('user10',19,6);




