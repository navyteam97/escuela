-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para escuela
CREATE DATABASE IF NOT EXISTS `escuela` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci */;
USE `escuela`;

-- Volcando estructura para tabla escuela.alumnos
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` bigint(20) unsigned NOT NULL,
  `condicion_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `alumnos_user_id_foreign` (`user_id`),
  KEY `alumnos_condicion_id_foreign` (`condicion_id`),
  CONSTRAINT `alumnos_condicion_id_foreign` FOREIGN KEY (`condicion_id`) REFERENCES `condiciones` (`id`),
  CONSTRAINT `alumnos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=451 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.barrios
CREATE TABLE IF NOT EXISTS `barrios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `barrios_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.cajas_curriculares
CREATE TABLE IF NOT EXISTS `cajas_curriculares` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `carrera_id` bigint(20) unsigned NOT NULL,
  `curso_id` bigint(20) unsigned NOT NULL,
  `materia_id` bigint(20) unsigned NOT NULL,
  `coorte_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cajas_curriculares_carrera_id_foreign` (`carrera_id`),
  KEY `cajas_curriculares_curso_id_foreign` (`curso_id`),
  KEY `cajas_curriculares_materia_id_foreign` (`materia_id`),
  KEY `cajas_curriculares_coorte_id_foreign` (`coorte_id`),
  CONSTRAINT `cajas_curriculares_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`),
  CONSTRAINT `cajas_curriculares_coorte_id_foreign` FOREIGN KEY (`coorte_id`) REFERENCES `coortes` (`id`),
  CONSTRAINT `cajas_curriculares_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`),
  CONSTRAINT `cajas_curriculares_materia_id_foreign` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.cajas_curriculares_profesores
CREATE TABLE IF NOT EXISTS `cajas_curriculares_profesores` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `profesor_id` bigint(20) unsigned NOT NULL,
  `cajaCurricular_id` bigint(20) unsigned NOT NULL,
  `condicion_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cajas_curriculares_profesores_profesor_id_foreign` (`profesor_id`),
  KEY `cajas_curriculares_profesores_cajacurricular_id_foreign` (`cajaCurricular_id`),
  KEY `cajas_curriculares_profesores_condicion_id_foreign` (`condicion_id`),
  CONSTRAINT `cajas_curriculares_profesores_cajacurricular_id_foreign` FOREIGN KEY (`cajaCurricular_id`) REFERENCES `cajas_curriculares` (`id`),
  CONSTRAINT `cajas_curriculares_profesores_condicion_id_foreign` FOREIGN KEY (`condicion_id`) REFERENCES `condiciones` (`id`),
  CONSTRAINT `cajas_curriculares_profesores_profesor_id_foreign` FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.calificaciones
CREATE TABLE IF NOT EXISTS `calificaciones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `calificaciones_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.calles
CREATE TABLE IF NOT EXISTS `calles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `calles_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.carreras
CREATE TABLE IF NOT EXISTS `carreras` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `carreras_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.carreras_inscripciones
CREATE TABLE IF NOT EXISTS `carreras_inscripciones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `carrera_id` bigint(20) unsigned NOT NULL,
  `inscripcion_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carreras_inscripciones_carrera_id_foreign` (`carrera_id`),
  KEY `carreras_inscripciones_inscripcion_id_foreign` (`inscripcion_id`),
  CONSTRAINT `carreras_inscripciones_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`),
  CONSTRAINT `carreras_inscripciones_inscripcion_id_foreign` FOREIGN KEY (`inscripcion_id`) REFERENCES `inscripciones` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.carreras_instituciones
CREATE TABLE IF NOT EXISTS `carreras_instituciones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `carrera_id` bigint(20) unsigned NOT NULL,
  `institucion_id` bigint(20) unsigned NOT NULL,
  `directivo_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carreras_instituciones_carrera_id_foreign` (`carrera_id`),
  KEY `carreras_instituciones_institucion_id_foreign` (`institucion_id`),
  KEY `carreras_instituciones_directivo_id_foreign` (`directivo_id`),
  CONSTRAINT `carreras_instituciones_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`),
  CONSTRAINT `carreras_instituciones_directivo_id_foreign` FOREIGN KEY (`directivo_id`) REFERENCES `directivos` (`id`),
  CONSTRAINT `carreras_instituciones_institucion_id_foreign` FOREIGN KEY (`institucion_id`) REFERENCES `instituciones` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.componentes_de_formularios
