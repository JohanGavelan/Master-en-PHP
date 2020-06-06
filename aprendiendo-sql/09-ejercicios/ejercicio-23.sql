#LISTAR TODOS LOS ENCARGOS REALIZADOS CON LA MARCA DEL COCHE Y EL NOMBRE DEL CLIENTE


SELECT e.id, co.marca, cl.nombre FROM encargos e
INNER JOIN clientes cl ON cl.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id;