TYPE=VIEW
query=select `clinicavet`.`consulta`.`dataHora` AS `dataHora`,`a`.`nmAnimal` AS `nmAnimal`,`c`.`nomeCliente` AS `nomeCliente`,`clinicavet`.`veterinario`.`nmVeterinario` AS `nmVeterinario`,`clinicavet`.`tiposervico`.`nmServico` AS `nmServico` from (((((`clinicavet`.`cliente` `c` join `clinicavet`.`animal` `a` on((`a`.`idCliente` = `c`.`idCliente`))) join `clinicavet`.`consulta` on((`a`.`idAnimal` = `clinicavet`.`consulta`.`idAnimal`))) join `clinicavet`.`veterinario` on((`clinicavet`.`consulta`.`idVeterinario` = `clinicavet`.`veterinario`.`idVeterinario`))) join `clinicavet`.`consultatiposervico` on((`clinicavet`.`consultatiposervico`.`idConsulta` = `clinicavet`.`consulta`.`idConsulta`))) join `clinicavet`.`tiposervico` on((`clinicavet`.`tiposervico`.`idTipoServico` = `clinicavet`.`consultatiposervico`.`idTipoServico`))) order by `clinicavet`.`veterinario`.`nmVeterinario`,`clinicavet`.`consulta`.`dataHora`
md5=b6cd9d9df7adfd912366acabdccebe7e
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2026-03-23 22:42:10
create-version=1
source=SELECT consulta.dataHora,\n\n  	    a.nmAnimal,\n\n  	    c.nomeCliente,\n\n  	    veterinario.nmVeterinario,\n\n  	    tiposervico.nmServico\nFROM cliente c\nINNER JOIN animal a\nON  a.idcliente = c.idCliente\nINNER JOIN consulta \nON a.idAnimal = consulta.idAnimal\nINNER JOIN veterinario\nON consulta.idVeterinario = veterinario.idVeterinario\nINNER JOIN consultatiposervico \nON consultatiposervico.idConsulta = consulta.idConsulta\nINNER JOIN tiposervico\nON tiposervico.idtiposervico = consultatiposervico.idtipoServico\nORDER BY veterinario.nmVeterinario,consulta.dataHora ASC
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `clinicavet`.`consulta`.`dataHora` AS `dataHora`,`a`.`nmAnimal` AS `nmAnimal`,`c`.`nomeCliente` AS `nomeCliente`,`clinicavet`.`veterinario`.`nmVeterinario` AS `nmVeterinario`,`clinicavet`.`tiposervico`.`nmServico` AS `nmServico` from (((((`clinicavet`.`cliente` `c` join `clinicavet`.`animal` `a` on((`a`.`idCliente` = `c`.`idCliente`))) join `clinicavet`.`consulta` on((`a`.`idAnimal` = `clinicavet`.`consulta`.`idAnimal`))) join `clinicavet`.`veterinario` on((`clinicavet`.`consulta`.`idVeterinario` = `clinicavet`.`veterinario`.`idVeterinario`))) join `clinicavet`.`consultatiposervico` on((`clinicavet`.`consultatiposervico`.`idConsulta` = `clinicavet`.`consulta`.`idConsulta`))) join `clinicavet`.`tiposervico` on((`clinicavet`.`tiposervico`.`idTipoServico` = `clinicavet`.`consultatiposervico`.`idTipoServico`))) order by `clinicavet`.`veterinario`.`nmVeterinario`,`clinicavet`.`consulta`.`dataHora`
