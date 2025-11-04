<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 600px;
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        textarea {
            min-height: 150px;
            resize: vertical;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Ajouter un Post</h1>
    
    <form action="#" method="POST">
        <!-- TODO: Ajouter un token CSRF -->
        
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" placeholder="Entrez le titre">
        
        <!-- TODO: Ajouter un input pour l'auteur -->
        
        <!-- TODO: Ajouter un textarea pour le contenu -->
        
        <button type="submit">Ajouter</button>
    </form>
    
    <a href="#">Retour à la liste</a>
    
</body>
</html>