<?php
require_once "top_link.php";

$error="User";
$errorpass="Password";
?>
<form action="logincode.php"  method="post">
    <div class="login1" >
        <div class="login2">
            <h1>LOG IN</h1>
            <div>
                <input class="inputlogin" required type="text" name="user_name">
                <p ><?php echo"$error"?></p><br>
            </div>
            <div>
                <input class="inputlogin" required type="password" name="password">
                <p><?php echo"$errorpass"?></p><br>
            </div>
            <input class="inputok" type="submit"  value="ok">
            <a class="aclas" href="habar.php" >Habar Jo'mnatish</a>
        </div>
    </div>
</form>
<?php require_once 'button_link.php'?>

