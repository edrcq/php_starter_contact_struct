<?php

require_once __DIR__ . '/../../php/init.php';

if (!isset($_POST['fullname'], $_POST['phone'], $_POST['email'], $_POST['text'])) {
    save_error("Tous les champs ne sont pas remplis");
}

if (empty($_POST['fullname'])) {
    save_error("Entrez votre nom");
}
if (empty($_POST['phone'])) {
    save_error("Entrez votre telephone");
}
if (empty($_POST['email'])) {
    save_error("Entrez votre adresse email");
}

if (strlen($_POST['text']) < 10) {
    save_error("Votre message est trop petit.");
}

if (filter_var($_POST['email'], FILTER_VALIDATE_EMAL) === false) {
    save_error("Votre email est incorrect");
}

$fullname = htmlspecialchars($_POST['fullname']);
$phone = htmlspecialchars($_POST['phone']);
$text = htmlspecialchars($_POST['text']);

$query = $db->prepare('INSERT INTO contacts(fullname, email, phone, text) VALUES(:fullname, :email, :phone, :text)');
$query->execute([
    ':fullname' => $fullname,
    ':email' => $_POST['email'],
    ':phone' => $phone,
    ':text' => $text
]);

header('Location: ' . $_SERVER['HTTP_REFERER'] . '&success=1');