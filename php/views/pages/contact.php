<?php
$pageTitle = "Contact - Mon site.com";

ob_start();
?>
<h1>Contact Page</h1>

<?php
// On arrete d'ecrire dans la memoire tampon et on recupere le contenu precedent
$pageContent = ob_get_clean();
