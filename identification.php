<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PVTech</title>
</head>
<style>
html{background-color: white; width: auto; display: flex; flex-direction: column}
h1{color: black; text-align: center}
form{display: flex; flex-direction: column; gap: 30px; align-items: center;}
input{border-radius: 5px; width: 300px}
</style>

<body>
    <h1>PVTech</h1>         
    <form method="POST" action="connexion.php">      
        <input type="text" name="Nom" placeholder="Entrer votre Nom" required>
        <input type="email" name="Email" placeholder="Entrer votre Email" required>
        <input type="password" name="MotDePasse" placeholder="Entrer votre Mot de passe" required>
        <button type="submit" name="Valider">Soumettre</button>
    </form>   
</body>
</html>