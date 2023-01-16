<?php
session_start();

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://" . $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"]));

require_once("./controllers/Toolbox.class.php");
require_once("./controllers/Securite.class.php");
require_once("./controllers/Affichage.controller.php");
$affichageController = new AffichageController();

try {
    if (empty($_GET['page'])) {
        $page = "accueil";
    } else {
        $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
        $page = $url[0];
    }

    switch ($page) {


        case "affichage":
            $affichageController->Affichage();
            break;
        case "menu":
            $affichageController->Menu();
            break;
        default:

            throw new Exception("La page n'existe pas");
    }
} catch (Exception $e) {
    $affichageController->pageErreur($e->getMessage());
}
