| Auteur        | Version              | Date       |
| ------------- | -------------------- | ---------- |
| Oberson Gaël  | Création du document | 20.12.2019 |
| Pasteur Kévin | Refactor du document | 10.01.2020 |
| Pasteur Kévin | Ajout Installation Composer + NPM | 23.01.2020 |

# Création du projet Laravel

1. Se placer dans un répertoire de travail au choix.

2. Installer les dépendances pour laravel

   ```
   composer global require laravel/installer
   ```

3. Créé le projet NOM_PROJET
   ```
   laravel new NOM_PROJET
   ```

# Installation du projet laravel depuis Git

## Prérequis

- PHP 7.3

## Installation de Composer
## Installation de NPM

## Installation de MongoDB

1. [MongoDB pour Windows 10 64x](https://fastdl.mongodb.org/win32/mongodb-win32-x86_64-2012plus-4.2.2-signed.msi)
   - Faites une install `custom` puis `next`
   - Installer aussi "Compass"
2. Installer la DLL `php_mongodb.dll` pour votre version de php (ici 7.3)
   - [DLL mongodb 1.6.1 for Windows](https://pecl.php.net/package/mongodb/1.6.1/windows)
   - Déplacer la dll `php_mongodb.dll` dans le répertoire ext de votre php.
   - Ajouter la ligne `extension=php_mongodb.dll` dans votre `php.ini`
   - Relancer votre éditeur

# Configuration laravel

1. Cloner le repo git

   ```
   git clone https://github.com/KevinPasteur/E-count.git
   ```

2. modifier le `.env` pour y ajouter à la fin ceci:

   ```
   MONGO_DB_HOST=127.0.0.1
   MONGO_DB_PORT=27017
   MONGO_DB_DATABASE="Insérer le nom de votre database"
   MONGO_DB_USERNAME=
   MONGO_DB_PASSWORD=
   ```

3. Effectuer les commandes suivantes
   ```
   1. composer i
   2. npm i
   3. npm run dev
   4. php artisan key:generate
   ```

# Autre

[How To Use Laravel With MongoDB](https://appdividend.com/2018/05/10/laravel-mongodb-crud-tutorial-with-example/)
