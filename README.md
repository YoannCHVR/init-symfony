# Kipers Industries
## Initialisation du poste de travail:
### A savoir:
* Executer une commande composer (linux):
 ```
composer require
```
* Executer une commande composer (windows):
 ```
php composer.phar require
```



## Symfony:

### Commandes:
#### Symfony:
* Créer un nouveau projet [(plus d'informations)](https://gregwar.com/php/tds/td6_1.html):
```
composer create-project symfony/website-skeleton symfony
```
* Commande générale:
 ```
php bin/console
```
#### Composer:
* Ajouter des dépendances:
 ```
composer require
```
* Installer les dépendances:
 ```
composer install
```
#### Doctrine:
* Vérifier la connexion à la base de données:
 ```
php bin/console doctrine:schema:validate
```
> Cette commande sert à vérifier que votre base de données est en accord avec votre application,
> dans votre cas vous n'avez pas encore décrit de classes mappées avec la base de données
> mais cela peut vous permettre de tester que la connexion fonctionne.
* Créer la base de données par rapport à vos entitées:
 ```
php bin/console doctrine:schema:create
```
* Permet de mettre à jour la base de données par rapport à vos entitées:
 ```
php bin/console doctrine:schema:update --force
```

### Config: 

### Public: 

### Controller: 

### Template:

### Translation: 


## VueJS:
