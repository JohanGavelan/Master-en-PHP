#LISTAR LOS VENDEDORES Y EL N° DE CLIENTES QUE TIENEN. MOSTRAR TODOS LOS VENDEDORES TENGAN O NO CLIENTES. 

SELECT v.id, CONCAT(v.nombre, ' ', v.apellidos) AS 'Vendedor', COUNT(c.id) AS 'N° de clientes' FROM clientes c
RIGHT JOIN vendedores v ON v.id = c.vendedor_id
GROUP BY 2;

