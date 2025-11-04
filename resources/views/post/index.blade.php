<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Posts</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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
    
    <a href="{{route('posts.create')}}" class="btn">Ajouter un post</a>
    
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
            @foreach ($posts as $post)
                <tr>
                <td> {{$post->id}} </td>
                <td> {{$post->title}} </td>
                <td> {{$post->author}} </td>
                <td> {{$post->created_at->format('d/m/Y')}} </td>
                <td>
                    <a href="{{route('posts.show',$post)}}">Voir</a>
                </td>
            </tr>
            @endforeach
            {{$posts->links()}}
        </tbody>
    </table>
</body>
</html>