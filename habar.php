<?php
require_once 'database.php';
require_once 'top_link.php';

?>

<form method="post">

    <div class="habr_container">
        <div class="habar_input">
            <p>@Gimail kiriting :</p>
            <input type="email" name="gmail">
        </div>
        <div >
            <p>Habaringiz :</p>
            <textarea name="message"></textarea>
        </div>
        <label class="submit">
            <img src="assets/image/sent.ico">
            <input type="submit" name="submit" >
        </label>

    </div>

</form>
<?php
if (isset($_POST['submit'])){
    $gmail=$_POST['gmail'];
    $message=$_POST['message'];
    $query = "INSERT INTO message(gmail,message)VALUES ('$gmail','$message')";
    $result = $link->query($query);
    header("location: index.php");
}


?>


<?php require_once 'button_link.php'?>
