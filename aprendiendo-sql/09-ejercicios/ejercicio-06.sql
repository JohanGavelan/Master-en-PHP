#VISUALIZAR EL NOMBRE Y LOS APELLIDOS DE LOS VENDEDORES EN UNA MISMA COLUMNA Y SU FECHA DE REGISTRO Y EL DÍA DE LA SEMANA EN LA QUE SE REGISTRARON

SELECT CONCAT(nombre, ' ', apellidos) AS 'Nombres completos', fecha, DAYOFWEEK(fecha) FROM vendedores;