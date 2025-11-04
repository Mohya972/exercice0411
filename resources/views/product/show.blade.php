<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail d'un Produit</title>
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
        .product-info {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>{{$product->name}}</h1>
    
    <div class="product-info">
        <p><strong>Prix:</strong> {{$product->price}} €</p>
        <p><strong>Stock:</strong> {{$product->stock}}</p>
        <p><strong>Catégorie:</strong> {{$product->category}}</p>
        <p><strong>Description:</strong></p>
        <p >{{$product->description}}</p>
    </div>
    
    <a href="{{route('products.index')}}">Retour à la liste</a>
    
</body>
</html>