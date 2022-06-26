<?php
include("baglanti.php");


if(isset($_POST["kaydet"]))
{
  $name=$_POST["txtName"];
  $year=$_POST["txtyear"];
  $Status=$_POST["txtstatus"];
 
  

  
  $ekle = "INSERT INTO survey (title,survey_year,survey_status) VALUES ('$name','$year','$Status')";
  
  $calistirekle = mysqli_query($baglanti,$ekle);

  if($calistirekle){
    echo '<div class="alert alert-primary" role="alert">
    KAYIT BAŞARILI BİR ŞEKİLDE EKLENDİ
  </div>';
  }
  else{
    echo '<div class="alert alert-danger" role="alert">
    KAYIT EKLEME BAŞARISIZ
    </div>';
  }
  mysqli_close($baglanti);

 
  
}


?>


