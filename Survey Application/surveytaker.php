<?php
include("baglanti.php");


if(isset($_POST["kaydet"]))
{
  $studentid=$_POST["txtStudentid"];
  $name=$_POST["txtName"];
  $surname=$_POST["txtSurname"];
  $age=$_POST["txtAge"];
  $sex=$_POST["txtSex"];
  $department=$_POST["txtDepartment"];
  $id=$_POST["txtID"];
  $pass=$_POST["psw"];
  
  
  $ekle = "INSERT INTO survey_taker (st_id,student_id,st_name,st_surname,st_age,st_sex,st_department,st_password) VALUES ('$id','$studentid','$name','$surname','$age','$sex','$department','$psw')";
  $calistirekle = mysqli_query($baglanti,$ekle);
  header("Location:SurveyTakerMain.html");
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


