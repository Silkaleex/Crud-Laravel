<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## ¿Que es Laravel?
Laravel es un framework de PHP para aplicaciones web con una sintaxis expresiva y elegante. Además es accessible, potente y proporciona las herramientas necesarias para aplicaciones grandes y robustas.

## Sobre la Lista de tareas
## Aqui en este proyecto hemos usado el MVC(Modelo, Vista, Controlador), es un patrón de arquitectura de software, que separa los datos y principalmente lo que es la lógica de negocio de una aplicación de su representación y el módulo encargado de gestionar los eventos y las comunicaciones.

## Werb
### Es la parte mas importante por que aqui se guardar las redirecciones de los componentes
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/65952311-543a-4d90-bee8-362ab4f8401f)
## Base
Es la estrucutura principal de nuestro componente.
=> Layout: plantilla base que define la estructura y diseño común de varias páginas en una aplicación web.
    Permite reutilizar elementos de diseño y codigo encabezados como menus, pies de pagina, en multiples vistas sin tener que repetir
    el mismo codigo en cada una.
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/e97105d5-e478-46c0-92f4-79b08b388db7)

## Tasks
Aqui cree una tabla básica donde se pueden ven las tareas creadas y guardadas en nuestra base de datos,Aqui podremos crear una nueva tarea, ver la tarea, su descripción, fecha, estado, si esta completada o en proceso o pendiente de hacer y por ultimo si queremos editarla o eliminarla.
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/e4808c25-2ab5-4dd0-b72e-c2786aba9288)
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/c68b81e7-66e4-4b64-8594-0b09805baa09)
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/b6528bf4-446d-4732-afab-8d82056cda90)

## Tasks Controller
### Responde a eventos (usualmente acciones del usuario) e invoca peticiones al 'modelo' cuando se hace alguna solicitud sobre la información (por ejemplo, editar un documento o un registro en una base de datos).
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/1d64504e-69ee-4a95-848a-6abda8c47492)
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/825fe380-b44b-4670-ba55-403b157abc44)

## Create
## Creamos una nueva lista de tareas que se registra y se guarda en la base de datos, si no se rellena los datos, nos muestra un mensaje avisandonos que tenemos que rellenar los campos obligatorios.
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/2ebf7e43-7df4-474b-bbc3-c306b4edacc9)
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/45f1a8d0-9336-4b11-9385-926f1ba3b4ef)
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/78a23d52-1562-4f41-be31-7ececa67dd2b)

## Edit
## Si nos equivocamos en nuestra tarea tenemos una sección donde podemos modificar esos datos, que no queremos, si no los rellenamos pasa lo mismo que en create nos pondra un mensaje de alerta rellenando los campos obligatorios
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/90e71b24-cdca-4321-8755-a8459b88b2e4)
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/b2b5897d-c573-42fc-b739-3889f906244b)
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/d886d298-3c88-46c4-849e-0c291d6059db)

## Task
### Este componente envia información de la lista de tareas a nuestra base de datos
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/0f311ef6-7d55-4b05-a13d-4a42a37aa4ee)

## Base de datos
### Almacenamiento de los datos creados en nuestra lista de tareas, el titulo, la descripción, fecha de la tarea y cuando se creo.
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/6880046f-e06f-4527-81c3-071143c6b720)

## ¿Como crear una base de datos con laravel?
### En mi caso uso WampServer y accedo phpMyAdmin, nos creamos una cuenta en ella, el usuario por defecto es root y le establecemos una contraseña
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/5b28067e-b692-43ca-8d15-95559bad5189)

### Una vez dentro le damos a nueva
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/601f613a-eee7-4536-971a-b007e3de4a9b)

### Ponemos el nombre que queramos a nuestra base de datos
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/f263f292-073d-4418-af7f-7b7ab8935041)

### vamos al archivo. env que es donde vamos a poner el nombre de nuestra base de datos, el nombre del usuario y contraseña
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/39d3354f-eed8-435e-a1b5-07f7f98d195b)
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/3577106d-2cf2-4511-a2e5-901ad1ac44aa)
### Con esto ya estaria listo, pero para verificar que todo esta correcto vamos a los comandos puedes usar vscode que es mi caso o el que tengas en tu ordenador
### accedermos a nuestro terminal donde tenemos el proyecto y usamos el siguiente comando **php artisan migrate** 
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/a88e275d-4fcc-4af5-bdf5-dddaee831b2e)
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/e96a6267-5b27-4fb8-b0ae-021519463ea2)
## Es muy importante hasta este punto que tengas encendido tu apache y tu mysql
### en mi caso me sale esto por que ya lo tengo configurado en tu caso se cogeran los datos que tengas en esta carpeta
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/bc6ea5f4-6463-4be1-9c67-8d4f996b35e5)
### Son tablas que vienen por defecto que se verian así
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/436f79e2-e6f8-402d-8e23-de9e07c34747)
### para crear nuestra tabla de base de datos hay que hacer un comando, se crean cronologicamente, php artisan make:migration "create_tasks_table"
### en mi casi es create_tasks_table aqui puedes poner al archivo el nombre que tu quieras
### Este archivo se guarda en databse/migrations/create_tasks_table, aqui configuramos los datos que queramos con sus propiedades, aqui te lo dejo como ejemplo
### ![image](https://github.com/Silkaleex/Crud-Laravel/assets/82760991/89f90294-bd6a-4110-9872-c3f9ed0d36c9)

