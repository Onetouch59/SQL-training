<?php 
require_once('db-connect.php') ;
/* $sql = "SELECT * FROM `table_mockdata` WHERE `last_name` LIKE 'Palmer'"; */
/* $sql = "SELECT * FROM `table_mockdata` WHERE `gender` LIKE 'Female'"; */
/* $sql = "SELECT * FROM `table_mockdata` WHERE `country_code` LIKE 'N%'"; */
/* $sql = "SELECT * FROM `table_mockdata` WHERE `email` LIKE '%google.fr%'"; */
/* $sql = "SELECT `first_name`,`last_name` FROM `table_mockdata`"; */
$sql = "SELECT country_code, COUNT(country_code) AS qty FROM table_mockdata GROUP BY country_code ORDER BY qty ASC";
$query = $db->prepare($sql);
$query->execute();
$datas = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Exercices</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row">
        <?php foreach($datas as $row){ ?>
            <div class="col-2">
                <?= $row['country_code'] ?>
            </div>
            <div class="col-2">
                <?= $row['first_name'] ?>
            </div>
            <div class="col-2">
                <?= $row['last_name'] ?>
            </div>
            <div class="col-2">
                <?= $row['email'] ?>
            </div>
            <div class="col-2">
                <?= $row['gender'] ?>
            </div>
            <div class="col-2">
                <?= $row['qty'] ?>
            </div>
        <?php } ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>