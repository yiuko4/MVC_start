<?php
require_once("./models/MainManager.model.php");

class BoutiqueManager extends MainManager
{

    
    /*
    public function supprimerArticle($articleID, $panierID)
    {
        $req = "DELETE FROM `panier_article` 
        WHERE id_panier = :panier 
        AND id_article = :article";

        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":panier", $panierID, PDO::PARAM_INT);
        $stmt->bindValue(":article", $articleID, PDO::PARAM_INT);

        $stmt->execute();
        $datas = ($stmt->rowCount() > 0);
        $stmt->closeCursor();
        return $datas;
    }*/

    #endregion
    /*
    public function livraison()
    {
        $req = "SELECT 
        utilisateur.id as id, utilisateur.prenom as prenom, utilisateur.nom as nom, utilisateur.telephone as telephone,
        colissimo.id as Cid, colissimo.code_postal as Ccode_postal, colissimo.ville as Cville, colissimo.adresse as Cadresse, colissimo.lieu_dit_bp as Clieu_dit, colissimo.batiment_immeuble as Cbatiment_immeuble, colissimo.appartement_etage as Cappartement_etage, colissimo.defaut as Cdefaut,
        mondial_relay.id as MRid, mondial_relay.nom_enseigne as MRnom_enseigne, mondial_relay.code_postal as MRcode_postal, mondial_relay.ville as MRville, mondial_relay.adresse as MRadresse, mondial_relay.defaut as MRdefaut
        FROM `utilisateur`
                LEFT JOIN mondial_relay ON mondial_relay.id = utilisateur.id_mondial_relay  
                LEFT JOIN colissimo ON colissimo.id = utilisateur.id_colissimo
                WHERE utilisateur.id = :id;";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $_SESSION['profil']['id'], PDO::PARAM_INT);

        $stmt->execute();
        $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $datas;
    }*/
}
