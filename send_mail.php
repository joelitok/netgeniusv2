
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
if (isset($_POST['email'])){
   
    echo 'pour voie si mon post fonctionne normalemet';
    $_POST['email'];
    echo ' l email de la personne donne ceci'.$_POST['email'];
    
}

?> 
</body>
</html>



