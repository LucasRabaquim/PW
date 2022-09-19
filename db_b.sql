create database db_b;

use db_b;

create table tbl_funcionario(
codigo int auto_increment primary key,
nome varchar(100) not null,
cpf numeric(11) not null,
cd_dpto int not null
);
describe tbl_funcionario;

create table tbl_depto(
codigo int auto_increment primary key,
departamento varchar(50)
);

drop database db_b;

insert into tbl_funcionario(nome, cpf, cd_dpto) values('juares tavora', 12349488809, 2);
insert into tbl_funcionario(nome, cpf, cd_dpto) values('lucas mendes', 15611133801, 1);
insert into tbl_funcionario(nome, cpf, cd_dpto) values('jessé', 22277851926, 3);

insert into tbl_depto(departamento) values('TI');
insert into tbl_depto(departamento) values('finanças');
insert into tbl_depto(departamento) values('marketing');

alter table tbl_funcionario add foreign key (cd_dpto) references tbl_depto(codigo);


create view vw_funcionario as
select 
tbl_funcionario.codigo,
tbl_funcionario.nome,
tbl_funcionario.cpf,
tbl_depto.departamento
from tbl_funcionario inner join tbl_depto 
where tbl_funcionario.cd_dpto = tbl_depto.codigo;
