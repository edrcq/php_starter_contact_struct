<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

require_once __DIR__ . '/db.php';

// CONFIG
$router_pages = ['home', 'contact', 'admin_contacts'];

// inclure les utilitaires
require_once __DIR__ . '/utils/errors.php';

// inclure tous les fichiers du dossier sql

// inclure toutes les classes
require_once __DIR__ . '/class/ContactForm.class.php';
require_once __DIR__ . '/class/ContactFormManager.php';
$contactFormManager = new ContactFormManager($db);
