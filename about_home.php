
<?php
require_once 'top_link.php';
require_once 'database.php';
require_once 'navbar.php';
?>

<?php
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $result = mysqli_query($link, "SELECT * FROM uy WHERE id=$id");
    echo "<div class='search_bolim'>";
    while ($request = mysqli_fetch_array($result)) {
        echo "
       
       <div class='p_r'>
    <div class='p_img'>
        <img src='{$request['photo']}'>
    </div>
    <div class='p_s'>
        <h4>{$request['headline']}</h4>
        <h5 >oyiga : {$request['price']} $</h5>
        <h6 style='color: #0a53be'>{$request['type_id']}</h6>
        <div class='p_css'>
            <p>Hona soni:</p>
            <h6 >{$request['rooms']}</h6>
        </div>
        <div class='p_css'>
            <p>Etajlar soni :</p>
            <h5>{$request['floors']}</h5>
        </div>
         <div class='p_css'>
            <p>Holati :</p>
            <h5>{$request['status']}</h5>
        </div>
         <div class='p_css'>
            <p>Odam soni:</p>
            <h5>{$request['human']}</h5>
        </div>
         <div class='p_css'>
            <p>Adress :</p>
            <h5>{$request['adress_id']}</h5>
        </div>
         <div class='p_css'>
            <p>Qo'shimcha ma'lumot :</p>
            <h5>{$request['fulladress']}</h5>
        </div>
         <div class='p_css'>
            <p>Tel raqami :</p>
            <h5>+998{$request['phonenumber']}</h5>
        </div>
        <div class='contact'>
            <div>
            <a href='index.php'>
                <img src='assets/image/phone_icon.ico'>
            </a>
            </div>
            <div>
            <a href='index.php'>
                <img src='assets/image/icons8_chat_message.ico'>
            </a>
            </div>
        </div>
    </div>
</div>
       
       
       
       ";
    }

    echo "</div>";
}
?>

<?php require_once 'button_link.php'?>
