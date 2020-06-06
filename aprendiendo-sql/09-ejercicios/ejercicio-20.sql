#SELECCIONAR EL GRUPO EN EL QUE TRABAJA EL VENDEDOR CON MAYOR SALARIO Y MOSTRAR EL NOMBRE DEL GRUPO

SELECT g.id, g.nombre, g.ciudad, v.sueldo FROM vendedores v
INNER JOIN grupos g ON g.id = v.grupo_id
ORDER BY sueldo DESC LIMIT 1;



SELECT * FROM grupos WHERE id IN (SELECT grupo_id FROM vendedores WHERE sueldo = (SELECT MAX(sueldo) FROM vendedores));


