#OBTENER LISTADO DE CLIENTES MOSTRANDO EL NÚMERO DE CLIENTE Y EL NOMBRE, MOSTRAR TAMBIÉN EL NÚMERO DE VENDEDOR Y SU NOMBRE TAMBIÉN


SELECT c.id AS 'N° cliente', c.nombre AS 'Cliente', v.id AS 'N° vendedor', CONCAT(v.nombre, ' ', v.apellidos) AS 'Vendedor' FROM clientes c INNER JOIN vendedores v ON v.id = c.vendedor_id;