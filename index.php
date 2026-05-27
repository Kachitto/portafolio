<?php
$nombre = "Harold Steven Rodriguez Mendoza";
$ubicacion = "Ibagué, Tolima";
$edad = 19;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombre; ?> | Portafolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bg-glow-1"></div>
    <div class="bg-glow-2"></div>

    <main class="container">
        
        <section class="glass hero">
            <div class="profile-grid">
                <div class="photo-side">
                    <img src="img/perfil.jpg" alt="<?php echo $nombre; ?>" class="profile-img">
                </div>
                <div class="text-side">
                    <span class="badge">Backend Developer Técnico</span>
                    <h1 style="margin: 15px 0 15px 0;"><?php echo $nombre; ?></h1>
                    
                    <div class="timeline">
                        <div class="timeline-item">
                            <strong>Servicio Nacional de Aprendizaje (SENA)</strong>
                            <p>Técnico en Desarrollo de Software (Enfoque Backend)</p>
                        </div>
                        <div class="timeline-item">
                            <strong>I.E. Francisco de Paula Santander</strong>
                            <p>Estudiante de 11° Grado</p>
                        </div>
                    </div>
                    <p class="personal-info">📍 <?php echo $ubicacion; ?> | 🎂 <?php echo $edad; ?> años</p>
                </div>
            </div>
        </section>

        <h2 class="section-title">Stack Tecnológico</h2>
        <section class="skills-grid">
            <div class="glass skill-card" onclick="toggleSkill('php')">
                <h3>PHP</h3>
                <p id="php-info" class="hidden-skill">Manejo de lógica de servidor, estructuración y conexiones seguras a bases de datos relacionales. Tambien logica orientada a objestos</p>
            </div>
            <div class="glass skill-card" onclick="toggleSkill('js')">
                <h3>JavaScript</h3>
                <p id="js-info" class="hidden-skill">Manipulación del DOM y control de eventos dinámicos en el cliente.</p>
            </div>
            <div class="glass skill-card" onclick="toggleSkill('py')">
                <h3>Python</h3>
                <p id="py-info" class="hidden-skill">Creación de scripts de automatización y desarrollo de lógica pura orientada a objetos.</p>
            </div>
            <div class="glass skill-card" onclick="toggleSkill('css')">
                <h3>CSS / HTML</h3>
                <p id="css-info" class="hidden-skill">Estructuración semántica moderna y diseño adaptativo con layouts avanzados (Grid/Flexbox) y Glassmorphism.</p>
            </div>
        </section>

        <?php include 'components/proyectos.php'; ?>

        <section class="glass terminal">
            <div class="terminal-header">
                <span class="dot red"></span>
                <span class="dot yellow"></span>
                <span class="dot green"></span>
                <span class="terminal-title">sistema_influencia.sh</span>
            </div>
            <div class="terminal-body">
                <p class="command">> dev --boot-story</p>
                <p class="response">Todo comenzó observando la magia de la scene casera: desde emuladores de consolas hasta la instalación de Free McBoot en una PS2 con el lector dañado. De la curiosidad por el hardware nació la pasión por entender el software por dentro.</p>
                
                <p class="command">> dev --hobbies</p>
                <p class="response">Entusiasta del Retro-Gaming (Sonic Adventure 1 & 2, Ape Escape). Mi meta técnica actual: dominar por completo el arte del ensamble de computadores de alto rendimiento.</p>
            </div>
        </section>

        <section class="glass whatsapp-section">
            <div class="whatsapp-content">
                <div class="wa-icon"></div>
                <div>
                    <h3>¿Quieres ponerte en contacto conmigo?</h3>
                    <p>Hablemos directamente por WhatsApp para coordinar proyectos, resolver dudas o agendar entrevistas de trabajo.</p>
                </div>
            </div>
            <a href="https://wa.me/573045753071" target="_blank" class="btn-whatsapp">
                Contactar por WhatsApp
            </a>
        </section>

    </main>

    <script src="js/main.js"></script>
</body>
</html>