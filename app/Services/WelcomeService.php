<?php

namespace App\Services;

class WelcomeService
{
    /**
     * Obtiene la información de bienvenida para el front-end de la aplicación.
     *
     * @return array
     */
    public function getWelcomeInfo()
    {
        return [
            "header" => [
                "presentation" => "Juan Camilo Panqueva - Software Developer",
                "description" => "¡Hola! Soy Juan Camilo, un apasionado desarrollador de software con 4 años de experiencia en la creación de aplicaciones web y móviles. Me especializo en el desarrollo tanto del lado del cliente como del servidor, utilizando tecnologías modernas para ofrecer soluciones eficientes y escalables."
            ],
            "sidebar" => [
                "skills" => [
                    "backend" => ["PHP", "Laravel", "Node.js", "Java", "Spring Boot"],
                    "frontend" => ["HTML", "CSS", "JavaScript", "Angular", "Vue.js", "React"],
                    "databases" => ["MySQL", "MongoDB"],
                    "architecture" => ["RESTful APIs", "Microservicios", "Diseño de software"],
                    "databases" => ["MySQL", "MongoDB", "PostgreSQL"],
                    "cloudplatforms" => ["Azure", "Google Cloud", "AWS Cloud"],
                    "containerization" => ["Docker", "Kubernetes", "Lando"],
                    "developmenttools" => ["Postman"]
                ]
            ],
            "main_content" => [
                "buttons" => [
                    "titles" => "/api/titles",
                    "certificates" => "/api/certificates",
                    "projects" => "/api/projects",
                    "experiences" => "/api/experiences"
                ]
            ],
            "footer" => [
                "social_media" => [
                    "linkedin" => "https://www.linkedin.com/in/juan-camilo-panqueva/",
                    "github" => "https://gitlab.com/panqueva764",
                    "twitter" => "https://twitter.com/juancamilopanq"
                ],
                "contact" => [
                    "email" => "Panqueva763@gmail.com",
                    "phone" => "+57 3213767861"
                ]
            ]
        ];
    }
}
