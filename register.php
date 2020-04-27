<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>
    
    <div>
    <div class="container">
        <div class="row">
        <div class="col-md-9 col-md-offset-2">
        <form  role="form" action="submit.php" method='post'>
       
        
        <legend class="text-center">Register Student</legend>
            <hr class="mb-3">
            <fieldset>
            <div class="row">
            <div class="form-group col-md-6">
            <label for="emer"><b>Emer</b></label>
            <input class="form-control  input-sm" type="text" id="emer" name="emer" required>
            </div>
            <div class="form-group col-md-6">
            <label for="mbiemer"><b>Mbiemer</b></label>
            <input class="form-control input-sm" type="text"  id="mbiemer" name="mbiemer" required>
            </div>
            </div>
            <div class="row">
            <div class="form-group col-md-6">
            <label for="username"><b>Username</b></label>
            <input class="form-control" type="text"  id="username" name="username" required>
            </div>
            <div class="form-group col-md-6">
            <label for="password"><b>Password</b></label>
            <input class="form-control" type="password"   id="password" name="password" required>
</div>
</div>
<div class="row">
<div class="form-group col-md-6">
            <label for="email"><b>Email</b></label>
            <input class="form-control" type="email"  id="email" name="email" required>
            </div>
            <div class="form-group col-md-6">
            <label for="telefon"><b>Telefon</b></label>
            <input class="form-control" type="text"  id="telefon" name="telefon" required>
</div>
</div>
<div class="row">
<div class="form-group col-md-12">
            <label for="datelindje"><b>Datelindje</b></label>
            <input class="form-control" type="date"  id="ditelindje" name="datelindje" required>
            <div class="row">
            </div>
            <div class="row">
            <div class="form-group col-md-6">
            <label for="viti"><b>Viti</b></label>
            <input class="form-control" type="text"  id="viti" name="viti" required>
            </div>
            <div class="form-group col-md-6">
            <label for="paraleli"><b>Paraleli</b></label>
            <input class="form-control" type="text"  id="paraleli" name="paraleli" required>
            </div>
            </div>
            <hr class="mb-3">
        <input class="btn btn-secondary btn-lg btn-block" type="submit" name="register" id="register" value="Register">
            </fieldset>
           

        </form>
        </div>
        </div>
  </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
$(function(){
    alert('hello');
});
//     $('#register').click(function(e){
//          var valid = this.form.checkValidity();
//          if(valid){
           


//         var emer = $('#emer').val();
//         var mbiemer = $('#mbiemer').val();
//         var username = $('#username').val();
       
//         var password = $('#password').val();
//         var email = $('#email').val();
//         var telefon = $('#telefon').val();
//         var datelindje = $('#datelindje').val();
//         var viti = $('#viti').val();
//         var paraleli = $('#paraleli').val();

//         e.preventDefault();

//                 $.ajax({
//                  type: 'POST',
//                  url: 'submit.php',
//                 data: {emer: emer, mbiemer: mbiemer, username: username, email: email, telefon: telefon, datelindje: datelindje, viti: viti, paraleli: paraleli},
//                     success: function(data){
//                     Swal.fire(
//                      'Successful!',
//                      'suc',
//                       'success')

//                 },
//                 error: function(data){
//                     Swal.fire(
//                      'Errors!',
//                       'There were errors  while saving the data!',
//                       'error'
//                     )
//                 }
//             });    

//     }
//     });
   
// });
</body>
</html>