-- insert into `atv_um`.`nf` (`id_nf`, `id_item`, `cod_prod`, `valor_unit`, `quantidade`, `desconto %`)
-- values (9, 7, 3, 102.00, 4, 8);

-- delete from atv_um.nf where (valor_unit > 30);

/* select id_nf, id_item, cod_prod, valor_unit
from atv_um.nf
where `desconto %` = 0; */

/* alter table atv_um.nf
add valor_vend decimal(8,2); */

-- select id_nf, id_item, cod_prod, valor_unit, valor_vend from atv_um.nf

-- select * from atv_um.nf where (`desconto %` > 0);

/* insert into `atv_um`.`nf` (`valor_venda`)
where (`desconto %` > 0)
value ( 1.00); */

/* UPDATE `atv_um`.`nf`
SET `valor_vend` =  valor_unit - (valor_unit * (`desconto %`/100))
WHERE (`desconto %` > 0);
select * from atv_um.nf where (`desconto %` > 0); */ 

/* alter table atv_um.nf 
add valor_tot decimal(8,2); */
update atv_um.nf
set valor_tot = valor_vend * quantidade
where (quantidade > 0);









