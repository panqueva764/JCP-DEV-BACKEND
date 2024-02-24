# JCP-DEV-BACKEND

## Descripción

Esta plataforma es una aplicación web diseñada para gestionar certificados de cursos y capacitaciones. Proporciona una herramienta centralizada para almacenar, buscar y administrar certificados digitales de diversos tipos de cursos y programas de formación.

La plataforma se compone de las siguientes funcionalidades:

1. **API de Certificados:** Permite la gestión completa de certificados, incluyendo la creación, edición, visualización y eliminación. Proporciona endpoints para buscar certificados por diferentes criterios y generar estadísticas sobre el desempeño de los usuarios.

2. **API de Proyectos:** Facilita la gestión de proyectos, permitiendo la creación, edición, visualización y eliminación de proyectos. Los usuarios pueden adjuntar certificados a proyectos específicos y realizar un seguimiento del progreso del proyecto.

3. **API de Experiencias:** Permite a los usuarios registrar su experiencia laboral, incluyendo el nombre del empleador, el cargo, la duración del empleo y una descripción detallada de las responsabilidades y logros.

4. **API de Respuestas:** Ofrece una funcionalidad para gestionar mensajes de bienvenida personalizados que se muestran en el front-end de la aplicación. Los usuarios pueden crear, editar y eliminar mensajes de bienvenida según sus necesidades.

5. **API de Descarga de PDF:** Proporciona una interfaz para que los usuarios descarguen certificados en formato PDF. Los certificados se generan dinámicamente a partir de los datos almacenados en la plataforma y se entregan al usuario como archivos PDF descargables.

6. **API de Integración de Datos:** Facilita la integración con sistemas externos, permitiendo la importación y exportación de datos de certificados, proyectos y experiencias laborales mediante endpoints RESTful.

## Instalación

1. Clona este repositorio en tu máquina local.
2. Instala las dependencias del proyecto utilizando Composer.
3. Copia el archivo `.env.example` y renómbralo a `.env`.
4. Genera una nueva clave de aplicación.
5. Configura tu base de datos en el archivo `.env` y ejecuta las migraciones.

## Créditos

- Autor: [Juan Camilo Panqueva B.]
- Email: [panqueva763@gmail.com]
