Create table table_name(
    id int not null unique,
    name varchar(50) not null,
    age int not null check (age >= 18),
    gender varchar(10) not null,
    phone varchar(10) not null unique,
    city varchar(10) not null default 'Agra'
);