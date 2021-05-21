use banking;
create table Transaction_History (Id integer(20) references customer,Sender varchar(20), Receiver varchar(20),Amount double ,
Transaction_Date date,Transaction_Time time);
Alter table transaction_history drop column transaction_date;
Alter table transaction_history drop column transaction_time;
Alter table transaction_history add column(Date_Time datetime);
Alter table transaction_history drop column Date_time;
 Alter table transaction_history add column (Date_Time  datetime NOT NULL DEFAULT current_timestamp);
Alter table transaction_history drop column Id;
Alter table transaction_history add column Sno integer(20);
Drop table transaction_history;
use banking;
create table Transaction_History (SNo integer(20) ,Sender varchar(20), Receiver varchar(20),Amount double )
 Alter table transaction_history add column (Date_Time  datetime NOT NULL DEFAULT current_timestamp)
 Alter table transaction_history add SNo. integer(20)not null auto_increment primary key first;
 Alter table transaction_history drop column SNo;
 Alter table transaction_history add SNo. integer(20)not null auto_increment primary key first;