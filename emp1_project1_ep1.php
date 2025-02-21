
create table emp1(eno int primary key,
ename varchar(20),
qua varchar(20),
 jdate date);

 insert into emp1 values(1,'om','bcom','2005-7-2');
 insert into emp1 values(2,'sai','bca','2001-4-2');
 insert into emp1 values(3,'omkar','bbaca','2001-5-12');

create table project1(pno int primary key,
pname varchar(20),
ptype  varchar(20),
duration int);

 insert into project1 values(101,'php','coding',21);
 insert into project1 values(102,'computer','school',26);
 insert into project1  values(103,'DSA','hotal',37);


create table EP1(eno int references emp,
pno int references project);

 insert into EP1 values(1,102);
 insert into EP1 values(2,101);
 insert into EP1 values(3,103);