CREATE TABLE IF NOT EXISTS `componentes_de_formularios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `componentes_de_formularios_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.condiciones
CREATE TABLE IF NOT EXISTS `condiciones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `condiciones_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.contactos
CREATE TABLE IF NOT EXISTS `contactos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `telefono` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `direccion_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contactos_telefono_unique` (`telefono`),
  KEY `contactos_direccion_id_foreign` (`direccion_id`),
  CONSTRAINT `contactos_direccion_id_foreign` FOREIGN KEY (`direccion_id`) REFERENCES `direcciones` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.coortes
CREATE TABLE IF NOT EXISTS `coortes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `coortes_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.correlativas
CREATE TABLE IF NOT EXISTS `correlativas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `tipoDeCorrelativa_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `correlativas_tipodecorrelativa_id_foreign` (`tipoDeCorrelativa_id`),
  CONSTRAINT `correlativas_tipodecorrelativa_id_foreign` FOREIGN KEY (`tipoDeCorrelativa_id`) REFERENCES `tipos_de_correlativas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.cuadras
CREATE TABLE IF NOT EXISTS `cuadras` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cuadras_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.cursos
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `division_id` bigint(20) unsigned DEFAULT NULL,
  `tipoDeCurso_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cursos_division_id_foreign` (`division_id`),
  KEY `cursos_tipodecurso_id_foreign` (`tipoDeCurso_id`),
  CONSTRAINT `cursos_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisiones` (`id`),
  CONSTRAINT `cursos_tipodecurso_id_foreign` FOREIGN KEY (`tipoDeCurso_id`) REFERENCES `tipos_de_cursos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.departamentos
CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `provincia_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `departamentos_descripcion_unique` (`descripcion`),
  KEY `departamentos_provincia_id_foreign` (`provincia_id`),
  CONSTRAINT `departamentos_provincia_id_foreign` FOREIGN KEY (`provincia_id`) REFERENCES `provincias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.direcciones
CREATE TABLE IF NOT EXISTS `direcciones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `chacra` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `sector` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `altura` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `casa` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `departamento` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `piso` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `barrio_id` bigint(20) unsigned DEFAULT NULL,
  `cuadra_id` bigint(20) unsigned DEFAULT NULL,
  `calle_id` bigint(20) unsigned DEFAULT NULL,
  `municipio_id` bigint(20) unsigned DEFAULT NULL,
  `tipoDeDireccion_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `direcciones_barrio_id_foreign` (`barrio_id`),
  KEY `direcciones_cuadra_id_foreign` (`cuadra_id`),
  KEY `direcciones_calle_id_foreign` (`calle_id`),
  KEY `direcciones_municipio_id_foreign` (`municipio_id`),
  KEY `direcciones_tipodedireccion_id_foreign` (`tipoDeDireccion_id`),
  CONSTRAINT `direcciones_barrio_id_foreign` FOREIGN KEY (`barrio_id`) REFERENCES `barrios` (`id`),
  CONSTRAINT `direcciones_calle_id_foreign` FOREIGN KEY (`calle_id`) REFERENCES `calles` (`id`),
  CONSTRAINT `direcciones_cuadra_id_foreign` FOREIGN KEY (`cuadra_id`) REFERENCES `cuadras` (`id`),
  CONSTRAINT `direcciones_municipio_id_foreign` FOREIGN KEY (`municipio_id`) REFERENCES `municipios` (`id`),
  CONSTRAINT `direcciones_tipodedireccion_id_foreign` FOREIGN KEY (`tipoDeDireccion_id`) REFERENCES `tipos_de_direcciones` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.directivos
CREATE TABLE IF NOT EXISTS `directivos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `directivos_user_id_foreign` (`user_id`),
  CONSTRAINT `directivos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.divisiones
CREATE TABLE IF NOT EXISTS `divisiones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `divisiones_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.documentos
CREATE TABLE IF NOT EXISTS `documentos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `tipoDeDocumento_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `documentos_descripcion_unique` (`descripcion`),
  KEY `documentos_tipodedocumento_id_foreign` (`tipoDeDocumento_id`),
  CONSTRAINT `documentos_tipodedocumento_id_foreign` FOREIGN KEY (`tipoDeDocumento_id`) REFERENCES `tipos_de_documentos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.entradas
