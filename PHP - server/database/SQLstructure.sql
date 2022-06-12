CREATE TABLE user {
	user_id int primary key auto_increment,
	fullName varchar(40) not null,
	age int not null, 
	address varchar(60) not null,
	phone_number varchar(25) not null,
	email varchar(40) not null unique,
	password varchar(50) not null,
	state_date date not null default current_date, -- started date
	NTHtemplateCV int, 
}


-- insert into user(fullName , age, address, phone_number, email, password, state_date) values(---);
