#SACAR LA MEDIA DE SUELDOS ENTRE TODOS LOS VENDEDORS POR GRUPO

SELECT AVG(sueldo) 'Media del sueldo' FROM vendedores GROUP BY grupo_id;   

SELECT CEIL(AVG(v.sueldo)) AS 'media sueldo', g.nombre AS 'grupo', g.ciudad FROM vendedores v
INNER JOIN grupos g ON g.id = v.grupo_id
GROUP BY grupo_id;