CREATE TABLE IF NOT EXISTS `entradas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `entradas_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.fichas
CREATE TABLE IF NOT EXISTS `fichas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fichas_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.formularios
CREATE TABLE IF NOT EXISTS `formularios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `respuestaBinaria` tinyint(1) DEFAULT NULL,
  `respuestaTextual` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `respuestaNumerica` bigint(20) DEFAULT NULL,
  `respuestaDecimal` decimal(8,2) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `componenteDeFormulario_id` bigint(20) unsigned NOT NULL,
  `entrada_id` bigint(20) unsigned NOT NULL,
  `alumno_id` bigint(20) unsigned NOT NULL,
  `ficha_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `formularios_componentedeformulario_id_foreign` (`componenteDeFormulario_id`),
  KEY `formularios_entrada_id_foreign` (`entrada_id`),
  KEY `formularios_alumno_id_foreign` (`alumno_id`),
  KEY `formularios_ficha_id_foreign` (`ficha_id`),
  CONSTRAINT `formularios_alumno_id_foreign` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`),
  CONSTRAINT `formularios_componentedeformulario_id_foreign` FOREIGN KEY (`componenteDeFormulario_id`) REFERENCES `componentes_de_formularios` (`id`),
  CONSTRAINT `formularios_entrada_id_foreign` FOREIGN KEY (`entrada_id`) REFERENCES `entradas` (`id`),
  CONSTRAINT `formularios_ficha_id_foreign` FOREIGN KEY (`ficha_id`) REFERENCES `fichas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.generos
CREATE TABLE IF NOT EXISTS `generos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `generos_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.horarios
CREATE TABLE IF NOT EXISTS `horarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ingreso` time NOT NULL,
  `egreso` time NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `turno_id` bigint(20) unsigned DEFAULT NULL,
  `cajaCurricular_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `horarios_turno_id_foreign` (`turno_id`),
  KEY `horarios_cajacurricular_id_foreign` (`cajaCurricular_id`),
  CONSTRAINT `horarios_cajacurricular_id_foreign` FOREIGN KEY (`cajaCurricular_id`) REFERENCES `cajas_curriculares` (`id`),
  CONSTRAINT `horarios_turno_id_foreign` FOREIGN KEY (`turno_id`) REFERENCES `turnos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.imagenes
CREATE TABLE IF NOT EXISTS `imagenes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `persona_id` bigint(20) unsigned DEFAULT NULL,
  `carrera_id` bigint(20) unsigned DEFAULT NULL,
  `cajaCurricular_id` bigint(20) unsigned DEFAULT NULL,
  `tipoDeImagen_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `imagenes_descripcion_unique` (`descripcion`),
  KEY `imagenes_persona_id_foreign` (`persona_id`),
  KEY `imagenes_carrera_id_foreign` (`carrera_id`),
  KEY `imagenes_cajacurricular_id_foreign` (`cajaCurricular_id`),
  KEY `imagenes_tipodeimagen_id_foreign` (`tipoDeImagen_id`),
  CONSTRAINT `imagenes_cajacurricular_id_foreign` FOREIGN KEY (`cajaCurricular_id`) REFERENCES `cajas_curriculares` (`id`),
  CONSTRAINT `imagenes_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`),
  CONSTRAINT `imagenes_persona_id_foreign` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`),
  CONSTRAINT `imagenes_tipodeimagen_id_foreign` FOREIGN KEY (`tipoDeImagen_id`) REFERENCES `tipos_de_imagenes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.inscripciones
CREATE TABLE IF NOT EXISTS `inscripciones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `cajaCurricular_id` bigint(20) unsigned DEFAULT NULL,
  `tipoDeInscripcion_id` bigint(20) unsigned NOT NULL,
  `alumno_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inscripciones_cajacurricular_id_foreign` (`cajaCurricular_id`),
  KEY `inscripciones_tipodeinscripcion_id_foreign` (`tipoDeInscripcion_id`),
  KEY `inscripciones_alumno_id_foreign` (`alumno_id`),
  CONSTRAINT `inscripciones_alumno_id_foreign` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`),
  CONSTRAINT `inscripciones_cajacurricular_id_foreign` FOREIGN KEY (`cajaCurricular_id`) REFERENCES `cajas_curriculares` (`id`),
  CONSTRAINT `inscripciones_tipodeinscripcion_id_foreign` FOREIGN KEY (`tipoDeInscripcion_id`) REFERENCES `tipos_de_inscripciones` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.instituciones
CREATE TABLE IF NOT EXISTS `instituciones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `contacto_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `instituciones_descripcion_unique` (`descripcion`),
  KEY `instituciones_contacto_id_foreign` (`contacto_id`),
  CONSTRAINT `instituciones_contacto_id_foreign` FOREIGN KEY (`contacto_id`) REFERENCES `contactos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.libros_matrices
