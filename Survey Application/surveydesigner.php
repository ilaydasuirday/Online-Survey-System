<?php
include("baglanti.php");


if(isset($_POST["kaydet"]))
{
  $name=$_POST["txtName"];
  $surname=$_POST["txtSurname"];
  $age=$_POST["txtAge"];
  $sex=$_POST["txtSex"];
  $department=$_POST["txtDepartment"];
  $id=$_POST["txtID"];
  $psw=$_POST["psw"];
  
  
  
  $ekle = "INSERT INTO survey_designer (sd_id,sd_name,sd_surname,sd_age,sd_sex,sd_department,sd_password) VALUES ('$id','$name','$surname','$age','$sex','$department','$psw')";
  $calistirekle = mysqli_query($baglanti,$ekle);
  header("Location:SurveyDesignerMain.html");
}
  
  

  

  mysqli_close($baglanti);

 


?>