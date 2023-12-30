<?php require "../bootstrap.php"?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP devClass</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>

<body style="background-color: lavender;">
    <div class="container">
        <?php 

        try{
            require load();
        }catch(\Exception $e){
            echo $e->getMessage();
        }

        ?>
    </div>
</body>
</html>