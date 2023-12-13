<?php 
try{
// data source name
$dns ='mysql:host=localhost;dbname=colyseum';

$user ='root';

$password ='';

$db = new PDO($dns, $user, $password);


}
catch(Exception $message){

    echo "ya un blem <br>" . "<pre>$message</pre>" ;
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