<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
 

// ===== POSTS =====
// Affiche la liste de tous les posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Affiche le formulaire pour créer un nouveau post
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// Enregistre le nouveau post en base de données
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// Affiche les détails d'un post spécifique
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

// ===== PRODUCTS =====
// Affiche la liste de tous les produits
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Affiche le formulaire pour créer un nouveau produit
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Enregistre le nouveau produit en base de données
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Affiche les détails d'un produit spécifique
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// ===== CONTACTS =====
// Affiche la liste de tous les contacts
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
// Affiche le formulaire pour créer un nouveau contact
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
// Enregistre le nouveau contact en base de données
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
// Affiche les détails d'un contact spécifique
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');

// ===== BOOKS =====
// Affiche la liste de tous les livres
Route::get('/books', [BookController::class, 'index'])->name('books.index');
// Affiche le formulaire pour créer un nouveau livre
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
// Enregistre le nouveau livre en base de données
Route::post('/books', [BookController::class, 'store'])->name('books.store');
// Affiche les détails d'un livre spécifique
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
