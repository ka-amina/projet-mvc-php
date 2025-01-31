# Développement d'une Architecture MVC Moderne avec PHP et PostgreSQL
## Description du Projet
Ce projet a pour but de concevoir une architecture propre, modulaire et extensible de type MVC, en PHP, avec PostgreSQL comme SGBD. Ce projet a pour objectif d’assurer une séparation stricte des responsabilités et de développer un Back Office qui assurera l’administration de l’application, et un Front Office qui assurera l’affichage public. L’architecture souhaitée doit être sécurisée, performante et maintenable. 
## Technologies Utilisées
- PHP
- PostgreSQL
## Fonctionnalités Clés
- Gestion avancée des routes avec un routeur personnalisé
- Connexion sécurisée à PostgreSQL via PDO
- Séparation du Front Office et du Back Office
- Système d'authentification sécurisé (sessions, tokens, permissions)
- Gestion des rôles et autorisations (ACL)
- Moteur de templates Twig pour les vues
- Injection de dépendances et gestion des services
- Sécurisation des requêtes SQL contre les injections SQL et XSS
- Système de logs et de gestion des erreurs
- Utilisation des Design Patterns (Repository Pattern, Service Container)
- Classe Validator pour la validation des données
- Classe Security pour la protection CSRF, XSS et SQL Injection
- Classe Session pour la gestion avancée des sessions
- Utilisation d’un fichier .htaccess pour la réécriture des URL et la sécurité
## Structure du Projet
## Installation
1. Cloner le référentiel GitHub :
``` bash
https://github.com/ka-amina/projet-mvc-php
```
2. Installer les dépendances avec Composer:

``` bash
composer install
```
3. Configurer la base de données dans le fichier .env :

``` bash
DB_HOST=localhost
DB_NAME=nom_de_votre_base
DB_USER=utilisateur
DB_PASS=mot_de_passe
```
4. Démarrer le serveur local :

``` bash
php -S localhost:8000 -t public
```
5. Accéder à l'application via ```http://localhost:8000 ```



