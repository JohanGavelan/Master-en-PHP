#VISUALIZAR LOS NOMBRES DE LOS CLIENTES Y LA CANTIDAD DE ENCARGOS REALIZADOS INCLUYENDO LOS QUE NO HAYAN REALIZADO ENCARGOS

SELECT cl.nombre AS 'clientes', e.cantidad AS 'encargos' FROM encargos e
INNER JOIN clientes cl ON cl.id = e.cliente_id
GROUP BY 1;



SELECT cl.nombre, COUNT(e.cliente_id) FROM clientes cl
LEFT JOIN encargos e ON e.cliente_id = cl.id
GROUP BY 1;