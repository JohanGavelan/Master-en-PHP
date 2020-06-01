/* CONSULTAR VARIAS TABLAS A LA VEZ */

#MOSTRAR LAS ENTRADAS CON EL NOMBRE DEL AUTOR Y EL NOMBRE DE LA CATEGORÍA

SELECT e.id, e.titulo AS 'Entrada', u.nombre AS 'Autor', c.nombre AS 'Categoria' 
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;


#INNER JOIN 

SELECT e.id, e.titulo AS 'Entrada', u.nombre, c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;



#MOSTRAR EL NOMBRE DE LAS CATEGORÍAS Y CUÁNTAS ENTRADAS TIENEN

SELECT c.nombre AS 'Categoria', COUNT(e.id) AS 'Número de entradas' FROM categorias c, entradas e WHERE e.categoria_id = c.id GROUP BY categoria_id;

SELECT c.nombre, COUNT(e.id) FROM categorias c
LEFT JOIN entradas e ON e.categoria_id = c.id
GROUP BY e.categoria_id;

SELECT c.nombre, COUNT(e.id) FROM entradas e
RIGHT JOIN categorias c ON e.categoria_id = c.id
GROUP BY e.categoria_id;


#MOSTRAR EL EMAIL DE LOS USUARIOS Y CUÁNTAS ENTRADAS TIENEN

SELECT u.email, COUNT(titulo) AS 'Número de entradas' FROM usuarios u, entradas e WHERE e.usuario_id = u.id GROUP BY usuario_id;