#VISUALIZAR TODOS LOS CARGOS Y EL NÚMERO DE VENDEDORES QUE HAY EN CADA CARGO

SELECT cargo, COUNT(nombre) FROM vendedores GROUP BY cargo;