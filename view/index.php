<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Acceuil</title>
</head>
<?php include_once('nav.php'); ?>

<body>
    <div class="text"> <h1>Gestions de contact</h1></div>
    <div class="formulaire">
        <img src="icone1.jpg" alt="" width="150px">
    <form action=""  method="POST">
    <input type="text" class="Nom" name="non" id="non" placeholder="Nom" >
    <input type="text" class="Nom" name="prenon" id="prenon" placeholder="Prenom" >
    <input type="text" class="Nom" name="telephone" id="telephone" placeholder="Telephone" >
    <input type="submit" class="Nom" name="submit" id="submit" value="Ajouter" >
   </form>
    </div>
   
</body>
</html>