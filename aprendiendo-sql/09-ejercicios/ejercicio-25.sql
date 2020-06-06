#OBTENER UNA LISTA DE LOS NOMBRES DE LOS CLIENTES CON EL IMPORTE DE SUS ENCARGOS ACUMULADO

SELECT cl.nombre, SUM(precio*cantidad) AS 'IMPORTE' FROM clientes cl
INNER JOIN encargos e ON e.cliente_id = cl.id
INNER JOIN coches co ON co.id = e.coche_id
GROUP BY cl.id
ORDER BY 2 DESC;