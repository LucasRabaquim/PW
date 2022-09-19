use db_26_08;
show tables;
select * from tbl_produto;
select * from tbl_categoria;
create view vw_ExibeProd as
select  tbl_produto.cd_produto,
		tbl_produto.nm_produto,
		tbl_produto.vl_produto,
        tbl_categoria.nm_categoria 
from tbl_produto inner join tbl_categoria where tbl_produto.cd_categoria = tbl_categoria.cd_categoria;
