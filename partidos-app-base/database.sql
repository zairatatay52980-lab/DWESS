DROP DATABASE IF EXISTS dwes_partidos;

CREATE DATABASE dwes_partidos DEFAULT CHARACTER
SET
    utf8mb4 COLLATE utf8mb4_unicode_ci;

USE dwes_partidos;

CREATE TABLE
    partidos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        equipo_local VARCHAR(200) NOT NULL,
        equipo_visitante VARCHAR(200) NOT NULL,
        liga VARCHAR(100) NOT NULL,
        localizacion VARCHAR(255),
        fecha DATE NOT NULL,
        publico_asistente INT NOT NULL DEFAULT 0,
        estado ENUM ('Planificado', 'Finalizado') NOT NULL DEFAULT 'Planificado'
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

CREATE TABLE
    anotaciones (
        id INT AUTO_INCREMENT PRIMARY KEY,
        partido_id INT NOT NULL,
        jugador VARCHAR(100) NOT NULL,
        puntos INT NOT NULL,
        equipo ENUM ('local', 'visitante') NOT NULL,
        CONSTRAINT fk_anotaciones_partido FOREIGN KEY (partido_id) REFERENCES partidos (id) ON DELETE CASCADE
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

INSERT INTO
    partidos (
        equipo_local,
        equipo_visitante,
        liga,
        localizacion,
        fecha,
        publico_asistente,
        estado
    )
VALUES
    (
        'Baskonia Cadete',
        'Estudiantes Cadete',
        'Cadete',
        'Polideportivo Mendizorrotza, Vitoria-Gasteiz',
        '2026-10-17',
        120,
        'Finalizado'
    ),
    (
        'Gasteiz Basket',
        'Bilbao Juniors',
        'Junior',
        'Pabellón Gasteiz',
        '2026-11-07',
        85,
        'Finalizado'
    ),
    (
        'Donosti Infantil',
        'Iruña Infantil',
        'Infantil',
        'Polideportivo Anoeta',
        '2026-12-05',
        0,
        'Planificado'
    ),
    (
        'Araba Senior',
        'Bizkaia Senior',
        'Senior',
        'Fernando Buesa Arena',
        '2026-12-12',
        0,
        'Planificado'
    );

INSERT INTO
    anotaciones (partido_id, jugador, puntos, equipo)
VALUES
    (1, 'Juan Ruiz', 8, 'local'),
    (1, 'Unai Etxeberria', 12, 'local'),
    (1, 'Mikel Ortiz', 14, 'visitante'),
    (1, 'Jon Aguirre', 10, 'local'),
    (1, 'Carlos Ruiz', 32, 'visitante'),
    (2, 'Aitor Lopez', 24, 'local'),
    (2, 'Aitor Ortiz', 12, 'local'),
    (2, 'Iker Zubiria', 23, 'visitante'),
    (2, 'Ander Martin', 20, 'visitante'),
    (2, 'Peio Garmendia', 11, 'local');
