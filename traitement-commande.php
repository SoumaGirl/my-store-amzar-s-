<?php

include 'config.php';
// Vérifie si les données du formulaire ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si les clés existent dans le tableau $_POST
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['productName'])) {
        // Récupère les données du formulaire
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $productName = $_POST['productName'];


        // Vérifie si l'utilisateur existe dans la table Utilisateurs
        $sql = "SELECT id FROM Utilisateurs WHERE nom='$nom' AND prenom='$prenom' AND email='$email'";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // L'utilisateur existe, obtenir son ID
            $row = $result->fetch_assoc();
            $client_id = $row['id'];
        } else {
            // L'utilisateur n'existe pas, insérer un nouvel utilisateur
            $sql = "INSERT INTO Utilisateurs (nom, prenom, email) VALUES ('$nom', '$prenom', '$email')";
            if ($mysqli->query($sql) === TRUE) {
                $client_id = $mysqli->insert_id;
            } else {
                echo "Erreur lors de l'insertion de l'utilisateur: " . $mysqli->error;
                exit(); // Arrêter l'exécution en cas d'erreur
            }
        }

        // Récupérer l'ID du produit à partir du nom du produit
        $sql = "SELECT id, prix_unitaire FROM Produit WHERE nom='$productName'";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $produit_id = $row['id'];
            $prix_unitaire = $row['prix_unitaire'];

            // Insérer la commande dans la table Commandes
            $sql = "INSERT INTO Commandes (client_id, produit_id, prix_unitaire) VALUES ('$client_id', '$produit_id', '$prix_unitaire')";
            if ($mysqli->query($sql) === TRUE) {
                // Rediriger l'utilisateur vers la page de recommandations avec un message de succès
                header("Location: recommandations.php?recommandation=success");
                exit();
            } else {
                echo "Erreur lors de l'insertion de la commande: " . $mysqli->error;
            }
        } else {
            echo "Aucun produit trouvé avec ce nom.";
        }

        // Ferme la connexion
        $mysqli->close();
    } else {
        echo "Les données du formulaire sont incomplètes.";
    }
} else {
    echo "Le formulaire n'a pas été soumis.";
}
// Rediriger l'utilisateur vers la page de recommandations avec un message de succès
header("Location: recommandations.php?recommandation=success");
exit();

?>
