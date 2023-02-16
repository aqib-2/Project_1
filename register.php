<?php
$name=$_POST['fname'];
$mail=$_POST['email'];
$pass=$_POST['pass'];
$con=@mysqli_connect('localhost','root','','snitch');

$query="insert into users values('$name','$mail','$pass')";
$result=mysqli_query($con,$query);


?>
<html>
    <head>
        <style>
            body{
                text-align: center;
            }
            p{
                font-style: italic;
                font-size: 30px;
            }
            .under{
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <?php
        if($result==1) {
        ?>
        <h2>Your Registered Email is </h2><p><?php echo $mail ?></p>
        <h2 class="under">Remember your Password for future use</h2>
        <?php } ?>
    </body>
</html>