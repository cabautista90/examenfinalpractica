# examenfinalpractica
repositorio del examen final practica

#estructura del proyecto con la creacion de la carpetas de forma local en visual code

#Examenfinalpractica

├── /app

│   ├── /

│   │   └── database.php

│   ├── /controllers

│   │   └── LibroController.php

│   ├── /models

│   │   └── Libro.php

│   └── /views

│       └── index.php

│

├── /public

│   ├── .htaccess

│   └── index.php

│

├── /vendor

├── composer.json

└── package.json

##creamos una interfaz utilizando HTML

#en LibroController.php creamos la estrucura CRUD crear, leer, actualizar, borrar

#se utilizo Axios para la gestion de solicitudes al servidor y obtener respuestas del servidor de manera mas sencilla

#se creo la clase libroController para la gestion de archivos entre vista y el modelo

#se implemento Boostrap para mejorar la interfaz en el desarrollo de la pagina web

#se realizo la configuración del router y .htaccess

#USO DE LA APLICACION

#ingresar por medio del localhost de cualquier navegador (http://localhost/examenf/](http://localhost/examenfinalpractica/app/views/)

#Donde podemos ver la interfaz que nos permite gestionar libros con los atributos creados titulo,autor,año_publicacion,genero

# http://localhost/examenfinalpractica/app/config/database.php es donde ejecutamos la base de datos desde mysql


# se ejecuto .htaccess para manejar rutas amigables


