

create table user(
	id int unsigned auto_increment primary key,
	name varchar(30) not null
);

insert into user(name) values('user1');
insert into user(name) values('user2');
insert into user(name) values('user3');

create table article(
	id int unsigned auto_increment primary key,
	uid int not null,
	title varchar(200) not null,
);

insert into article(uid,title) values(1,'111111111111111');
insert into article(uid,title) values(2,'222222222222222');
insert into article(uid,title) values(1,'333333333333333');
insert into article(uid,title) values(1,'444444444444444');
insert into article(uid,title) values(2,'555555555555555');






