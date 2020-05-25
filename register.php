<?php
require_once('config.php');
include('editstudent.php');
include('access.php');
if (isset($_GET['edit'])) {
    
    
    $userID = $_GET['edit'];
    
    $edit_state = true;
    $rec = mysqli_query($conn, "select * FROM  user u join nxenes n on u.userID=n.nxenesID where u.userID=$userID");
    $record = mysqli_fetch_array($rec);
    
    $id = $record['userID'];
    $emri = $record['Emer'];
    $mbiemer = $record['Mbiemer'];
    $username = $record['Username'];
    $email = $record['Email'];
    $telefon = $record['Telefon'];
    $datelindje = $record['Datelindje'];
    $viti = $record['Viti'];
    $paraleli = $record['Paraleli'];
    $lendaID = $record['userID'];
   

   
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
<link href="studentlist.php">
<script type="text/javascript">

function get_username()
{
 var name=$("#emer").val();
 if(name!="")
 {
  $.ajax
  ({
   type:'post',
   url:'submit.php',
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
<style>
    
</style>
</head>
<body>

    <div>
    <div class="container">
        <div class="row">
        <div class="col-md-9 col-md-offset-2  m-auto">
        <form  role="form" action="studentlist.php" method='post'>
       
        <a href="studentlist.php" class="btn btn-secondary btn-lg active ml-auto" role="button" aria-pressed="true">Back to list</a>
        <legend class="text-center">Register Student</legend>
            <hr class="mb-3">
            <fieldset>
            <div class="row">
            <div class="form-group col-md-6 ">
            <input type="hidden" name="userID" value="<?php echo $id; ?>">
            <label for="emer"><b>Name</b></label>
            <input class="form-control  input-sm" type="text" id="emer" name="emer" value="<?php echo $emri; ?>" required>
            </div>
            <div class="form-group col-md-6">
            <label for="mbiemer"><b>Last Name</b></label>
            <input class="form-control input-sm" type="text"  id="mbiemer" name="mbiemer"  value="<?php echo $mbiemer; ?>"required>
            </div>
            </div>
            <div class="row">
            <div class="form-group col-md-6">
            <label for="username"><b>Username</b></label>
            <input class="form-control" type="text"  id="username_val" name="username_val" onblur="get_username();" value="<?php echo $username; ?>" required>
            </div>
            <div class="form-group col-md-6">
            <label for="telefon"><b>Phone Number</b></label>
            <input class="form-control" type="text"  id="telefon" name="telefon" value="<?php echo $telefon; ?>" required>
</div>
</div>
<div class="row">
<div class="form-group col-md-6">
            <label for="email"><b>Email</b></label>
            <input class="form-control" type="email"  id="email" name="email"value="<?php echo $email; ?>" required>
            </div>
            <div class="form-group col-md-2">
            <label for="prindi"><b>Parent Name</b></label>
            <input class="form-control" type="text"  id="prind" name="prind"  required>
            </div>
            <div class="form-group col-md-2">
            <label for="prindi"><b>Last Name</b></label>
            <input class="form-control" type="text"  id="prind1" name="prind1"  required>
            </div>
</div>
<div class="row">
<div class="form-group col-md-12">
            <label for="datelindje"><b>Birthday day</b></label>
            <input class="form-control" type="date"  id="datelindje" name="datelindje" value="<?php echo $datelindje; ?>" required>
            <div class="row">
            </div>
            <div class="row">
            <div class="form-group col-md-6">
            <label for="viti"><b>Year</b></label>
            <input class="form-control" type="text"  id="viti" name="viti" value="<?php echo $viti; ?>" required>
            </div>
            <div class="form-group col-md-6">
            <label for="paraleli"><b>Group</b></label>
            <input class="form-control" type="text"  id="paraleli" name="paraleli"  value="<?php echo $paraleli; ?>" required>
            </div>
            </div>
            <hr class="mb-3">
            <?php if ($edit_state == false): ?>
        <input class="btn btn-secondary btn-lg btn-block" type="submit" name="register" id="register" value="Register"  >
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
           var prind = $('#prind').val();
           var prind1 = $('#prind1').val();
           var datelindje = $('#datelindje').val();
           var viti = $('#viti').val();
           var paraleli = $('#paraleli').val();
           e.preventDefault();
           $.ajax({
               type: 'POST',
               url:'submit.php',
               data:{emer: emer,mbiemer: mbiemer,username_val: username_val,telefon: telefon,email:email,prind:prind,prind1:prind1,datelindje:datelindje,paraleli: paraleli,viti:viti},
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
