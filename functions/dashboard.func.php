<?php
    // Affichage projet
    function getProjets() {
        global $db;
        $req = $db->query("SELECT * FROM projets ORDER BY date_creation DESC");
        $results = [];
        while ($rows = $req->fetchObject()) {
            $results[] = $rows;
        }
        
        return $results; // Retourne le tableau
    }
    $projets = getProjets();

?>