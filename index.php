<?php 
include_once "./controller/configu.php";
// require_once "./models/User.php";

require_once 'controller/configu.php';

try {
    Connection::init('localhost', 'root', '', 'GESTION_DES_TACHES');
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
}

// Daba, Connection::getConnection() ghadi ykhdm f chi fichier.
