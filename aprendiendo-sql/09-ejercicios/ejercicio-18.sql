#LISTAR LOS CLIENTES QUE HAN HECHO ALGÚN ENCARGO DEL COCHE 'Mercedes Ranchera'


SELECT * FROM clientes cl
INNER JOIN encargos e ON cl.id = e.cliente_id   
INNER JOIN coches co ON co.id = e.coche_id  
WHERE cl.id IN (SELECT cliente_id FROM encargos)
WHERE e.coche_id IN (SELECT id FROM coches WHERE modelo LIKE 'Mercedes Ranchera');







SELECT * FROM clientes WHERE id IN (SELECT cliente_id FROM encargos WHERE coche_id IN (SELECT id FROM coches WHERE modelo = 'Mercedes Ranchera'));
