<!DOCTYPE html>
<html>
  <head>
    <title>Le Quai Antique _ admin</title>
    <meta charset="UTF-8">
    <meta name="description" content="Découvrez le troisième restaurant de burger du Chef Michant à Chambéry ! Nous vous proposons une large sélection de burgers savoureux, préparés avec des ingrédients frais et de qualité. Notre équipe chaleureuse et accueillante sera heureuse de vous recevoir pour un déjeuner ou un dîner délicieux. Découvrez notre carte en ligne et réservez votre table dès maintenant !">
    <meta name="keywords" content="restaurant, restaurant savoyard, burger, chef">
    <meta name="author" content="Froment Chloe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha384-nFJzd3q+miPnQ2KjR+zmhT8yJ0/If+AVK1twwahJnx8x1L+tFljuOtf+y/dzSOJv" crossorigin="">
  </head>
  <body class="d-flex  justify-content-center" style="height: 110vh;">
  <form id="admin-form" action="signup_process.php" class=" col-md-6 " method="POST">
    <h1>Ajout d'un Administrateur</h1>
    <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
    
    <label for="email">Email :</label>
        <input type="email" id="email" value="quaiantique@restaurant.com" name="email" required>

    <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br><br>

    <label for="retype_password">Confirmer le mot de passe :</label>
        <input type="password" id="retype_password" name="retype_password" required><br><br>

        <label for="additional-input">Code restaurant :</label>
              <input type="password" id="additional-input" name="additionalInput">
              <a href="admin_signup.php" id="signup-button">
              
              <input class="submit btn" type="submit" value="Ajoutez un administrateur "></a>
          </div>
  </form>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
      <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha384-tMvFIFwU6EvwU6hhxnYR9+RJZMDn27n+cLbFJhvV7v1Rpz3cV7Cn2QY/F9/UBCjK" crossorigin=""></script>
      <script src="js/script.js"></script>
  </body>
</html>


