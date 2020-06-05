#OBTENER LISTADO DE CLIENTES ATENDIDOS POR EL VENDEDOR 'David Lopez'

SELECT c.*, CONCAT(v.nombre, ' ', v.apellidos) AS 'Vendedor encargado' FROM clientes c
INNER JOIN vendedores v ON v.id = c.vendedor_id
WHERE v.id = 1;


SELECT * FROM clientes WHERE vendedor_id = 1;


SELECT * FROM clientes WHERE vendedor_id IN (SELECT id FROM vendedores WHERE nombre = 'David' AND apellidos = 'Lopez');
