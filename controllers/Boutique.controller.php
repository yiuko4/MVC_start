<?php
require_once("./controllers/MainController.controller.php");
require_once("./models/Boutique.model.php");

class BoutiqueController extends MainController
{
    private $boutiqueManager;

    public function __construct()
    {
        $this->boutiqueManager = new BoutiqueManager();
    }

    public function afficheBoutique()
    {
        //$article = $this->boutiqueManager->getAllAticles();
        $data_page = [
            "page_description" => "Page de boutique",
            "page_title" => "Page de boutique",
            //"article" => $article,
            "view" => "views/boutique.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }


    public function pageErreur($msg)
    {
        parent::pageErreur($msg);
    }
}
