<?php
include("baglanti.php");


if(isset($_POST["kaydet"]))
{
  $survey_id=$_POST["txtSurveyid"];  
  $name=$_POST["title"];
  $year=$_POST["survey_year"];
  $Status=$_POST["surveystatus"];
 
  

  
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
<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="MainCSS.css">
        <style>
        a {
            text-decoration: none;
            display: inline-block;
            padding: 8px 16px;
            
        }
          
        a:hover {
            background-color: #ddd;
            color: black;
        }
          
        .previous {
            background-color: #f1f1f1;
            color: black;
        }
          
        .next {
            background-color: #04AA6D;
            color: white;
        }
          
        .round {
            border-radius: 50%;
        }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
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
        <h2>Survey</h2>
      </nav>

      <main>
        
      
      <div class="row">
            <div id="menu"  class = "col-sm-3">
                <ul>
                 <li><a href="SurveyDesignerMain.html">Home</a></li>
                </ul>
            </div>
        
      
        <div class = "col-sm-8">
            <fieldset>
                
                <form name="frmContact" action="surveyy.php" method="POST">
              
                    <p>
                        <label for="s_id">Please enter your survey id</label>
                        <input type="number" name="txtSurveyid" id="survey_id">
                        </p>
              
                    <p>
                        <label for="title">Please enter title</label>
                        <input type="text" name="title" id="title">
                        </p>
              
                    <p>
                        <label for="questiontext">Please enter create date</label>
                        <input type="date" name="survey_year" id="survey_year">

                        </p>
                        <p>
                        <label for="questiontext">Please enter survey status</label>
                        <input type="number" name="surveystatus" id="survey_year">
                        </p>    
              
                    
                   
                    <p>&nbsp;</p>
              
                    <p>
                        <input type="submit" name="kaydet" id="Submit"  value="Submit" onclick="questions.html">Tıkla ve Git>
                    </p>
                    </form>    
                    

                    
                   

              </fieldset>

                    
      </div>
      <div class="col-sm-1">
      <a href="question.html" class="next">Next &raquo;</a>
      </div>
    </div>   
  </main> 
 </div>
    </body>
</html>

<?php
include("baglanti.php");


if(isset($_POST["kaydet"]))
{
  $questionid=$_POST["question_id"];
  $survey_id=$_POST["txtSurveyid"];
  $name=$_POST["txtName"];
  $choice=$_POST["numChoice"];

  
  $ekle = "INSERT INTO questions (question_id,survey_id,question_text,choice_num) VALUES ('$questionid','$survey_id',$name',$choice)";
  
  
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
     
     <div class="container-fluid -sm border">
       <header>
        
        <h1 class="page-header">Online Survey System</h1>
      </header> 
        
        <nav>
        <h2>Questions</h2>
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


<?php

include("baglanti.php");


if(isset($_POST["kaydet"]))
{
  $choicenum=$_POST["choice_num"];
  $stid=$_POST["st_id"];
  $qid=$_POST["question_id"];
   $surveyid=$_POST["survey_id"];
  
  
  $ekle2 = "INSERT INTO answers (choice_num,st_id,question_id,survey_id) VALUES ('$choicenum','$stid','$qid','$surveyid')";
  $calistirekle = mysqli_query($baglanti,$ekle2);

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


<!doctype html>
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
      
     <div class="container-fluid -sm border">
       <header>
        
        <h1 class="page-header">Online Survey System</h1>
      </header> 
        
        <nav>
        <h2>Answers</h2>
      </nav>

      <main>
      
            <form action="answers.php" method="POST">
            <div class="form-group">
                <label for="exampleInputPassword1">choice num</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="choice_num">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">st id</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="st_id">
                
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">q id</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="question_id">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">survey id</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="survey_id">
             
              
              
              <button type="submit" class="btn btn-primary" name="kaydet" onClick="parent.location='SurveyDesignerMain.html'">Submit</button>
              
        </form>   
      </div>
    </div>   
  </main> 
 </div>
    </body>
</html>


