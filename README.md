# Laravel-Ejemplo
En este repositorio se realizaran practicas y ejemplos para aprender Laravel

# CARPETAS
## routes
- Sirve para crear las rutas y asignarles vistas(views)
- Las rutas se leen de arriba hacia abajo
![alt text](/img_README/routes.png)
- Llaman controllers y usan sus funciones asignadas a views 
### peticiones
- GET: Sirve para que el usurio pida recursos (redireccionar a una pagina)
- POST: Sirve para enviar recursos
- PUT: Sirve actualizar registros
- PATCH: Sirve actualizar registros
- DELETE: Sirve eliminar registros

## Controllers
- Se crean con el comando: php artisan make:controller NameController
- Clases que contiene las funciones necesarias(vistas, funcionaliades)
- Mejora el manejo de rutas 
- Se crea un Controller para uno  o mas views

## views
- Se crean como archivo .blade.php
- Son llamadas por las funciones de los controllers
- Contienen el HTML, usa blade (plantillas de php)
- <!-- <title>Laravel 11 | show</title>
        <script src="https://cdn.tailwindcss.com"></script> -->
- Debajo del title va el link del tailwindcss 
- Sirve para crear las vistas para el usuario

## componentes
- Permiten crear plantillas para ser reutilizadas a lo largo del proyecto



# ARCHIVOS
