<?php
$names = ["Isaac", "Magdalene", "Cain", "Judas", "Blue", "Eve", "Samson", "Azazel", "Lazarus", "Eden", "Lost", "Lilith", "Keeper", "Apollyon", "Forgotten", "Bethany", "Jacob", "Esau"];
$q = isset($_GET['q']) ? $_GET['q'] : '';

$predict = "";
if ($q !== "") {
    $q = strtolower($q);
    foreach ($names as $name) {
        if (stristr(strtolower($name), $q)) {
            if ($predict === "") {
                $predict = $name;
            } else {
                $predict .= ", $name";
            }
        }
    }
}
echo $predict === "" ? "no hay coincidencias" : $predict;
?>