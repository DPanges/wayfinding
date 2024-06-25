<?php
session_start();

if (!isset($_SESSION['username']))
    header("Location: index.php");

?>
<?php

if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $all = file_get_contents('pintu.json');
    $all = json_decode($all, true);
    $jsonfile = $all["records"];
    $jsonfile = $jsonfile[$id];

    if ($jsonfile) {
        unset($all["records"][$id]);
        $all["records"] = array_values($all["records"]);
        file_put_contents("pintu.json", json_encode($all));
    }
    header("Location: pintu.php");
}