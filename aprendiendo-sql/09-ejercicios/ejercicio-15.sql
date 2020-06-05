#MOSTRAR LOS 2 CLIENTES CON MAYOR NÚMERO DE PEDIDOS Y MOSTRAR CÚANTOS PEDIDOS FUERON

SELECT c.nombre AS 'Clientes', COUNT(e.id) AS 'Pedidos' FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
GROUp BY cliente_id ORDER BY 2 DESC
LIMIT 2;    