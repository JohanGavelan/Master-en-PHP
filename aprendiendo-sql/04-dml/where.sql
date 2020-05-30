#CONSULTA CON UNA CONDICION

SELECT * FROM usuarios WHERE email = 'example';


#EJEMPLOS 

# 1. Mostrar nombre y apellidos de todos los usuarios registrados en el 2019

SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2019;


# 2. Mostrar nombre y apellidos de todos los usuarios que NO se han registrado en el 2019 o cuya fecha sea nula

SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2019 OR ISNULL(fecha); 


# 3. Mostrar el email de los usuarios cuyo apellido contenga la letra 'a' y que su constraseña 1234

SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = '1234';


# 4. Sacar todos los registros de la tabla usuarios cuyo año sea

SELECT * FROM usuarios WHERE (YEAR(fecha)) % 2 = 0);


# 5. Sacar los nombres y apellidos de la tabla de usuarios cuyo nombre tenga más de 5 letras y que se hayan registrado antes de 2020 y mostrar el nombre en mayúsculas

SELECT UPPER(nombre), apellidos FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(fecha) < 2020;

/* 
MÁS OPERADORES

los comunes = < > etc
Entre       between A and B
En          in
Es nulo     is null
No nulo     is not null
Como        like
No es como  not like 


OPERADORES LÓGICOS

O       OR
Y       AND
NO      NOT


COMODINES:
Cualquier cantidad de carácteres: %;
Un carácter desconocido: _;
*/ 

