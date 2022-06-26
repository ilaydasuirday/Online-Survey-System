<?php
 

 $dsn = 'mysql:dbname=survey;host=127.0.0.1';
 $user = 'root';
 $password = '';
  
 try {
     $baglan = new PDO($dsn, $user, $password);
 } catch (PDOException $e) {
     echo 'Bağlantı kurulamadı: ' . $e->getMessage();
 }
 
if(isset($_POST['guncelle'])){
 
        $sql ="UPDATE `survey_taker` SET `st_id` = '?', `student_id` = '?', `st_name` = '?', `st_surname` = '?', `st_age` = '?' WHERE `survey_taker`.`st_id` = ?";
        $dizi=[
            $_POST['st_id'],
            $_POST['student_id'],
            $_POST['st_name'],
            $_POST['st_surname'],   
            $_POST['st_age']];
            
            $sorgu = $baglan->prepare($sql);
            $sorgu->execute($dizi);
    
            header("Location:SurveyDesignerMain.html");

            }
            $sql ="SELECT * FROM survey_taker WHERE st_id = ?";
            $sorgu = $baglan->prepare($sql);
            
            $satir = $sorgu->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasarım Kodlama</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-1 text-center">Tasarım Kodlama</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="btn-group">
                        <a href="update.php" class="btn btn-outline-primary">Tüm Öğrenciler</a>
                        <a href="surveydesigner.php" class="btn btn-outline-primary">Öğrenci Ekle</a>
                    </div>
                </div>
            </div>
        </div>
    
    </header>
    <main>
    <div class="container">
        <form action="update.php" method="POST" class="row mt-4 g-3">
        <div class="col-6">
                <label  class="form-label">St id</label>
                <input type="number" class="form-control" name="st_id" value="<?=$satir['st_id']?>">
            </div>
        <div class="col-6">
                <label  class="form-label">Student id</label>
                <input type="text" class="form-control" name="student_id" value="<?=$satir['student_id']?>">
            </div>
           
            <div class="col-6">
                <label  class="form-label">Adınız</label>
                <input type="text" class="form-control" name="st_name" value="<?=$satir['st_name']?>">
            </div>
            <div class="col-6">
                <label  class="form-label">Soyadınız</label>
                <input type="text" class="form-control" name="st_surname" value="<?=$satir['st_surname']?>">
            </div>
            <div class="col-6">
                <label  class="form-label">yaş</label>
                <input type="number" class="form-control" name="st_age" value="<?=$satir['st_age']?>">
            </div>
            <div class="col-6">
                
           
            <button type="submit" name="guncelle" class="btn btn-primary">Güncelle</button>
        </form>
    </div>
    </main>
    <footer></footer>
</body>
</html>