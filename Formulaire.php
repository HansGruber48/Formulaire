<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- meta référencement -->
    <meta name="description" content="Web Dev PHP : Conditions, requêtes GET">
    <meta name="author" content="Camile Ghastine">

    <title>Questionnaire de satisfaction du service client Amazin</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../_vendor/prismjs/themes/prism-okaidia.css">
    <link rel="stylesheet" href="../_assets/css/custom.min.css">
</head>
<body>

    <div class="container">

        <h1 class="mb-5">AMAZIN</h1>

        <h2>Questionnaire de satisfaction</h2>

<!--  Informations à récolter -->
<!-- Nom* -->
<!-- Prénom* -->
<!-- Numéro de téléphone* -->
<!-- Date de l'achat * -->
<!-- L'agent a-t-il été agréable ? * → oui (2 points), non (0 point), sans avis (1 point) -->
<!-- L'agent a-t-il compris votre problème ? * → oui (2 points), non (0 point), sans avis (1 point) -->
<!-- L'agent a-t-il résolu votre problème ? * → oui (1points), non (-1point) -->
<!-- Dites-nous en plus : -->
<!-- Acceptez vous d'être rappelé (case à cocher) -->
    
            <form method="POST" action="">
        <p>
            <label for="firstname">Prénom : </label>
            <input type="text" name="firstname" required />
            <br>
            <label for="surname">Nom : </label>
            <input type="text" name="surname" required />
            <br>
            <label for="phone">Téléphone : </label>
            <input type="tel" name="phone" required />
            <br>
            <label for="date">Date achat : </label>
            <input type="date" name="date" required />
            <br>
            <label for="Question1">L'agent a-t-il été agréable ? : </label>
            <input type="text" name="Question1" required />
            <br>
            <label for="Question2">L'agent a-t-il compris votre problème ? : </label>
            <input type="text" name="Question1" required />
            <br>
            <label for="Question3">L'agent a-t-il résolu votre problème ? : </label>
            <input type="text" name="Question1" required />
            <br>
            <label for="message">Dites-nous en plus : </label>
            <br>
            <textarea name="message" rows="8" cols="45"></textarea>
            <br>
            <input type="checkbox" name="call" value="true" id="case" /> <label for="case">j'accepte d'être rappelé</label>
            <br>
            <input type="submit" value="Envoyer" required />
            <br>
        </p>
    </form>
</body>
</html>