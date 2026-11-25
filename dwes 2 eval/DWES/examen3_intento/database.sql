SET NAMES utf8mb4;

CREATE DATABASE IF NOT EXISTS dwes_eventos CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE dwes_eventos;

DROP TABLE IF EXISTS asistentes;

DROP TABLE IF EXISTS eventos;

CREATE TABLE
    eventos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        titulo VARCHAR(200) NOT NULL,
        categoria VARCHAR(100) NOT NULL,
        descripcion TEXT,
        fecha DATE NOT NULL,
        plazas_totales INT NOT NULL DEFAULT 10,
        estado ENUM ('abierto', 'cerrado') DEFAULT 'abierto'
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

CREATE TABLE
    asistentes (
        id INT AUTO_INCREMENT PRIMARY KEY,
        evento_id INT NOT NULL,
        nombre VARCHAR(100) NOT NULL,
        CONSTRAINT fk_asistentes_evento FOREIGN KEY (evento_id) REFERENCES eventos (id) ON DELETE CASCADE
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

INSERT INTO
    eventos (
        titulo,
        categoria,
        descripcion,
        fecha,
        plazas_totales,
        estado
    )
VALUES
    (
        'Festival de Música GazteSound',
        'Concierto',
        'Festival de música con diferentes artistas y grupos.',
        '2026-11-15',
        100,
        'abierto'
    ),
    (
        'Torneo de Fútbol 7',
        'Deporte',
        'Torneo amateur de fútbol 7 entre equipos de la zona.',
        '2026-11-22',
        50,
        'abierto'
    ),
    (
        'Excursión al Gorbeia',
        'Excursión',
        'Ruta de senderismo para pasar el día en el monte.',
        '2026-12-05',
        25,
        'cerrado'
    ),
    (
        'Noche Gaming',
        'Gaming',
        'Evento gaming con diferentes juegos y actividades.',
        '2026-12-12',
        40,
        'abierto'
    );

INSERT INTO
    asistentes (evento_id, nombre)
VALUES
    (1, 'Ane'),
    (1, 'Mikel'),
    (1, 'Jon'),
    (1, 'Nerea'),
    (2, 'Iker'),
    (2, 'Unai'),
    (2, 'Maialen'),
    (4, 'Aitor'),
    (4, 'Leire');
