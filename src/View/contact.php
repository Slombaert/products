<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="Wild Code School">
    <meta name="description" content="Wild Code School project_2">
    <meta name="keywords" content="Mon Espace Perruques, perruque, naturelle, synthétique">
    <title>Mon espace perruques</title>

    <link rel="stylesheet" href="../../public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/assets/css/style.default.css">
    <link rel="stylesheet" href="../../public/assets/css/contact.css">
    <link rel="stylesheet" href="../../public/assets/css/navbar_and_footer_style.css">
</head>
<body>
    <header>
        <?php include 'navbar.php'; ?>

    </header>

    <!-- Contact-form Section -->
    <section id="contact" class="contact">
        <h2>Formulaire de contact</h2>
        <p class="succes"> <?php include '../Controller/post_contact.php'?> </p>
        <div class="container-fluid text-center">
            <form method="POST" action="#" id="contact-form">
                <div class="row">
                    <div class="col-sm-6 unique">
                        <label for="lastname" class="col-sm-12">Nom
                            <input type="text" name="lastname" id="lastname" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname']; ?>">
                        </label>
                        <p class="error"><?php if(isset($errors['lastname'])) echo $errors['lastname'];?></p>
                    </div>

                    <div class="col-sm-6 unique">
                        <label for="firstname" class="col-sm-12">Prénom
                            <input type="text" name="firstname" id="firstname" value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname']; ?>">
                        </label>
                        <p class="error"><?php if(isset($errors['firstname'])) echo $errors['firstname'];?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 unique">
                        <label for="email" class="col-sm-12">Email
                            <input type="text" name="email" id="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
                        </label>
                        <p class="error"><?php if(isset($errors['email'])) echo $errors['email'];?></p>
                    </div>

                    <div class="col-sm-6 unique">
                        <label for="phone" class="col-sm-12">Téléphone
                            <input type="text" name="phone" id="phone" value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>">
                        </label>
                        <p class="error"><?php if(isset($errors['phone'])) echo $errors['phone'];?></p>
                    </div>
                </div>
                <label for="Objet">Objet</label><br />
                <select id="Objet" name="Objet">
                    <option value="domicile">Rendez-vous à domicile</option>
                    <option value="boutique">Rendez-vous en boutique</option>
                    <option value="devis">Demande de devis</option>
                    <option value="autre">Autre</option>
                </select>

                <div class="col-sm-12 unique">
                    <label for="message" class="col-sm-12">Votre message
                        <textarea name="message" id="message"><?php if (isset($_POST['message'])) echo $_POST['message']; ?></textarea>
                    </label>
                    <p class="error"><?php if (isset($errors['message'])) echo $errors['message']; ?></p>
                </div>

                <div class="col-sm-12">
                    <button type="submit" class="btn-unique" id="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </section>
    <!-- End contact-form Section -->

    <!--General libraries JS-->
    <script src="/public/assets/js/jquery.min.js"></script>
    <script src="/public/assets/js/bootstrap.min.js"></script>

    <?php include 'footer.php'; ?>
</body>
</html>