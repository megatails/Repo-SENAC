TYPE=VIEW
query=select `a`.`nmAnimal` AS `nmAnimal`,`a`.`especie` AS `especie`,`c`.`nomeCliente` AS `nomeCliente`,`c`.`celular` AS `celular` from (`clinicavet`.`cliente` `c` join `clinicavet`.`animal` `a` on((`a`.`idCliente` = `c`.`idCliente`)))
md5=4b069b88f881920a1494bddfc6817098
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2026-03-24 00:40:35
create-version=1
source=SELECT a.nmAnimal, a.especie, c.nomeCliente, c.celular\nFROM cliente c\nINNER JOIN animal a\nON a.idCliente = c.idCliente
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `a`.`nmAnimal` AS `nmAnimal`,`a`.`especie` AS `especie`,`c`.`nomeCliente` AS `nomeCliente`,`c`.`celular` AS `celular` from (`clinicavet`.`cliente` `c` join `clinicavet`.`animal` `a` on((`a`.`idCliente` = `c`.`idCliente`)))
