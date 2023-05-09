<?php 
if(isset($_POST["submit"])){
    if($_POST["username"]=="swieta" && $_POST["password"]=="password"){
        header("Location:admin.php");
        exit;
    }else{
        $error=true;
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Admin</title>
</head>
<body>
   <form action="" method="post">
    <?php if(isset($error)):?>
       <p style="color:red">username salah</p> 
        <?php endif ?>
    <label for="username"> username: </label>
    <input type="text" name="username" id="username">
    <br>

    <label for="password"> password</label>
    <input type="password" name="password" id="password">
    <br>
    <button type="submit" name="submit">Login</button>
   </form>

</body>
</html>