CREATE TABLE IF NOT EXISTS `libros_matrices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `numeroDeArchivo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cicloLectivo` year(4) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `alumno_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `libros_matrices_numerodearchivo_unique` (`numeroDeArchivo`),
  KEY `libros_matrices_alumno_id_foreign` (`alumno_id`),
  CONSTRAINT `libros_matrices_alumno_id_foreign` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.materias
CREATE TABLE IF NOT EXISTS `materias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `materias_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.materias_inscripciones
CREATE TABLE IF NOT EXISTS `materias_inscripciones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `materia_id` bigint(20) unsigned NOT NULL,
  `inscripcion_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `materias_inscripciones_materia_id_foreign` (`materia_id`),
  KEY `materias_inscripciones_inscripcion_id_foreign` (`inscripcion_id`),
  CONSTRAINT `materias_inscripciones_inscripcion_id_foreign` FOREIGN KEY (`inscripcion_id`) REFERENCES `inscripciones` (`id`),
  CONSTRAINT `materias_inscripciones_materia_id_foreign` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.materias_notas
CREATE TABLE IF NOT EXISTS `materias_notas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `alumno_id` bigint(20) unsigned NOT NULL,
  `materia_id` bigint(20) unsigned NOT NULL,
  `nota_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `materias_notas_alumno_id_foreign` (`alumno_id`),
  KEY `materias_notas_materia_id_foreign` (`materia_id`),
  KEY `materias_notas_nota_id_foreign` (`nota_id`),
  CONSTRAINT `materias_notas_alumno_id_foreign` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`),
  CONSTRAINT `materias_notas_materia_id_foreign` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`),
  CONSTRAINT `materias_notas_nota_id_foreign` FOREIGN KEY (`nota_id`) REFERENCES `notas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.municipios
CREATE TABLE IF NOT EXISTS `municipios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `departamento_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `municipios_descripcion_unique` (`descripcion`),
  KEY `municipios_departamento_id_foreign` (`departamento_id`),
  CONSTRAINT `municipios_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.notas
CREATE TABLE IF NOT EXISTS `notas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `numerica` decimal(8,2) NOT NULL,
  `calificacion_id` bigint(20) unsigned DEFAULT NULL,
  `tipoDeNota_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notas_calificacion_id_foreign` (`calificacion_id`),
  KEY `notas_tipodenota_id_foreign` (`tipoDeNota_id`),
  CONSTRAINT `notas_calificacion_id_foreign` FOREIGN KEY (`calificacion_id`) REFERENCES `calificaciones` (`id`),
  CONSTRAINT `notas_tipodenota_id_foreign` FOREIGN KEY (`tipoDeNota_id`) REFERENCES `tipos_de_notas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.paises
