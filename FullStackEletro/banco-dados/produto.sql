 /* create table `fstackeletro`.`produto`(
`id_prod` int not null auto_increment primary key,
`descricao` varchar(100) not null,
`preco` decimal(8,2) not null,
`nome_imagem` varchar(100) not null
); */

insert into `fstackeletro`.`produto`(`descricao`, `preco`, `nome_imagem`)
values ('Fogão Brastemp 6 Bocas Branco', 2019.00, 'fog-brast-6b-br');

insert into `fstackeletro`.`produto`(`descricao`, `preco`, `nome_imagem`)
values ('Microondas Consul 30 Litros', 430.00, 'micr-cons-30L');

insert into `fstackeletro`.`produto`(`descricao`, `preco`, `nome_imagem`)
values ('Lavadora de Roupas LG 12 Litros', 1300.00, 'lav-roup-LG-12L');

insert into `fstackeletro`.`produto`(`descricao`, `preco`, `nome_imagem`)
values ('Lava Louças Brastemp 20 Litros', 5019.00, 'lav-lou-brast-20L');