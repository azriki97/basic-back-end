-- Menambahkan data tabel client 

CREATE TABLE clients (
 	id int not null primary key AUTO_INCREMENT,
    name varchar (100) not null,
    email varchar (200) not null unique,
    phone varchar (20) null,
    address varchar(200) null,
    created_at datetime NOT null default CURRENT_TIMESTAMP
);

-- Initial data client

insert into clients (name, email, phone, address)
VALUES
('bill gates', 'bill.gates@gmail.com', '+123456789', 'new york, USA'),
('elon musk', 'elon.musk@gmail.com', '+1122334455', 'Florida, USA'),
('will smith', 'will.smith@gmail.com', '+111333555', 'California, USA'),
('bob marley', 'bob.marley@gmail.com', '+69696969', 'Texas, USA'),
('Christiano Ronaldo', 'ronaldo@gmail.com', '+447799885', 'London, England');