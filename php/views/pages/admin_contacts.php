<?php
$pageTitle = "Admin Contact - Mon site.com";

// on recupere tous les contact form
$all_forms = $contactFormManager->get_all_contact_form();

ob_start();
?>
<h1>Admin Contact Page</h1>
<ul>
<?php
foreach($all_forms as $form) {
?>
<li><?php echo $form->fullname; ?></li>
<?php } ?>
</ul>

<?php
// On arrete d'ecrire dans la memoire tampon et on recupere le contenu precedent
$pageContent = ob_get_clean();
