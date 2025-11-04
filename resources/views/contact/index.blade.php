<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Contacts</title>
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
    <h1>Liste des Contacts</h1>
    
    <a href="#" class="btn">Ajouter un contact</a>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Entreprise</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- TODO: Ajouter une boucle ici pour afficher chaque contact -->
            <tr>
                <td>1</td>
                <td>Jean Dupont</td>
                <td>jean@example.com</td>
                <td>06 12 34 56 78</td>
                <td>Acme Corp</td>
                <td>
                    <a href="#">Voir</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>