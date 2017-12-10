insert into user(username,age) values('user1',19);
insert into user(username,age) values('user2',20);
insert into user(username,age) values('user3',23);
insert into user(username,age) values('user4',25);
insert into user(username,age) values('user5',32);
insert into user(username,age) values('user6',15);
insert into user(username,age) values('user7',40);
insert into user(username,age) values('user8',45);
insert into user(username,age) values('user9',18);
insert into user(username,age) values('user10',54);
insert into user(username,age) values('linux5',76);


insert into t1(username,age,class_id) values('user1',19,1);
insert into t1(username,age,class_id) values('user2',20,2);
insert into t1(username,age,class_id) values('user3',23,1);
insert into t1(username,age,class_id) values('user4',25,3);
insert into t1(username,age,class_id) values('user5',32,1);
insert into t1(username,age,class_id) values('user6',15,2);
insert into t1(username,age,class_id) values('user7',40,1);
insert into t1(username,age,class_id) values('user8',45,1);
insert into t1(username,age,class_id) values('user9',18,1);
insert into t1(username,age,class_id) values('user10',54,2);
insert into t1(username,age,class_id) values('linux5',76,3);
insert into t1(username,age,class_id) values('linux5',76,4);
insert into t1(username,age,class_id) values('linux5',90,4);
insert into t1(username,age,class_id) values('linux5',80,5);
insert into t1(username,age,class_id) values('linux5',77,5);


create table class(
	id int unsigned auto_increment primary key,
	name varchar(50)
);

insert into class(name) values('class-1');
insert into class(name) values('class-2');
insert into class(name) values('class-3');
insert into class(name) values('class-4');

