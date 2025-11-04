# Exercice Laravel - CRUD sur 4 Tables

## 📌 Description de l'exercice

Cet exercice consiste à pratiquer les opérations CRUD (Create, Read, Update, Delete) avec Laravel sur 4 tables différentes :

- **Posts** : Gestion d'articles de blog (titre, contenu, auteur)
- **Products** : Gestion de produits (nom, description, prix, stock, catégorie)
- **Contacts** : Gestion de contacts (nom, email, téléphone, adresse, entreprise)
- **Books** : Gestion de livres (titre, auteur, ISBN, année, éditeur)

Pour chaque table, vous devez implémenter :
- **Lister** tous les enregistrements
- **Ajouter** un nouvel enregistrement
- **Voir** les détails d'un seul enregistrement

## ✅ Prérequis

Avant de commencer, assurez-vous d'avoir installé :
- PHP 8.0 ou supérieur
- Composer
- MySQL 5.7 ou supérieur
- Node.js (optionnel)

## 🚀 Installation

### 1. Cloner ou extraire le projet

```bash
cd /Users/gustaveguilliano/Documents/exercice0411
```

### 2. Installer les dépendances PHP

```bash
composer install
```

### 3. Créer le fichier .env

```bash
cp .env.example .env
```

### 4. Générer une clé de chiffrement

```bash
php artisan key:generate
```

### 5. Configurer la base de données

Ouvrez le fichier `.env` et mettez à jour les paramètres de connexion MySQL :

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=exercice0411
DB_USERNAME=root
DB_PASSWORD=votre_mot_de_passe
```

Créez la base de données MySQL :

```bash
mysql -u root -p
CREATE DATABASE exercice0411;
EXIT;
```

### 6. Exécuter les migrations

```bash
php artisan migrate
```

### 7. Remplir la base de données avec des données factices

```bash
php artisan db:seed
```

### 8. Lancer le serveur

```bash
php artisan serve
```

Le projet est maintenant accessible sur `http://127.0.0.1:8000`

## 📋 Tâches à effectuer

### Pour la table **Posts**

Les fichiers sont prêts dans `resources/views/posts/`

**À compléter :**
- `create.blade.php` : Ajouter les inputs pour auteur et contenu
- `index.blade.php` : Ajouter la boucle `@foreach` pour afficher tous les posts
- `show.blade.php` : Remplacer les données en dur par des variables PHP
- `app/Http/Controllers/PostController.php` : Implémenter les méthodes index(), create(), store(), show()

### Pour la table **Products**

Les fichiers sont prêts dans `resources/views/products/`

**À compléter :**
- `create.blade.php` : Ajouter les inputs pour description, prix, stock, catégorie
- `index.blade.php` : Ajouter la boucle `@foreach` pour afficher tous les produits
- `show.blade.php` : Remplacer les données en dur par des variables PHP
- `app/Http/Controllers/ProductController.php` : Implémenter les méthodes index(), create(), store(), show()

### Pour la table **Contacts**

Les fichiers sont prêts dans `resources/views/contacts/`

**À compléter :**
- `create.blade.php` : Ajouter les inputs pour email, téléphone, adresse
- `index.blade.php` : Ajouter la boucle `@foreach` pour afficher tous les contacts
- `show.blade.php` : Remplacer les données en dur par des variables PHP
- `app/Http/Controllers/ContactController.php` : Implémenter les méthodes index(), create(), store(), show()

### Pour la table **Books**

**À créer :**
- Créer les vues dans `resources/views/books/` (create.blade.php, index.blade.php, show.blade.php)
- Créer le contrôleur `app/Http/Controllers/BookController.php` avec les méthodes CRUD

## 📁 Structure du projet

```
exercice0411/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── PostController.php
│   │       ├── ProductController.php
│   │       ├── ContactController.php
│   │       └── BookController.php
│   └── Models/
│       ├── Post.php
│       ├── Product.php
│       ├── Contact.php
│       └── Book.php
├── database/
│   ├── factories/
│   │   ├── PostFactory.php
│   │   ├── ProductFactory.php
│   │   ├── ContactFactory.php
│   │   └── BookFactory.php
│   ├── migrations/
│   │   ├── *_create_posts_table.php
│   │   ├── *_create_products_table.php
│   │   ├── *_create_contacts_table.php
│   │   └── *_create_books_table.php
│   └── seeders/
│       ├── DatabaseSeeder.php
│       ├── PostSeeder.php
│       ├── ProductSeeder.php
│       ├── ContactSeeder.php
│       └── BookSeeder.php
├── resources/
│   └── views/
│       ├── posts/
│       ├── products/
│       ├── contacts/
│       └── books/
├── routes/
│   └── web.php
└── .env
```

## 💡 Indices

### Pour les contrôleurs

Chaque contrôleur doit avoir 4 méthodes :

```php
public function index()
{
    // Récupérer tous les enregistrements
    // Retourner une vue avec les données
}

public function create()
{
    // Retourner le formulaire de création
}

public function store(Request $request)
{
    // Récupérer les données du formulaire
    // Enregistrer en base de données
    // Rediriger vers la liste ou le détail
}

public function show($id)
{
    // Récupérer l'enregistrement par son ID
    // Retourner une vue avec les données
}
```

### Pour les vues

Les vues utilisent la syntaxe Blade de Laravel :
- `{{ }}` pour afficher une variable
- `@if @else @endif` pour les conditions
- `@foreach @endforeach` pour les boucles
- `{{ route('name') }}` pour générer une URL
- `@csrf` pour le token de sécurité dans les formulaires

## 🔗 Routes disponibles

```
GET  /posts              → Affiche la liste des posts
GET  /posts/create       → Affiche le formulaire de création
POST /posts              → Enregistre un nouveau post
GET  /posts/{id}         → Affiche un post

GET  /products           → Affiche la liste des produits
GET  /products/create    → Affiche le formulaire de création
POST /products           → Enregistre un nouveau produit
GET  /products/{id}      → Affiche un produit

GET  /contacts           → Affiche la liste des contacts
GET  /contacts/create    → Affiche le formulaire de création
POST /contacts           → Enregistre un nouveau contact
GET  /contacts/{id}      → Affiche un contact

GET  /books              → Affiche la liste des livres
GET  /books/create       → Affiche le formulaire de création
POST /books              → Enregistre un nouveau livre
GET  /books/{id}         → Affiche un livre
```

## 🎯 Objectifs d'apprentissage

À la fin de cet exercice, vous devriez être capable de :
- ✅ Créer des modèles Laravel
- ✅ Utiliser les migrations
- ✅ Créer des contrôleurs avec les méthodes CRUD
- ✅ Utiliser les factories et seeders
- ✅ Écrire des vues Blade
- ✅ Travailler avec les formulaires et la validation
- ✅ Gérer les routes

Bon exercice ! 🚀