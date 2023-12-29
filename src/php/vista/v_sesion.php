<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chaos Dungeoon</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/a0185357ca.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="fondo_sesion">
            <main id="sesion_jugador">
                <nav>
                    <a href="index.php?controlador=c_menu_inicio&action=cerrar_sesion"><button><i class="fa-solid fa-dungeon fa-2xl" style="color: #ffffff;"></i></button></a>
                    <button><i class="fa-solid fa-trash-can fa-2xl" style="color: #ffffff;"></i></button>
                    <div>
                        <p><?php echo $_SESSION["oro"]; ?></p>
                    </div>
                    <img src="img/moneda.png">
                </nav>
                <main>
                    <img src="img/logo_sin_fondo.png">
                    <article>
                        <img src="img/personaje.png">
                        <p>Nombre: Personaje</p>
                        <p>Vida: 100/100</p>
                    </article>
                    <section>
                        <button>
                            <img src="img/letrero.png">
                            <h3>Jugar</h3>
                        </button>
                        <button>
                            <img src="img/letrero.png">
                            <h3>Personajes</h3>
                        </button>
                        <button>
                            <img src="img/letrero.png">
                            <h3>Crear personaje</h3>
                        </button>
                        <button>
                            <img src="img/letrero.png">
                            <h3>Información</h3>
                        </button>
                    </section>
                </main>
            </main>
        </div>
    </body>
</html>