<?php
session_start();

// Obtiene el controlador y la acción de los parámetros GET
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'TeamController';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

// Define las variables globales para las vistas
$GLOBALS['controller'] = $controller;
$GLOBALS['action'] = $action;

// Carga el archivo del controlador correspondiente
require_once '../controllers/' . $controller . '.php';

// Verifica que la clase existe
if (class_exists($controller)) {
    // Crea una instancia del controlador y llama a la acción especificada
    $controllerInstance = new $controller;
    $controllerInstance->$action();
} else {
    // Si la clase no existe, muestra un mensaje de error
    die("El controlador especificado no se encuentra.");
}
?>
