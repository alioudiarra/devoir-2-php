<?php
$menu = array(
    "Entrées" => array("Pain", "Légumes", "Toast"),
    "Plats" => array("Agneau", "Kebab", "Pizza"),
    "Desserts" => array("Tiramisu", "Glace")
);

echo "<h1>Menu du jour</h1>";

foreach ($menu as $categorie => $plats) {
    echo "<h2>" . ucfirst($categorie) . "</h2>";
    echo "<ul>";
    foreach ($plats as $plat) {
        echo "<li>" . htmlspecialchars($plat) . "</li>";
    }
    echo "</ul>";
}
?>
