<?php

/**
 * index.php
 *
 * Página principal del proyecto CRUD de artículos. Muestra la tabla de artículos, cada artículo es un ob
 *
 * @package    CRUD Artículos
 * @author     Tu Nombre
 * @version    1.0
 *
 * Tabla alumnos:
 * - id
 * - apellidos, nombre (alumno)
 * - email
 *  - fecha_nacimiento
 * - edad
 *  - curso (nombre)
  * - asignaturas (string obtenido a partir del array de asignaturas)
 */

// Cargar clases
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumno.php';

// Models - no lo necesitamos NO BASE DE DATOS

// 1. Crear un array de objetos de la clase Alumno
$tabla_alumnos = new TablaAlumnos();

// 2. Añadir alumnos al array
$tabla_alumnos->addAlumnos();

// 3. Extraer el array de alumnos para pasárselo a la vista
$alumnos = $tabla_alumnos->talumno;

// 4. Obtener el array de cursos - es  metodo estático, no necesitamos crear un objeto de la clase TablaAlumnos
$cursos = TablaAlumnos::getCursos();

// 5. Obtener el array de asignaturas - es  metodo estático, no necesitamos crear un objeto de la clase TablasAlumnos
$asignaturas = TablaAlumnos::getAsignaturas();

// Views
require_once __DIR__ . '/views/index.view.php';
