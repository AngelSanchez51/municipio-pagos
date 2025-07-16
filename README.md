1 # Plataforma de Pagos en Línea para el Servicio de Agua Potable - Municipio de Atlacomulco
2 # Este sistema permite a los ciudadanos del Municipio de Atlacomulco realizar pagos en línea del servicio de agua potable de forma segura y rápida. Desarrollado como proyecto universitario, integra una interfaz amigable, autenticación de usuarios y conexión con pasarela de pagos.

3 ## Características
- Registro e inicio de sesión de usuarios
- Consulta de historial de pagos
- Generación de comprobantes
- Interfaz responsiva con Bootstrap
- Integración con PayPal para pagos en línea
- Backend en PHP y MySQL

4 ## Tecnologías
- PHP
- MySQL
- Bootstrap
- HTML5 / CSS3
- PayPal API
- Git

5 ## Instalación

1. Clona el repositorio:
   ```bash
   git clone https://github.com/AngelSanchez51/municipio-pagos.git
Copia el proyecto en la carpeta htdocs de tu XAMPP:

C:\xampp\htdocs\municipio-pagos
Crea una base de datos en phpMyAdmin llamada municipio_pagos.

Importa el archivo .sql ubicado en la carpeta /database.

Configura el archivo de conexión a base de datos en /includes/conexion.php con tus credenciales de MySQL.

Asegúrate de tener configurado PayPal Sandbox (modo prueba) si quieres realizar pagos simulados.

Inicia el servidor Apache y MySQL desde el panel de XAMPP.

Accede desde tu navegador:
http://localhost/municipio-pagos



---

6 ### Uso del sistema
```markdown
## Cómo usar

1. Regístrate con tus datos.
2. Inicia sesión con tu cuenta.
3. Visualiza tu historial y realiza pagos desde el panel de usuario.
4. Confirma tu pago mediante PayPal y recibe tu comprobante.
