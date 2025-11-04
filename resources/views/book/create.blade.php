<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Livre</title>
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
    <h1>Ajouter un Livre</h1>
    
    <form action="{{route('books.store')}}" method="POST">
        <!-- TODO: Ajouter un token CSRF -->
        @csrf
        
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" placeholder="Entrez le titre">
        
        <!-- TODO: Ajouter un input pour l'auteur -->
        <label for="author">Auteur</label>
        <input type="text" id="author" name="author" placeholder="Entrez l'auteur">

        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn" placeholder="Entrez l'ISBN">

        <label for="year">Edité en</label>
        <input type="number" id="year" name="year" placeholder="Entrez l'année d'édition">  
        
        <!-- TODO: Ajouter un textarea pour le contenu -->
        <textarea id="content" name="content" placeholder="Entrez votre résumé"></textarea>
        
        <button type="submit">Ajouter</button>
    </form>
    
    <a href="{{route('books.index')}}">Retour à la liste</a>
    
</body>
</html>