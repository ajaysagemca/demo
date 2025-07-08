<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login here</title>
</head>
<body>
    <form methode="post">
    Enter email here:<input type="text" name="em"><br>
    Enter password here:<input type="text" name="ps"><br>
    <input type="Login" name="Lg">
    </form>
    <?php
    $con=mysqli_connect('localhost','root','','finalproject');
    if(isset($_post['Lg']))
    {
    $email =$_post['em'];
    $password =$_post['ps'];
    $query="inser into project(Enter email here,Enter password here) values ('$email','$password')";
    $run=mysqli_query($con,$query);
    }
    ?>
</body>
</html>