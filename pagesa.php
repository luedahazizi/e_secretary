<?php
include("connection.php");
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: form.html');
    exit;
}
else {
    include('connection.php');
    $emerPrindi = $_SESSION['emer'];
    $mbiemerPrindi = $_SESSION['mbiemer'];
   $query= "SELECT nx.userID from user nx 
  INNER JOIN nxenes ON nxenes.NxenesID = nx.userID
  INNER JOIN user p ON p.userID = nxenes.PrindID
  WHERE p.Emer = '$emerPrindi' and p.Mbiemer ='$mbiemerPrindi'";
   $result=mysqli_query($connect,$query);
   $nr=mysqli_num_rows($result);
    echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Paypal Integration </title>
    <style>
        .txt-price{
            left:500px;
            position: relative;
            font-size: 30px;
        }
        body{

            background-image: url('https://visme.co/blog/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-045.jpg');
            background-repeat: no-repeat;
            background-size: 100%;
            height: 100%;
            max-height: 100vh;
            max-width: 100vh;
        }
        table{
            border-collapse: collapse;
            position:relative;
            left:400px;
            top:50px;
            border: solid;
            border-color: rgb(37, 87, 95);
            border-width: 2px;
            font-size: 25px;
            width: 400px;
        }
        th{
            font-size: 28px;
            border: solid;
            border-color: rgb(37, 87, 95);
        }
        tr{
            border: solid;
            border-color: rgb(37, 87, 95);


        }

        td{
            border: solid;
            border-color: rgb(37, 87, 95);
            alignment: center;
            font-size: 20px;
            text-align: center;
        }
        h4{
            color: rgb(37, 87, 95) ;
            font-size: 30px;
            position: relative;
            left:600px;
        }
    </style>
</head>
<body>
<div id='payment-box'>

    <h4 class='txt-title'>School fee</h4>
    <div class='txt-price'>Pay your child's school fee:$800</div>
    <form action='https://www.sandbox.paypal.com/cgi-bin/webscr' method='post'>
        <p>
            <input type='hidden' name='cmd' value='_cart'>
            <input type='hidden' name='upload' value='1'>
            <input type='hidden' name='business' value='sb-gczzm1830679@business.example.com'>
            <input type='hidden' name='currency_code' value='USD'>
            <input type='hidden' value='https://e2fa0686.ngrok.io/e_secretary/prind.php' name='return'>
            <input type='hidden' name='cancel_return' value='https://e2fa0686.ngrok.io/e_secretary/prind.php' />
            <input type='hidden' name='amount' value='800' />
            <input type='hidden' value='Test' name='cbt'>
            <input type='hidden' name='notify_url' value='https://e2fa0686.ngrok.io/e_secretary/notify.php' />

        </p>

        <table width='400' border='1'>
            <tr>
                <td> Product Name </td>
                <td> Price</td>
                <td>Quantity</td>
            </tr>

            <tr>

                <td><input type='text' name='item_name_1' value='School fee' > </td>
                <td><input type='text' name='amount_1' value='800'> </td>
                <td><input type='text' name='quantity_1' value='" ;echo $nr; echo"'> </td>
            </tr>

            <tr>
    <td></td>
                <td><input type='submit' name='submit' value='Checkout' > </td>
                <td></td>
            </tr>
        </table>
    </form>

</div>
</body>
</html>";
}