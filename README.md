# php-blog-oc
Projet 5 - Créez votre premier blog en PHP
https://petit-cactus.tony-tillet.com/

## Installation

[![SymfonyInsight](https://insight.symfony.com/projects/a0e3f5a7-7381-4945-b1c9-80a4bac98dc0/big.svg)](https://insight.symfony.com/projects/a0e3f5a7-7381-4945-b1c9-80a4bac98dc0)
# CONTEXTE
Projet 5 de mon parcours Développeur d'application PHP/Symfony chez OpenClassrooms.
Création d'un Blog via une architecture MVC Orienté objet.

## Project summary
Création d'un blog pour exposer mes projets et mes compétences en PHP afin de convaincre de futurs employeurs.
## Project needs
Le projet est donc de développer votre blog professionnel. Ce site web se décompose en deux grands groupes de pages :

- les pages utiles à tous les visiteurs ;
- les pages permettant d’administrer votre blog.

Voici la liste des pages qui devront être accessibles depuis votre site web :

- la page d'accueil ;
- la page listant l’ensemble des blog posts ;
- la page affichant un blog post ;
- la page permettant d’ajouter un blog post ;
- la page permettant de modifier un blog post ;
- les pages permettant de modifier/supprimer un blog post ;
- les pages de connexion/enregistrement des utilisateurs.

Vous développerez une partie administration qui devra être accessible uniquement aux utilisateurs inscrits et validés.

Les pages d’administration seront donc accessibles sur conditions et vous veillerez à la sécurité de la partie administration.

Commençons par les pages utiles à tous les internautes.

Sur la page d’accueil, il faudra présenter les informations suivantes :

- votre nom et votre prénom ;
- une photo et/ou un logo ;
- une phrase d’accroche qui vous ressemble (exemple : “Martin Durand, le développeur qu’il vous faut !”) ;
- un menu permettant de naviguer parmi l’ensemble des pages de votre site web ;
- un formulaire de contact (à la soumission de ce formulaire, un e-mail avec toutes ces informations vous sera envoyé) avec les champs suivants :
  - nom/prénom,
  - e-mail de contact,
  - message,
- un lien vers votre CV au format PDF ;
et l’ensemble des liens vers les réseaux sociaux où l’on peut vous suivre (GitHub, LinkedIn, Twitter…).

Sur la page listant tous les blogs posts (du plus récent au plus ancien), il faut afficher les informations suivantes pour chaque blog post :

- le titre ;
- la date de dernière modification ;
- le chapô ; 
- et un lien vers le blog post.

Sur la page présentant le détail d’un blog post, il faut afficher les informations suivantes :

- le titre ;
- le chapô ;
- le contenu ;
- l’auteur ;
- la date de dernière mise à jour ;
- le formulaire permettant d’ajouter un commentaire (soumis pour validation) ;
- les listes des commentaires validés et publiés.
- Sur la page permettant de modifier un blog post, l’utilisateur a la possibilité de modifier les champs titre, chapô, auteur et contenu.

Dans le footer menu, il doit figurer un lien pour accéder à l’administration du blog.
## Deliverables
Un lien vers l’ensemble du projet (fichiers PHP/HTML/JS/CSS…) sur un repository GitHub.
L’ensemble des diagrammes demandés (modèles de données, classes, use cases, séquentiels).
Les issues sur le repository GitHub.
Les instructions pour installer le projet (dans un fichier README à la racine du projet).
Jeu de données initiales avec l’ensemble des figures de snowboard.
Lien vers les analyses SensioLabsInsight, Codacy ou Codeclimate (via une médaille dans le README, par exemple).

# HOW INSTALL THIS PROJECT

## Required and technical environment
> Language => PHP 8.1.*

> Database => MySQL 5.7.25

> Web Server

> Composer


## Step 1: clone the projet
    git clone https://github.com/TonyWTillet/php-blog-oc.git

## Step 2: install composer
https://getcomposer.org/download/

## Step 3: download back dependencies
    composer install

## Step 4: config .env

## Step 5: create DB and setup
    add this following command in sql 
    SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));


## Step 6: start local server
    use laragon or wampserver and define the root folder of the project 'public'

## Step 7: default user
<table>
    <thead>
        <tr>
            <th>pseudo</th>
            <th align="center">password</th>
            <th align="right">role</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>user@gmail.com</td>
            <td align="center">user</td>
            <td align="right">User</td>
        </tr>
        <tr>
            <td>admin@gmail.com</td>
            <td align="center">admin</td>
            <td align="right">Admin</td>
        </tr>
    </tbody>
</table>

