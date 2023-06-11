# php

Tuve un problema para descargar el archivo sql dejo aquí el codigo y un script archivo .sql con el código. <br>
El error es: <br>
<img width="189" alt="image" src="https://user-images.githubusercontent.com/109521077/235485267-cdb6937a-7211-4f59-b9e9-f1583ab1e455.png">
<img width="375" alt="image" src="https://user-images.githubusercontent.com/109521077/235483642-a4339ac4-e9c3-491c-9e8f-613276cd212c.png"> <br> <br>
Para crear la base de datos: <br>
CREATE TABLE `usuario` ( `id` INT(10) NOT NULL PRIMARY KEY, `nombre` VARCHAR(20), `apellido` VARCHAR(20), `email` VARCHAR(20));
<img width="588" alt="image" src="https://user-images.githubusercontent.com/109521077/235485060-3d31671b-f0de-4920-9e8a-5f727704c4b8.png">
<br>
<img width="126" alt="image" src="https://user-images.githubusercontent.com/109521077/235480632-7b212718-4159-4896-b8f0-63134138f4e1.png"> <br> <br>
Para insertar una tupla de valores: <br>
INSERT INTO `usuario` (`nombre`, `apellido`, `email`, `id`) VALUES ('Antonio', 'Garcia', 'antoniogarcia@gmail.com', '1'); <br>
<img width="546" alt="image" src="https://user-images.githubusercontent.com/109521077/235483227-badb311d-579f-4fe0-8cfa-bea51112099a.png">
