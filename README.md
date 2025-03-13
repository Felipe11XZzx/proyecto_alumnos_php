# Proyecto de Gestión Centro Educativo

Este proyecto es una aplicación web desarrollada con Laravel que permite gestionar un centro educativo, incluyendo la administración de alumnos, sistema de autenticación y diferentes secciones informativas.

## Características Principales
- Sistema de autenticación de usuarios
- Gestión completa de alumnos (CRUD)
- Secciones informativas del centro
- Formulario de contacto
- Panel de noticias y eventos
- Diseño responsive con Tailwind CSS

## Tecnologías Utilizadas
- Laravel 11
- PHP 8.3
- MySQL
- Tailwind CSS
- DaisyUI
- Control de versiones Git
- SweetAlert2 para notificaciones

## Instalación
1. Clona el repositorio:
   ```bash
   git clone https://github.com/Felipe11XZzx/proyecto_alumnos_laravel.git
   ```

2. Instala las dependencias:
   ```bash
   composer install
   npm install
   ```

3. Configura el archivo .env:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Configura la base de datos en el archivo .env:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tu_base_de_datos
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
   ```

5. Ejecuta las migraciones:
   ```bash
   php artisan migrate
   ```

6. Inicia el servidor:
   ```bash
   php artisan serve
   npm run dev
   ```

## Estructura del Proyecto
- `/resources/views`: Vistas Blade del proyecto
  - `components`: Componentes reutilizables
  - `layouts`: Plantillas base
  - `alumno`: Vistas relacionadas con la gestión de alumnos
- `/routes`: Definición de rutas
- `/app/Http/Controllers`: Controladores
- `/public`: Archivos públicos (CSS, JS, imágenes)

## Funcionalidades
- **Gestión de Alumnos**
  - Listado de alumnos
  - Creación de nuevos alumnos
  - Edición de datos
  - Eliminación de registros
- **Sistema de Autenticación**
  - Registro de usuarios
  - Login/Logout
  - Recuperación de contraseña
- **Secciones Informativas**
  - Página de inicio
  - Sobre nosotros
  - Contacto
  - Noticias y eventos

## Contribución
Si deseas contribuir a este proyecto, sigue estos pasos:
1. Haz un fork del repositorio
2. Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`)
3. Haz commit de tus cambios (`git commit -am 'Añade nueva funcionalidad'`)
4. Haz push a la rama (`git push origin feature/nueva-funcionalidad`)
5. Abre un Pull Request

## Licencia
Este proyecto está bajo la Licencia MIT.

## Autor
Felipe Ortiz

## Agradecimientos
- Laravel Team
- Tailwind CSS
- DaisyUI
- SweetAlert2
