<?php

class Session
{
    /**
     * Fonction qui vérifie que l'identification saisie est correcte.
     */
    function utilisateur_existe($identifiant, $mot_de_passe)
    {
        // Connexion et sélection de la base de données :
        try {
            $conn = new PDO("mysql:host=localhost;dbname=myDB", "root", "");
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die;
        }
        $sql = 'SELECT 1 FROM utilisateurs ';
        $sql .= 'WHERE identifiant = :login AND mot_de_passe = :mdp';

        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":login", $identifiant);
        $stmt->bindParam(":mdp", $mot_de_passe);

        // Exécution
        $stmt->execute();

        // L'identification est bonne si la requête a retourné
        // une ligne (l'utilisateur existe et le mot de passe
        // est bon).
        // Si c'est le cas $existe contient 1, sinon elle est
        // vide. Il suffit de la retourner en tant que booléen.
        if ($stmt->rowCount() > 0) {
            // ok, il existe
            $existe = true;
        } else {
            $existe = false;
        }
        return (bool) $existe;
    }

}
