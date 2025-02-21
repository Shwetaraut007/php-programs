create table owner1(oname varchar(20) primary key,
 address varchar(20),
 phone_no int);

 insert into owner1 values('om','pune',8732563165);
insert into owner1 values('sai','nashik',8123451334);
insert into owner1 values('sham','wadala',7040105160);
insert into owner1 values('ram','rampur',9373337032);

create table property(pno int primary key,
description varchar(20),
area varchar(20),
oname varchar(20) references owner1);

insert into property values(101,'car','belapur','om');
insert into property values(102,'hotel','shrirampur','om');
insert into property values(103,'home','mumbai','sai');
insert into property values(104,'building','nagar','sham');
insert into property values(105,'land','khanapur','ram');