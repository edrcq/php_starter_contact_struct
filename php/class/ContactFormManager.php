<?php

class ContactFormManager {
    private $db;

    function __construct($db) {
        $this->db = $db;
    }

    public function save_contact_form($fullname, $email, $phone, $text) {

        $query = $this->db->prepare('INSERT INTO contacts(fullname, email, phone, `text`) VALUES(:fullname, :email, :phone, :text)');
        $query->execute([
            'fullname' => $fullname,
            'email' => $email,
            'phone' => $phone,
            'text' => $text
        ]);
    }

    public function get_all_contact_form($db) {
        $query = $db->prepare('SELECT * FROM contacts');
        $query->execute();
    
        return $query->fetchAll(PDO::FETCH_CLASS, 'ContactForm'); // recupere un tableau des resultats de la requete SQL
    }
}