CREATE TABLE IF NOT EXISTS `paises` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `paises_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.personas
CREATE TABLE IF NOT EXISTS `personas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nacimiento` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `genero_id` bigint(20) unsigned NOT NULL,
  `contacto_id` bigint(20) unsigned NOT NULL,
  `documento_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `personas_user_id_foreign` (`user_id`),
  KEY `personas_genero_id_foreign` (`genero_id`),
  KEY `personas_contacto_id_foreign` (`contacto_id`),
  KEY `personas_documento_id_foreign` (`documento_id`),
  CONSTRAINT `personas_contacto_id_foreign` FOREIGN KEY (`contacto_id`) REFERENCES `contactos` (`id`),
  CONSTRAINT `personas_documento_id_foreign` FOREIGN KEY (`documento_id`) REFERENCES `documentos` (`id`),
  CONSTRAINT `personas_genero_id_foreign` FOREIGN KEY (`genero_id`) REFERENCES `generos` (`id`),
  CONSTRAINT `personas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.preceptores
CREATE TABLE IF NOT EXISTS `preceptores` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `preceptores_user_id_foreign` (`user_id`),
  CONSTRAINT `preceptores_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.preceptores_cursos
CREATE TABLE IF NOT EXISTS `preceptores_cursos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `preceptor_id` bigint(20) unsigned NOT NULL,
  `curso_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `preceptores_cursos_preceptor_id_foreign` (`preceptor_id`),
  KEY `preceptores_cursos_curso_id_foreign` (`curso_id`),
  CONSTRAINT `preceptores_cursos_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`),
  CONSTRAINT `preceptores_cursos_preceptor_id_foreign` FOREIGN KEY (`preceptor_id`) REFERENCES `preceptores` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.profesores
CREATE TABLE IF NOT EXISTS `profesores` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profesores_user_id_foreign` (`user_id`),
  CONSTRAINT `profesores_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.provincias
CREATE TABLE IF NOT EXISTS `provincias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `pais_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `provincias_descripcion_unique` (`descripcion`),
  KEY `provincias_pais_id_foreign` (`pais_id`),
  CONSTRAINT `provincias_pais_id_foreign` FOREIGN KEY (`pais_id`) REFERENCES `paises` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.responsables
CREATE TABLE IF NOT EXISTS `responsables` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `persona_id` bigint(20) unsigned NOT NULL,
  `componenteDeFormulario_id` bigint(20) unsigned NOT NULL,
  `tipoDeResponsable_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `responsables_persona_id_foreign` (`persona_id`),
  KEY `responsables_componentedeformulario_id_foreign` (`componenteDeFormulario_id`),
  KEY `responsables_tipoderesponsable_id_foreign` (`tipoDeResponsable_id`),
  CONSTRAINT `responsables_componentedeformulario_id_foreign` FOREIGN KEY (`componenteDeFormulario_id`) REFERENCES `componentes_de_formularios` (`id`),
  CONSTRAINT `responsables_persona_id_foreign` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`),
  CONSTRAINT `responsables_tipoderesponsable_id_foreign` FOREIGN KEY (`tipoDeResponsable_id`) REFERENCES `tipos_de_responsables` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.tipos_de_correlativas
CREATE TABLE IF NOT EXISTS `tipos_de_correlativas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tipos_de_correlativas_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.tipos_de_cursos
CREATE TABLE IF NOT EXISTS `tipos_de_cursos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tipos_de_cursos_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.tipos_de_direcciones
CREATE TABLE IF NOT EXISTS `tipos_de_direcciones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tipos_de_direcciones_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.tipos_de_documentos
CREATE TABLE IF NOT EXISTS `tipos_de_documentos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tipos_de_documentos_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.tipos_de_imagenes
CREATE TABLE IF NOT EXISTS `tipos_de_imagenes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tipos_de_imagenes_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.tipos_de_inscripciones
CREATE TABLE IF NOT EXISTS `tipos_de_inscripciones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tipos_de_inscripciones_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.tipos_de_notas
CREATE TABLE IF NOT EXISTS `tipos_de_notas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tipos_de_notas_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.tipos_de_responsables
CREATE TABLE IF NOT EXISTS `tipos_de_responsables` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tipos_de_responsables_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.turnos
CREATE TABLE IF NOT EXISTS `turnos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `turnos_descripcion_unique` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla escuela.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
