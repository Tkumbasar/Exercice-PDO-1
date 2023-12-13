<h1>Exo-1</h1>
<?php
// demande une fois d'importer le fichier connextion.php ou l'on créer la connexion pdo
require_once('connextion.php');

// on prepare/fait notre requet a la base de donné
$request = $db->query('SELECT * FROM clients');

// on recupere  notre requet 
$clients = $request->fetchAll();

foreach ($clients as $client) {
    echo ('<p> Le nom : ' . $client["firstName"] . '<br>' . 'Le prenom : ' . $client["lastName"] . '</p>');
}
?>
<h1>Exo-2</h1>
<?php
// //////////////////////////////////////////////////////////////
require_once('connextion.php');

$request = $db->query('SELECT * FROM showtypes');

$showtypes = $request->fetchAll();

foreach ($showtypes as $showtype) {
    echo ('<p> types de spectacles : ' . $showtype["type"] . '</p>');
}
?>
<h1>Exo-3</h1>
<?php
require_once('connextion.php');

// demande a ma base de donner de faire une requet  pour selection tous les 
$request = $db->query('SELECT * FROM clients ORDER BY id  ASC LIMIT 20');

// on recupere la demande d'aller chercher 
$clients = $request->fetchAll();

foreach ($clients as $client) {
    echo ('Le prenom : ' . $client["lastName"] . '<br>');
}

?>
<h1>Exo-4</h1>
<?php

require_once('connextion.php');

// demande a ma base de donner de faire une requet  pour selection tous les user
$request = $db->query('SELECT * FROM clients INNER JOIN cards ON cards.cardNumber = clients.cardNumber WHERE cardTypesId=1');

// on recupere la demande d'aller chercher 
$cardtypes = $request->fetchALL();

foreach ($cardtypes as $cardtype) {
    echo ('Le prenom : ' . $cardtype['firstName'] . '<br>' . 'Le nom : ' . $cardtype['lastName']);
}

?>
<h1>Exo-5</h1>
<?php

require_once('connextion.php');

// demande a ma base de donner de faire une requet  pour selection tous les user
$request = $db->query('SELECT lastName , firstName FROM clients WHERE lastName LIKE "M%" ORDER BY lastName  ');

// on recupere la demande d'aller chercher 
$clients = $request->fetchAll();

foreach ($clients as $client) {
    echo ('Le prenom : ' . $client["lastName"] . '<br>' . 'Le nom : ' . $client["firstName"] . '<br>');
}

?>
<h1>Exo-6</h1>
<?php
require_once('connextion.php');

// demande a ma base de donner de faire une requet  pour selection tous les user
$request = $db->query('SELECT * FROM shows  ORDER BY title ');

// on recupere la demande d'aller chercher 
$shows = $request->fetchAll();

foreach ($shows as $show) {
    echo (' Le titre : ' . $show['title'] . '<br>' . "L'artiste : " . $show['performer'] . '<br> ' . "Les dates : " . $show['date'] . '<br> ' . "Le commencement : " . $show['startTime'] . '<br>');
}
?>
<h1>Exo-7</h1>
<?php

require_once('connextion.php');

// demande a ma base de donner de faire une requet  pour selection tous les user
$request = $db->query('SELECT * FROM clients LEFT JOIN cards ON cards.cardNumber = clients.cardNumber');
// on recupere la demande d'aller chercher 
$clients = $request->fetchAll();

foreach ($clients as $client) {

    if ($client['cardTypesId']===1) {
        echo ('le Nom  : ' . $client['lastName'] .'<br>'.'le Prenom  : '. $client['firstName'] .'<br>');
        echo ('date de naissance  : ' .$client['birthDate'].'<br>');
        echo ('carte de fidélité : oui '.'<br>');
        echo ('numéro de carte : ' .$client['cardNumber'] .'<hr>');  
    }elseif ($client['cardTypesId']!=1 && $client ['cardNumber']!=null) {
        echo ('le Nom  : ' . $client['lastName'] .'<br>'.'le Prenom  : '. $client['firstName'] .'<br>');
        echo ('date de naissance  : ' .$client['birthDate'].'<br>');
        echo ('carte de fidélité : non '.'<br>');
        echo ('numéro de carte : ' .$client['cardNumber'] .'<hr>');  
    }elseif ($client ['cardNumber']===null) {
        echo ('le Nom  : ' . $client['lastName'] .'<br>'.'le Prenom  : '. $client['firstName'] .'<br>');
        echo ('date de naissance  : ' .$client['birthDate'].'<br>');
        echo ('carte de fidélité : non '.'<br>');
        echo ('numéro de carte : ' .$client['cardNumber'] .'<hr>');  
    }

}















?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>