<?php
function pdo_connect_mysql(){
    $Database_Servername='localhost';
    $Database_User='root';
    $Database_Password='';
    $Database_Name='crud_p';

    try{
        return new PDO('mysql:host='. $Database_Servername .'; dbname=' . $Database_Name .'; charset=utf8', $Database_User,$Database_Password);
    } catch(PDOException $exception){
        exit('Failed to connect to database...');
    }
}

function template_header($title){
    echo <<<EOT
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>$title</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="stylee.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        

    </head>
    <body>
        <nav class="navtop">
            <div>
                <h2>Evde Aşı Platformu</h2>
                <a href="index.php"><i class="fas fa-home"></i>Anasayfa</a>
                <a href="read.php"><i class="fas fa-address-book"></i>Kayıt</a>
            </div>
        </nav>
    
    EOT;
}
function template_footer()
{
    echo <<<EOT
    </body>
    </html>
    EOT;
}

?>
