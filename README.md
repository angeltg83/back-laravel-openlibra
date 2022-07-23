## Instalación
- Ejecutar migracion con php artisan migrate
- Ejecutar el seeder php artisan db:seed
  
## Documentacion APIs 

En esta seccion se describe las apis creadas de pruebas

- GET http://localhost:8000/api/mascotas 
  - No recibe parametros y devuelve el listado de mascotas
- GET http://localhost:8000/api/mascotas/dueno/1
  - Recibe como parametro en id del dueño, y devuelve las mascotas del dueño
  
## Docker
Ir a la carpeta raiz del proyecto y ejecutar lo siguiente
- sudo docker-compose up
- ejecutamos # php artisan migrate
- ejecutamos # php artisan db:seed

## En caso de no inicializarce la base 
- Ejecutamos # sudo docker ps, y copiamos el nombre del contenedor que se ejecuto
- Ejecutamos # sudo docker exec -i <nombre_del_contenedor> psql -U postgres < db/base.sql, reemplazando el nombre del contenedor copiado

## Capturas

![image](https://user-images.githubusercontent.com/8096392/178126611-8453947d-daea-4b38-9438-f5acfc37a2c1.png)

![image](https://user-images.githubusercontent.com/8096392/178126628-81a1702f-7a51-4031-a179-7f02753977e1.png)



Fin ...

:) 
