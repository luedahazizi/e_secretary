<?php
require_once ('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notify</title>
    <link rel="stylesheet" href="subject.css">
   
       
</head>
<body>
<?php
    include "notify.php";
    ?>
<div class="section">

    <div class="notify">
        <?php
        
        if(isset($_POST['titull']) && isset($_POST['content']) && isset($_FILES['attachments']['name']) && isset($_POST['lloji']) &&  isset($_POST['publish'])){
            $titull=$_POST['titull'];
            $content=$_POST['content'];
            $attachments= rand(1000,10000)."-" .$_FILES['attachments']['name'];
            $tname= $_FILES['attachments']['tmp_name'];
            $uploads_dir= 'uploads';
            move_uploaded_file($tname,$uploads_dir.'/'.$attachments);
            $lloji=$_POST['lloji'];
            $id = 'SELECT  userID 
            FROM user INNER JOIN publikime ON userID=publikuesID
            WHERE RolID=2';
             $resultf = mysqli_query($conn, $id);
             $row = mysqli_fetch_array($resultf);

            $notify="insert into publikime (data,titull,permbajtja,attachments,publikuesid,lloji) values (curdate(),'$titull','$content','$attachments', '$row[userID]','$lloji')";
            if($conn ->query($notify)){
              
                echo "<div class='success'>Insert success</div>";
            }
           else {
               echo("Error description: " . mysqli_error($conn));
            }
        }
        ?>
        <form enctype="multipart/form-data" action="notify.php" method="post">
       
            <label >Title</label><br>
            <input type="text" class="input"  name="titull" id="titull" required><br>
            <label >Content</label><br>
            <?php

include "textarea12.html";
?>
            <label >Attachments</label><br>
            <input type="file" class="input" name="attachments" id="attachments"><br>
            <label>Category</label><br>
            <input  class="input" name="lloji" list="lloji"  >
            <datalist id="lloji">
    <option value="Events">
    <option value="Payement">
    <option value="News">
  </datalist>
  <button type="submit" name="publish" class="btn_publish">Publish</button>
        </form>
    </div>
</div>
    
</body>
</html>