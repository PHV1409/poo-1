<html>
    <head>
        <meta charset="utf-8" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
<?php

// inclusion de l'autoload: charger de tous les includes
require_once __DIR__.'/vendor/autoload.php';

// Le premier nom correspond au namespace principal
// les noms suivants du chemin correspondent aux noms des sous-dossiers
// le dernier est la classe ciblée
use Application\User;
use Application\Editeur;
use Application\Moderateur;
use Application\Ecrivain;
use Application\Commercial\Commercial;

use Libraries\User as UserLib;


use Monolog\Logger;
use Monolog\Handler\StreamHandler;


// create a log channel
$log = new Logger('3WA utilise le composant Monolog'); // créer un message de log

// Envoi le message préparé dans mon fichier de log dev.log
$log->pushHandler(new StreamHandler('config/dev.log', Logger::WARNING));

// add records to the log
$log->addWarning('Foo');

$userlib = new UserLib("juju","pass");

// Use Finder in Symfony Namespace
use Symfony\Component\Finder\Finder;

// je crée un objet de ma classe Finder
$finder = new Finder();

// je vais récupérer les fichiers (files() ) dans mon dossier img
$finder->files()->in('img/');

//je parcours tous mes fichiers du dossier img/
foreach($finder as $file){
    //J'affiche chaque image de mon dossier
    echo "<img src='img/" .$file->getRelativePathname(). "' alt='' class='img-responsive col-md-6' style='height:400px'/>";
}


// Je charge la classe Parser située dans le dossier Yaml
use Symfony\Component\Yaml\Parser;

// Création de mon objet Parser
$yaml = new Parser();

// Parser le fichier app.yml dans config
$value = $yaml->parse(file_get_contents('config/app.yml'));

// Exploser ma variable $value
var_dump($value);



$date = new \Datetime('now'); // Datetime est class native de PHP
echo $date->Format('d/m/Y');
echo "<br />";
$date->modify('+1 day');
echo $date->Format('d/m/Y');
echo "<br />";
$date->modify('+3 month');
echo $date->Format('d/m/Y');
echo "<br />";
$date->modify('+1 year');
echo $date->Format('d/m/Y');
echo "<br />";
$date->modify('+1 year -3 month');
echo $date->Format('d/m/Y');
echo "<br />";
$date->modify('last day of this month');
echo $date->Format('d/m/Y');
echo "<br />";

$datefrom = DateTime::createFromFormat('d/m/Y', '06/04/2011');
echo "Date " .$datefrom->format('Y-m-d');

$user1 = new User('Perrotton','Elodie', 'elodie.perrotton@gmail.com', 26);
$user2 = new User('Chada','Said', 'said.chada@gmail.com', 26);
$user3 = new User('Corroy','Alexandre', 'alex.corroy@gmail.com', 28);

echo "<br />";
// utiliser ma fonction magique __toString
echo $user1;


// Appel à la méthode commenter
$user1->commenter('François Hollande n\'est pas un bon président');

echo "<br />";

$user2->commenter('Nico par contre pourrait bien revenir');

echo "<br />";

// j'envoi l'objet $user2 issue de ma classe User
$user1->repondre($user2);

echo "<br />";
/**
 * Attributs de mon objet
 */
echo "Email de l'utilisateur 1 : " .$user1->getEmail();
echo "<br />";
/**
 * Attributs de mon objet
 */
echo "Age de l'utilisateur 2 : " .$user2->getAge();

echo "<br />";

// j'accède à la constante PAYS
echo $user1::PAYS;

echo "<br />";

// j'accède à la constante LANGUES
echo $user1::LANGUES;

/**
 * SETTER
 */
$user1->setAge(26);
echo "Elodie a " .$user1->getAge();

echo "<br />";

/**
 * SETTER
 */
$user2->setEmail("said@free.fr");
echo "Nouvelle email de Said " .$user2->getEmail();

echo "<br />";

$user1 = clone $user2;
$user1->setAge(10);

