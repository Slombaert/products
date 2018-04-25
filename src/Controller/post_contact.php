<?php

if ($_POST) {

    $errors = array();

    if (empty($_POST['lastname'])) {
        $errors['lastname'] = "*Veuillez renseigner votre nom.";
    }

    elseif (!preg_match("#([a-zA-Z]{2,32}\s*)+#", $_POST['lastname'])) {
        $errors['lastname'] = "*Veuillez renseigner un nom valide, compris entre 2 et 32 caractères";
    }

    if (empty($_POST['firstname'])) {
        $errors['firstname'] = "*Veuillez renseigner votre prénom.";
    }

    elseif (!preg_match("#([a-zA-Z]{2,32}\s*)+#", $_POST['firstname'])) {
        $errors['firstname'] = "*Veuillez renseigner un prénom valide, compris entre 2 et 32 caractères";
    }

    if (empty($_POST['email'])) {
        $errors['email'] = "*Veuillez renseigner votre e-mail.";
    }
    if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}.[a-z]{2,4}$#", $_POST['email'])) {
        $errors['email'] = "*Veuillez renseigner une adresse e-mail valide";
    }
    if (empty($_POST['phone'])) {
        $errors['phone'] = "*Veuillez renseigner votre numéro de téléphone.";
    }
    if (!preg_match("#^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$#",
        $_POST['phone'])) {
        $errors["phone"] = "*Veuillez renseigner un numéro de téléphone valide";
    }

    if (empty($_POST['message'])) {
        $errors['message'] = "*Laissez nous un message.";
    }
    elseif (strlen($_POST['message']) < 2 || strlen($_POST['message']) > 600) {
        $errors['message'] = "*Votre message doit comprendre entre 2 et 6OO caractères";
    }

    if (count($errors) == 0) {
        $headers  = "From:".$_POST['email']."\n";
        $headers .= "MIME-version: 1.0\n";
        $headers .= "Content-type: text/html; charset= iso-8859-1\n";

        $contenu = "Ce mail est envoyé suite a une prise de contact sur le formulaire " . '<br>' . '<br>' . $_POST['lastname'] . $_POST['firstname'] .
            " a écrit le message suivant : " . '<br>' . $_POST['message'];
        mail('serre.thibault@gmail.com', 'Formulaire de contact de' . $_POST['lastname'] . $_POST['firstname'], $contenu, $headers);
        unset($_POST);
        echo $message = 'Votre demande a bien été prise en compte';
    }
}