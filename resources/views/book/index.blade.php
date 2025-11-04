<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
        .btn {
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Liste des Posts</h1>
    
    <a href="#" class="btn">Ajouter un post</a>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- TODO: Ajouter une boucle ici pour afficher chaque post -->
            <tr>
                <td>1</td>
                <td>Titre du post</td>
                <td>Nom de l'auteur</td>
                <td>04/11/2025</td>
                <td>
                    <a href="#">Voir</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>