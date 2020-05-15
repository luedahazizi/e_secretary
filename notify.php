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
<div class="section">
<?php

include "homepage.php";
?>
    <div class="notify">
        <?php
        if(isset($_POST['titull']) && isset($_POST['content']) && isset($_POST['attachments']) && isset($_POST['lloji']) &&  isset($_POST['publish'])){
            $titull=$_POST['titull'];
            $content=$_POST['content'];
            $attachments=$_POST['attachments'];
            $lloji=$_POST['lloji'];
            $id = "select  userID 
    from user 
    where RolID=1";
    

            $notify="insert into publikime (data,titull,permbajtja,attachments,publikuesid,lloji) values (curdate(),'$titull','$content','$attachments','$id','$lloji')";
            if($conn ->query($notify)){
                echo "<div class='success'>Insert success</div>";
            }
           else {
               echo("Error description: " . mysqli_error($conn));
            }
        }
        ?>
        <form action="notify.php" method="post">
            <label >Title</label><br>
            <input type="text" class="input"  name="titull" id="titull" required><br>
            <label >Content</label><br>
            <?php

include "textarea.html";
?>
            <label >Attachments</label><br>
            <input type="text" class="input" name="attachments" id="attachments" required><br>
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