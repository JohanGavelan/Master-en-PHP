#SACAR TODOS LOS USUARIOS CON ENTRADAS

SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);


#SACAR LOS USUARIOS QUE EN EL TITULO DE SUS ENTRADAS HAYAN ESCRITO GTA;

SELECT nombre, apellidos FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE titulo LIKE '%GTA%');


#SACAR TODAS LAS ENTRADAS DE LA CATEGORÍA ACCIÓN

SELECT titulo FROM entradas WHERE categoria_id = 3;
SELECT categoria_id, titulo FROM entradas WHERE categoria_id IN (SELECT id FROM categorias WHERE nombre='Deportes');


#MOSTRAR LAS CATEGORÍAS CON MÁS DE 3 O MÁS ENTRADAS

SELECT nombre FROM categorias WHERE id IN (SELECT categoria_id FROM entradas WHERE COUNT(ID) >= 3);

SELECT nombre FROM categorias WHERE id IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >= 3);


#MOSTRAR LOS USUARIOS QUE CREARON UNA ENTRADA UN MARTES

SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE DAYNAME(fecha)='Thursday'); 


#MOSTRAR EL NOMBRE DEL USUARIO QUE TENGA MÁS ENTRADAS

SELECT nombre FROM usuarios WHERE id = (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);


#MOSTRAR LAS CATEGORIAS SIN ENTRADAS
SELECT * FROM categorias WHERE id NOT IN (SELECT categoria_id FROM entradas);