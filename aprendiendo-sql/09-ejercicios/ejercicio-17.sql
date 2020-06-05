#OBTENER UN LISTADO CON LOS ENCARGOS REALIZADOS POR EL CLIENTE 'Fruteria Antonia INC'

SELECT e.id, cl.nombre AS 'cliente', co.modelo AS 'pedido', e.cantidad, e.fecha FROM encargos e 
INNER JOIN clientes cl ON cl.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE e.cliente_id IN (SELECT id FROM clientes WHERE nombre = 'Fruteria Antonia INC');











ID, CLIENTE, COCHE, CANTIDAD, FECHA