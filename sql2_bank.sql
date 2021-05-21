create database Banking
USE Banking;
create table Customer(Customer_Name varchar(20), Email varchar(30),
                       current_balance double);
insert into customer (Customer_Name,Email,current_balance)
Values ("Aprajita","apra@gmail.com",302900.00)
select * from Customer;
insert into  Customer values("Aarti","aartikr@gmail.com",20000.00);
select * from Customer;
insert into  Customer values("Blessy","blesskr@gmail.com",24500.00),
                              ( "Bandu","bandra@gmail.com",45000.00),
                               ("Prashansa","prashu@gmail.com",78000.00),
                               ("Abhijeet","abhi@gmail.com",8700.00),
                               ("Shailu","shailu@gmail.com",9800.00),
                               ("Zaira","zkhan@gmail.com",6700.00);  
select * from Customer;
insert into  Customer values("Billigraham","blilli@gmail.com",28900.00),
                              ( "Albert","albert@gmail.com",56000.00),
                               ("Paul","paul@gmail.com",34000.00);
   select * from Customer; 
   Alter table customer add column Id integer(5);
	
   Alter table customer modify column Id integer(5) NOT  null;
    Alter table customer add constraint MyPrimaryKey primary key(Id);
    Alter table customer drop column Id;
        select * from Customer;                          