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
> Dossier où se trouve toutes les routes, les deny d'accès, les configs des dépendances, ...
* packages/
  * security.yaml: Fichier de configuration du cryptage des mots de passes, contrôles d'accès aux pages, du temps "remember_me"
* routes/
  * annotations.yaml: Permet d'ajouter les langues que le site doit traduire
* routes.yaml: Permet de définir les routes des controllers
* services.yaml: Fichier où se trouve les paramètres locaux (comme la langue par défaut)

### Public: 
> Dossier où se trouve toutes les images, bibliothèques CSS / Javascript (comme le dossier assets)

### Controller: 
> Dossier où se trouve les fichiers PHP. Chaque "Controller" est relié à un ou plusieurs templates
> (c'est lui qui leur permet d'être visible/affiché)
* Voici un exemple (pour la page company) d'un controller classique
  ```
  <?php

  namespace App\Controller;

  use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
  use Symfony\Component\Routing\Annotation\Route;

  class CompanyController extends AbstractController
  {
      /**
       * @Route("/company", name="company")
       */
      public function index()
      {
          return $this->render('company/index.html.twig');
      }
  }
  ```
* Si je voulais créer une nouvelle page (admettons "CGU").
  * On recréer un fichier dans le dossier "Controller" que je nommerais CGUController.php
  * On reprends le code ci-dessus et on y change quelques lignes: 
  * Tout d'abord, le nom de la classe doit convenir au nom du fichier .php du Controller:
  ```
  class CGUController extends AbstractController
  ```
  * Ensuite, on rename la route qui permettra d'accéder à la page via le navigateur web:
  ```
  /**
   * @Route("/cgu", name="cgu")
   */
  ```
  * Enfin, on fait pointer la page que l'on veut afficher à cette url:
  ```
  return $this->render('cgu/index.html.twig');
  ```
  > Pour plus de facilier, chaque page à un dossier à son nom dans lequel on retrouve l'index (la page principal),
  > les formulaires, et autres pages en rapport avec cette page.
  
#### Requête SQL:
 * Il est possible de faire des requêtes SQL directement en PHP, avec Doctrine :
 ```
 $em = $this->getDoctrine()->getManager();
 
 $articles = $em->getRepository(Article::class)->findAll();
 ```
 * Il existe toute sorte de requête possible:
 ```
 $articles = $em->getRepository(Article::class)->findBy(
  ['PublishedAt'=> 'DESC']
 );
 ```
#### Traductions:

### Entity:
> Dossier où sont regroupés les entitées. Elles permettent de créer la base de données et de pouvoir faire
> des requêtes en fonction de leurs attributs. 
### Form:
> Dossier où sont regroupés les formulaires. Chaque formulaire peut ainsi être paramétrés et personnalisés ici.
### Repository:
> Dossier où sont regroupés les requêtes préparées (sous forme de fonction).
> Elles incluents de base find(), findOneBy(), findAll(), findBy()
### Security: 
> Dossier où se trouve le fichier de configuration des sessions et de la sécurité en général.
### Template:
> Dossier où sont regroupés les vues (les fichiers HTML). Chaque template est répertorié dans un dossier qui lui est propre.
* Voici un exemple (pour la page company) d'une vue index classique
  ```
  {# HEADER / FOOTER #}
  {% extends 'base.html.twig' %}

  {# Title Page #}
  {% block title %}
    Notre Société
  {% endblock %}

  {# CSS : Individual Page #}
  {% block stylesheets %}{% endblock %}

  {# JS : Individual Page #}
  {% block javascripts %}{% endblock %}

  {# BODY : Individual Page #}
  {% block body %}
    // Contenu de la page
  {% endblock %}
  ```
* Si je voulais créer une nouvelle page (admettons "CGU").
  * On créer un nouveau dossier nommé cgu (pour plus de clarté)
  * On recréer un fichier dans le dossier "cgu" que je nommerais index.html.twig (qui sera donc notre page principale de la section cgu)
  * On reprends le code ci-dessus et on y change quelques lignes: 
  * Tout d'abord, le nom de la page (modulable en fonction de la traduction ou pas):
  ```
  {% block title %}
    Conditions Générales d'Utilisations
  {% endblock %}
  ```
  * Ensuite, en fonction de la page, on ajoute les bibliothèques (liens) CSS et/ou Javascript dont on a besoin:
  ```
  {# CSS : Individual Page #}
  {% block stylesheets %}
    // ICI
  {% endblock %}

  {# JS : Individual Page #}
  {% block javascripts %}
    // ICI
  {% endblock %}
  ```
  * Enfin, on ajoute le contenu de la page
  ```
  {% block body %}
    // Contenu de la page
  {% endblock %}
  ```
  > Remarque: base.html.twig est notre template de base avec head/header/footer,
  > qu'on importe ensuite sur chaque page.

#### Traductions:

### Translation: 
  > Dossier où sont regroupés les traductions. Chaque template est répertorié dans un dossier qui lui est propre.
  * Hiérarchie d'une page traduction :
  ```
  nom_de_la_page:
      general:
          item_exemple: 
      index:
        header:
            item_exemple: 
            item_exemple:
        content:
            item_exemple: 
            item_exemple:
                item_exemple: 
                item_exemple: 
            item_exemple:
                item_exemple: "
                item_exemple: 
        form:
            item_exemple: 
  ```
  * Exemple des traductions possibles de la page CGU :
  ```
  cgu:
      general:
          unknown: 
      index:
        header:
            title1: 
            title2:
        simulation:
            title: 
            intro1:
                title: 
                content: 
            intro2:
                title: "
                content: 
        form:
            content: 
  ```
  > Remarque: Si Symfony dit qu'il y a une erreur dans la traduction
  > (surement à cause de ' ou : alors mettre la traduction entre "traduction").
## VueJS:
