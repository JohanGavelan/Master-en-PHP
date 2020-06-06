#CREAR UNA VISTA LLAMADA VENDEDORES A QUE INCLUIRÁ TODOS LOS VENDEDORES DEL GRUPO CON NOMBRE 'VENDEDORES A' 

CREATE VIEW VENDEDORES_A AS 
SELECT v.id, CONCAT(v.nombre, ' ', v.apellidos) AS 'Vendedor', g.nombre FROM vendedores v
INNER JOIN grupos g ON g.id = v.grupo_id
WHERE g.nombre = 'VENDEDORES A';


SELECT * FROM vendedores WHERE grupo_id IN (SELECT id FROM grupos WHERE nombre = 'Vendedores A');