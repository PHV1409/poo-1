<?php
include "Moderateur.php";

$user1 = new User('Perrotton','Elodie', 'elodie.perrotton@gmail.com', 26);
$user2 = new User('Chada','Said', 'said.chada@gmail.com', 26);
$user3 = new User('Corroy','Alexandre', 'alex.corroy@gmail.com', 28);

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

