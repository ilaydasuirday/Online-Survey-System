<?php
include("baglanti.php");


if(isset($_POST["kaydet"]))
{
  $questionid=$_POST["question_id"];
  $survey_id=$_POST["txtSurveyid"];
  $name=$_POST["txtName"];
  $choice=$_POST["numChoice"];

  
  $ekle = "INSERT INTO `questions` (`question_id`, `survey_id`, `question_text`, `choice_num`) VALUES ('$questionid', '$survey_id', '$name', '$choice')";
  
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


?><!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="MainCSS.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     </head>
        
    
    <body>
      <footer>
        <small>Author: Ilayda Su Irday - Bahar Gorgun</small>
        <small>&copy; Copyright {2022}, ESTU Corporation</small>
     </footer>
     <div class="container-fluid -sm border">
       <header>
        
        <h1 class="page-header">Online Survey System</h1>
      </header> 
        
        <nav>
        <h2>Survey Designer Sign Up</h2>
      </nav>

      <main>
        
  
            <form action="question.php" method="POST">
                <div class="form-group">
                <label for="exampleInputEmail1">Enter question id</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="question_id">  
            
          </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Enter survey_id</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="txtSurveyid">  
            
          </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Enter question you want to add to the survey</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="txtName">

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter number of choice you want to add to the question</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="numChoice">  
                
              </div>
              
              
              <button type="submit" class="btn btn-primary" name="kaydet">Submit</button>
        </form>
                        
               
                
          
      </div>
    </div>   
  </main> 
 </div>
    </body>
</html>
