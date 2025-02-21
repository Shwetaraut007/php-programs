

create table emp(eno int primary key,
ename varchar(20),
sal int);

 insert into emp values(1,'om',1234);
 insert into emp values(2,'sai',23534);
 insert into emp values(3,'omkar',7490);

create table project(pno int primary key,
pname varchar(20),
duration int,
eno int references emp);

 insert into project values(101,'php',12,1);
 insert into project values(102,'computer',34,2);
 insert into project  values(103,'DSA',76,3);


create table EP(eno int references emp,
pno int references project);

 insert into EP values(1,102);
 insert into EP values(2,101);
 insert into EP values(3,103);