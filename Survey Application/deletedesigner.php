 
<?php

$dsn = 'mysql:dbname=survey;host=127.0.0.1';
$user = 'root';
$password = '';
 
try {
    $baglan = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Bağlantı kurulamadı: ' . $e->getMessage();
}



 
 
if(isset($_GET['sil'])){
    $sqlsil="DELETE FROM `survey_taker` WHERE `survey_taker`.`st_id` = ?";
    $sorgusil=$baglan->prepare($sqlsil);
    $sorgusil->execute([
        $_GET['sil']]);
 
    header('Location:deletedesigner.php');
 
}
 
$sql ="SELECT * FROM survey_taker";
$sorgu = $baglan->prepare($sql);
$sorgu->execute();
 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Designers</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-1 text-center">Survey System</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="btn-group">
                        <a href="deletedesigner.php" class="btn btn-outline-primary">Tüm Öğrenciler</a>
                        
                    </div>
                </div>
            </div>
        </div>
    
    </header>
    <main>
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <table class="table table-hover table-dark table-striped">
                        <thead>
                            <tr>
                                <th>st_id</th>
                                <th>student_id</th>
                                <th>name</th>
                                <th>surname</th>
                                <th>sex</th>
                                <th>age</th>
                                <th>department</th>
                                <th>İşlem</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>

                                <td><?=$satir['st_id']?></td>
                                <td><?=$satir['student_id']?></td>
                                <td><?=$satir['st_name']?></td>
                                <td><?=$satir['st_surname']?></td>
                                <td><?=$satir['st_sex']?></td>  
                                <td><?=$satir['st_age']?></td>
                                <td><?=$satir['st_department']?></td>
                                <td>
                                    <div class="btn-group">
                                        
                                        <a href="?sil=<?=$satir['st_id']?>" onclick="return confirm('Silinsin mi?')" class="btn btn-danger">Kaldır</a>
                                        <a href="?update<?=$satir['st_id']?>" onclick="return confirm('Güncellensin mi?')" class="btn btn-danger">Güncelle</a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    </main>
    <footer></footer>
</body>
</html>
                        