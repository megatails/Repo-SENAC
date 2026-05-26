TYPE=VIEW
query=select `clinicavet`.`consulta`.`dataHora` AS `dataHora`,`a`.`nmAnimal` AS `nmAnimal`,`c`.`nomeCliente` AS `nomeCliente`,`c`.`celular` AS `celular` from ((`clinicavet`.`cliente` `c` join `clinicavet`.`animal` `a` on((`a`.`idCliente` = `c`.`idCliente`))) join `clinicavet`.`consulta` on((`a`.`idAnimal` = `clinicavet`.`consulta`.`idAnimal`)))
md5=83ae5b96f885e9d23e342cd613f3aa2c
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2026-03-24 00:27:50
create-version=1
source=SELECT consulta.dataHora, a.nmAnimal, c.nomeCliente, c.celular\nFROM cliente c\nINNER JOIN animal a\nON  a.idcliente = c.idCliente\nINNER JOIN consulta \nON a.idAnimal = consulta.idAnimal
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `clinicavet`.`consulta`.`dataHora` AS `dataHora`,`a`.`nmAnimal` AS `nmAnimal`,`c`.`nomeCliente` AS `nomeCliente`,`c`.`celular` AS `celular` from ((`clinicavet`.`cliente` `c` join `clinicavet`.`animal` `a` on((`a`.`idCliente` = `c`.`idCliente`))) join `clinicavet`.`consulta` on((`a`.`idAnimal` = `clinicavet`.`consulta`.`idAnimal`)))
