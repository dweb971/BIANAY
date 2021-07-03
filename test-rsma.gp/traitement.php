<?php
ini_set('display_errors', 1);

// autoloader
spl_autoload_register(function ($name) {
    echo "Tentative de chargement de $name.\n";
    throw new Exception("Impossible de charger $name.");
});

try {
    // instanciation des classes
    include("script/Connect.php");
    include("script/InscriptionPersonne.php");

    // creation obj PDO
    $db = new Connect();

    # classe Patient
    $inscription = new InscriptionPersonne($db);

} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
$inscription->inscription($_POST);

?>