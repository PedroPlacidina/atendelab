<?php

require_once __DIR__ . '/app/Controllers/UsuarioController.php';

// Define o controller responsável pelos endpoints de usuários.
// Exemplo: ?controller=usuarios&action=listar
$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

// Este roteador é simples: só reconhece o controller "usuarios".
if ($controller === "usuarios") {
    $usuariosController = new UsuarioController();

    switch ($action) {
        case 'listar':
            $usuariosController->listar();
            break;

        case 'buscar':
            $usuariosController->buscarPorId();
    }
}