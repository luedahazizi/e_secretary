<?php
require_once('config.php'); 
include('editteacher.php');
include('access.php');
if (isset($_GET['edit'])) {
    
    
    $userID = $_GET['edit'];
    
    $edit_state = true;
    $rec = mysqli_query($conn, "select * FROM  user u join mesues m on u.userID=m.mesuesID where u.userID=$userID");
    $record = mysqli_fetch_array($rec);
    
    $id = $record['userID'];
    $emri = $record['Emer'];
    $mbiemer = $record['Mbiemer'];
    $username = $record['Username'];
    $email = $record['Email'];
    $telefon = $record['Telefon'];
    $datelindje = $record['Datelindje'];
   

    echo("Error description: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
   
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
function get_username()
{
 var name=$("#emer").val();
 if(name!="")
 {
  $.ajax
  ({
   type:'post',
   url:'submitteacher.php',
   data:{
    get_username:name
   },
   success:function(response) 
   {
    $("#username").css({"display":"block"});
    $("#username").html("UserName : "+response);
    $("#username_val").val(response);
   }
  });
 }
}
</script>
</head>
<body>

  
    
    <div>
    <div class="container">
        
        <div class="row">
        <div class="col-md-9 col-md-offset-2">
        <form  role="form" action="teacherlist.php" method='post'>
       
        <a href="teacherlist.php" class="btn btn-secondary btn-lg active ml-auto" role="button" aria-pressed="true">Back to list</a>
        <legend class="text-center">Register Teacher</legend>
            <hr class="mb-3">
            <fieldset>
            <div class="row">
            <div class="form-group col-md-6">
            <input type="hidden" name="userID" value="<?php echo $id; ?>">
            <label for="emer"><b>Name</b></label>
            <input class="form-control  input-sm" type="text" id="emer" name="emer" value="<?php echo $emri; ?>" required>
            </div>
            <div class="form-group col-md-6">
            <label for="mbiemer"><b>Last Name</b></label>
            <input class="form-control input-sm" type="text"  id="mbiemer" name="mbiemer" value="<?php echo $mbiemer; ?>" required>
            </div>
            </div>
            <div class="row">
            <div class="form-group col-md-6">
            <label for="username"><b>Username</b></label>
            <input class="form-control" type="text"  id="username_val" name="username_val" onblur="get_username();" value="<?php echo $username; ?>" required>
            </div>
            <div class="form-group col-md-6">
            <label for="telefon"><b>Phone number</b></label>
            <input class="form-control" type="text"  id="telefon" name="telefon" value="<?php echo $telefon; ?>" required>
</div>
</div>
<div class="row">
<div class="form-group col-md-12">
            <label for="email"><b>Email</b></label>
            <input class="form-control" type="email"  id="email" name="email" value="<?php echo $email; ?>" required>
            </div>
            
            
</div>
<div class="row">
<div class="form-group col-md-12">
            <label for="datelindje"><b>Birthday Date</b></label>
            <input class="form-control" type="date"  id="datelindje" name="datelindje" value="<?php echo $datelindje ?>" required>
            <div class="row">
            </div>
            <div class="row">
            <div class="form-group col-md-10">
            <label for="foto"><b>Photo</b></label>
            <input class="form-control"  type="file" id="foto" name="foto"
       accept="image/png, image/jpeg">
            </div>
            
            <hr class="mb-3">
            <?php if ($edit_state == false): ?>
        <input class="btn btn-secondary btn-lg btn-block" type="submit" name="register" id="register" value="Register">
        <?php else : ?>
                <button type="submit" name="update" class="btn btn-secondary btn-lg btn-block">Update</button>
            <?php endif ?>
            </fieldset>
           

        </form>
        </div>
        </div>
  </div>
    </div>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script type="text/javascript">
$(function(){
   $('#register').click(function(e){
       var valid = this.form.checkValidity();
       if(valid){
           var emer = $('#emer').val();
           var mbiemer = $('#mbiemer').val();
           var username_val = $('#username_val').val();
           var telefon = $('#telefon').val();
           var email = $('#email').val();
           var lenda = $('#lenda').val();
           var datelindje = $('#datelindje').val();
           var foto = $('#foto').val();

           e.preventDefault();
           $.ajax({
               type: 'POST',
               url:'submitteacher.php',
               data:{emer: emer,mbiemer: mbiemer,username_val: username_val,telefon: telefon,email:email,lenda:lenda,datelindje:datelindje ,foto:foto},
  success: function(data){
    Swal.fire(
        'e-secretary',
                      data,
                      )
   

  },
  error: function(data){
    Swal.fire({
        icon: 'error',
  title: 'Oops...',
  text: 'Something went wrong!'
    }
        )
   
  }
  });
       }
   
    });

});
</script>
</body>
</html>