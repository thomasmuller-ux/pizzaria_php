create database BDPizzaria;
use BDPizzaria;

create table bordas (
	id int primary key auto_increment not null,
    tipo varchar (100)
    );
    
create table massas (
	id int primary key auto_increment not null,
	tipo varchar (100)
	);
    
create table sabores (
	id int primary key auto_increment not null,
	nome varchar (100)
    );
    
create table pizzas (
	id int primary key auto_increment not null,
	borda_id int not null,
    massa_id int not null,
    foreign key (borda_id) references bordas (id),
	foreign key (massa_id) references massas (id)
    );
    
create table pizza_sabor (
	id int primary key auto_increment not null,
	pizza_id int not null,
	sabor_id int not null,
	foreign key (pizza_id) references pizzas (id),
	foreign key (sabor_id) references sabores (id)
	);
    
create table status (
	id int primary key auto_increment not null,
	tipo varchar (100)
	);
    
create table pedidos (
	id int primary key auto_increment not null,
	pizza_id int not null,
    status_id int not null,
    foreign key (pizza_id) references pizzas (id),
    foreign key (status_id) references status (id)
    );
    
create table users (
    id int not null primary key auto_increment,
    username varchar(50) not null unique,
    password varchar(255) not null,
    created_at datetime default current_timestamp
);

#inserts

insert into status (tipo) values ("No forno!");
insert into status (tipo) values ("Saiu pra entrega!");
insert into status (tipo) values ("Entregue");

insert into massas (tipo) values ("Massa Comum");
insert into massas (tipo) values ("Massa Integral");
insert into massas (tipo) values ("Massa Temperada");

insert into bordas (tipo) values ("Cheddar");
insert into bordas (tipo) values ("Catupiry");

insert into sabores (nome) values ("Quatro queijos");
insert into sabores (nome) values ("Frango e Catupiry");
insert into sabores (nome) values ("Calabresa");
insert into sabores (nome) values ("Lombinho");
insert into sabores (nome) values ("Filé com Cheddar");
insert into sabores (nome) values ("Portuguesa");
insert into sabores (nome) values ("Margherita");




