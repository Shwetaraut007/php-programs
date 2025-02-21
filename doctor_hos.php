
create table doctor(dno int primary key,
dname varchar(20),
address varchar(20),
city varchar(20),
area varchar(20));

insert  into doctor  value(1,'ram','pune','belapur','shrirampur');
insert  into doctor  value(2,'sai','mumbai','wadala','nagar');
insert  into doctor  value(3,'om','nashik','rampur','vayjapur');

create table hos(hno int primary key,
hname varchar(20),
hcity varchar(20));

insert  into hos value(101,'more','shirdi');
insert into hos value(102,'pawer','khokar');
insert  into hos value(103,'gaikwad','bhokar');

create table dh(dno int references doctor,
hno int references hos);

insert  into dh value(1,101);
insert  into dh value(2,102);
insert into dh value(3,103);