#CONSULTAS DE AGRUPAMIENTO 

SELECT COUNT(titulo) AS 'NÚMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;


#CONSULTAS DE AGRUPAMIENTO CON CONDICIONES

SELECT COUNT(titulo) AS 'NÚMERO DE ENTRADAS', categoria_id 
FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 4;


/*

AVG     Sacar el promedio
COUNT   Contar el número de elementos
MAX     Valor máximo del grupo
MIN     Valor minimo del grupo
SUM     Sumar todo el contenido del grupo

*/

SELECT AVG(id) AS 'Media de entradas' FROM entradas;
SELECT MAX(id), titulo AS 'ültima entrada' FROM entradas;
SELECT SUM(id) AS 'SUMA IDs' FROM entradas;