echo $user1->getAge(); // cloner l'objet dans un nouvel espace mémoire
echo $user2->getAge();

$moderateur1 = new Moderateur('Dos Santos', 'Leonel', 'leonel@gmail.com', 32, 4, 'Voici ma life');

echo "<br />";
echo $moderateur1->getNom();

echo "<br />";
echo $moderateur1->getPrenom();

echo "<br />";
echo $moderateur1->getDescription();


echo "<br />";
// utiliser ma fonction magique __toString
echo "<strong>".$moderateur1." modérateur vraiment très zen !</strong>";
echo "<br />";

//  ***************************************************************************************** //

echo "<br />";
$editeur1 = new Editeur("B","Pierre","bp@gmail.com","Bayard");
$editeur2 = new Editeur("Hersant","Jacques","jh@gmail.com","Groupe Hersant Média");
$editeur3 = new Editeur("Lagardère","Hubert","hl@gmail.com","Lagardère Active");
$editeur4 = new Editeur("Ouacine","Pierre","op@gmail.com","Le Monde");


echo "<br />";
echo $editeur1->getNom();
echo "<br />";
echo $editeur1->getPrenom();
echo "<br />";
echo $editeur1->getAge();
echo "<br />";
echo $editeur1->getPresse();

echo "<br />";

$editeur2->setAge(42);
echo "<br />";
echo $editeur2->getNom();
echo "<br />";
echo $editeur2->getPrenom();
echo "<br />";
echo $editeur2->getAge();
echo "<br />";
echo $editeur2->getPresse();

echo "<br />";
$editeur3->setAge(65);
echo "<br />";
echo $editeur3->getNom();
echo "<br />";
echo $editeur3->getPrenom();
echo "<br />";
echo $editeur3->getAge();
echo "<br />";
echo $editeur3->getPresse();




//  ***************************************************************************************** //

echo "<br />";
$commercial1 = new Commercial("Constant","Jean-Claude","jcc@gmail.com",42,"Pastagaland","20ans");
$commercial2 = new Commercial("Raffner","Yves","yr@gmail.com",46,"Codeland","2ans");


echo "<hr>";
echo "<br />";
echo $commercial1->getNom();
echo "<br />";
echo $commercial1->getPrenom();
echo "<br />";
echo $commercial1->getAge();
echo "<br />";
echo $commercial1->getEmail();
echo "<br />";
echo $commercial1->getAge();
echo "<br />";
echo $commercial1->getMag();
echo "<br />";
echo $commercial1->getExperience();
echo "<br />";
echo $commercial1->commenter();
echo "<br />";
echo $commercial1->noter(5);
echo "<br />";
echo "<hr>";
echo "<br />";
echo $commercial2->getNom();
echo "<br />";
echo $commercial2->getPrenom();
echo "<br />";
echo $commercial2->getAge();
echo "<br />";
echo $commercial2->getEmail();
echo "<br />";
echo $commercial2->getAge();
echo "<br />";
echo $commercial2->getMag();
echo "<br />";
echo $commercial2->getExperience();
echo "<br />";
echo $commercial2->noter(8);
echo "<br />";
echo $commercial2->repondre($editeur1);
echo "<br />";

// utiliser ma fonction magique __toString
echo "<strong>".$commercial1." vraiment trop fort !</strong>";
echo "<br />";

echo "<hr>";
echo $moderateur1->blamer($user1);

echo "<hr>";
$ecrivain1 = new Ecrivain();
$ecrivain1->setNom("Boyer");
$ecrivain1->setPrenom("Julien");
$ecrivain1->setEmail("jb@gmail.com");

echo "<br />";
echo bold($ecrivain1->getNom());
echo "<br />";
echo $ecrivain1->getPrenom();
echo "<br />";
echo $ecrivain1->getEmail();
echo "<br />";
echo $ecrivain1->connexion();
echo "<br />";
echo $ecrivain1->deconnexion();
echo "<br />";





?>

        </div>
    </body>

</html>