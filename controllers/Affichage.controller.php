<?php
require_once("./controllers/MainController.controller.php");
require_once("./models/Affichage.model.php");

class AffichageController extends MainController
{
    private $affichageManager;

    public function __construct()
    {
        $this->affichageManager = new AffichageManager();
    }

    public function affichage()
    {
        $data_page = [
            "page_description" => "Page de affichage",
            "page_title" => "Page de affichage",
            "page_javascript" => ['affichage.js'],
            "view" => "views/affichage.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }

    public function menu()
    {
        $data_page = [
            "page_description" => "Page des menus",
            "page_title" => "Page des menus",
            "view" => "views/menu.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }


    public function pageErreur($msg)
    {
        parent::pageErreur($msg);
    }
}
