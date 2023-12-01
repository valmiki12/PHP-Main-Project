CREATE table admins(
	user_id int not null auto_increment,
	first_name varchar (255),
	last_name varchar (255),
	username varchar (255),
	password varchar (255),
    primary key (user_id)
);
CREATE table website_content(
	ID int not null auto_increment,
	fname varchar (255),
	lname varchar (255),
	email varchar (255),
	telNumber varchar (255),
    primary key (ID)
);
INSERT into website_content(fname, lname, email, telNumber)
VALUES
    ('Person', 'A', 'persona@email.com', '2491234567'),
    ('Person', 'B', 'personb@gmail.com', '2491234567'),
    ('Person', 'C', 'personc@gmail.com', '2491234567'),
    ('Person', 'D', 'persond@email.com', '2491234567')