<?php

$errors = array();
$old = array();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // comprovacio del format dels camps o si son buits

    // correu electronic
    if (empty($_POST["email"])) {
        $errors["email"] = "Has d'introduir un email";
    } else {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "El email introduit no es correcte. El format ha de ser usuari@domini.com";
        }
    }
    $old["email"] = $_POST["email"];

    // nom
    if (empty($_POST["name"])) {
        $errors["name"] = "Has d'introduir un nom";
    }
    $old["name"] = $_POST["name"];

    // lloc web
    if (empty($_POST["web"])) {
        $errors["web"] = "Has d'introduir un lloc web";
    } else {
        // copiat de https://stackoverflow.com/questions/6427530/regular-expression-pattern-to-match-url-with-or-without-http-www
        $regex = "((https?|ftp)://)?"; // SCHEME
        $regex .= "([a-z0-9+!*(),;?&=\$_.-]+(:[a-z0-9+!*(),;?&=\$_.-]+)?@)?"; // User and Pass
        $regex .= "([a-z0-9\-\.]*)\.(([a-z]{2,4})|([0-9]{1,3}\.([0-9]{1,3})\.([0-9]{1,3})))"; // Host or IP address
        $regex .= "(:[0-9]{2,5})?"; // Port
        $regex .= "(/([a-z0-9+\$_%-]\.?)+)*/?"; // Path
        $regex .= "(\?[a-z+&\$_.-][a-z0-9;:@&%=+/\$_.-]*)?"; // GET Query
        $regex .= "(#[a-z_.-][a-z0-9+$%_.-]*)?"; // Anchor

        if (!preg_match("~^$regex$~i", $_POST["web"])) {
            $errors["web"] = "El lloc web introduit no te un format correcte. Hauria de ser: https://google.com o google.com";
        }
    }
    $old["web"] = $_POST["web"];

    // comentari
    if (empty($_POST["comment"])) {
        $errors["comment"] = "Has d'introduir un comentari";
    }
    $old["comment"] = $_POST["comment"];

    // genere
    if (empty($_POST["gender"])) {
        $errors["gender"] = "Has de seleccionar un genere";
    } else {
        $old["gender"] = $_POST["gender"];
    }

    // si no hi ha errors vol dir que tots els camps son correctes, mostrem el resum
    if (empty($errors)) {
        include_once("resum.php");
        die();
    }
};

// mostrem el formulari
include_once("formulari.php");
