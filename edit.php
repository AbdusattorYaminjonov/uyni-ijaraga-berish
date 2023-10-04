<?php
require_once 'top_link.php';
require_once 'database.php';
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $headline = $_POST['headline'];
    $type = $_POST['type'];
    $rooms = $_POST['rooms'];
    $floor = $_POST['floors'];
    $status = $_POST['status'];
    $human = $_POST['human'];
    $price = $_POST['price'];
    $adress_id = $_POST['adress_id'];
    $fulladress = $_POST['fulladress'];
    $phonenumber = $_POST['phonenumber'];
    $upload = '/filess/';
    print_r($_FILES);
    $uploadfile = __DIR__ . $upload . basename($_FILES['photo']['name']);
    $uploadfilebazaga = $upload . basename($_FILES['photo']['name']);
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)){
    } else {
        echo "File yuklanmadi!!!\n";
    }
    print_r($_FILES);

    $result = mysqli_query($link, "UPDATE uy SET headline='$headline',type_id=$type,rooms=$rooms,floors=$floor,
              status='$status',human='$human',price=$price,adress_id=$adress_id,fulladress='$fulladress',
              photo='$uploadfilebazaga',phonenumber='$phonenumber' WHERE id=$id");
    header("location: about.php?id=$id");
}
?>
<?php
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $result = mysqli_query($link, "SELECT * FROM uy WHERE id=$id");

    while ($request = mysqli_fetch_array($result)) {
        $headline = $request['headline'];
        $type_id = $request['type_id'];
        $rooms = $request['rooms'];
        $floor = $request['floors'];
        $status = $request['status'];
        $human = $request['human'];
        $price = $request['price'];
        $adress_id = $request['adress_id'];
        $fulladress = $request['fulladress'];
        $uploadfilebazaga = $request['photo'];
        $phonenumber = $request['phonenumber'];
    }
}
?>
<?php
$gt_id=$_GET['id'];
?>
<a href="uylar.php" style="margin: 30px ; font-size: 30px">Ortga</a>
<div class="container_addpost">
    <form method="post" action="edit.php" enctype="multipart/form-data">
        <div class="uy">
            <?php
            echo"
            <div class='uy_div'>
                <label class='choosephoto ' onclick='click' >
                    <img class='hajmi' src='./assets/image/camera_icon.ico'>
                    <input  type='file' value='$uploadfilebazaga' name='photo' accept='image/*'>
                    Rasm qo'shish
                </label>
                <div class='f_3' >
                    <p>Uy nomi</p>
                    <input class='inputlogin' type='text' name='headline' value='$headline'>
                </div>
                <div class='flex1'>
                    <div class='f_1'>
                        <p>Uy turi</p>
                        <select name='type'>
                              <option value='$type_id' >$type_id</option>
                              <option value='1'>Hovli</option>
                              <option value='2'>Dacha</option>
                              <option value='3'>Dom/Kvartira</option>
                              <option value='4'>Kotedj</option>
                        </select><br>
                    </div>
                    <div class='f_1' >
                        <p>Uy holati</p>
                        <select name='status'>
                              <option value='$status'>$status</option>
                              <option value='Hi-tech'>Hi-tech</option>
                              <option value='Klassik'>Klassik</option>
                              <option value='Oddiy'>Oddiy</option>
                        </select><br>
                    </div>
                </div>
                <div class='f_3'>
                <p>Honalar</p>
                <input type='number' value='$rooms' name='rooms'>
                </div>
                <div class='f_2'>
                    <p>Telefon raqami</p>
                    <input type='number' value='$phonenumber' name='phonenumber' >
                </div>
            </div> 
            <div class='uy_div1'>
                
                 <div class='flex1'>
                    <div class='f_4'>
                        <p>Qavati</p>
                        <input type='number' value='$floor' name='floors'>
                    </div>
                    <div class='f_1'>
                        <p>Odamlar soni</p>
                        <select name='human'>
                              <option >$human</option>
                              <option value='1-5'>1-5</option>
                              <option value='5-10'>5-10</option>
                              <option value='10-15'>10-15</option>
                              <option value='15-20'>15-20</option>
                        </select><br>
                    </div>
                    <div class='f_1' >
                        <p>Manzil</p>
                        <select name='adress_id'>
                              <option >$adress_id</option>
                              <option value='1'>Toshkent sh</option>
                              <option value='2'>Toshkent v</option>
                              <option value='3'>AndiJon v</option>
                              <option value='4'>Namangan v</option>
                              <option value='5'>Farg'ona v</option>
                              <option value='6'>Jizzax v</option>
                              <option value='7'>Samarqand v</option>
                              <option value='8'>Qashqadaryo v</option>
                              <option value='13'>Sirdaryo v</option>
                              <option value='14'>Surxondaryo v</option>
                              <option value='9'>Buxoro v</option>
                              <option value='10'>Navoiy v</option>
                              <option value='11'>Xorazim v</option>
                              <option value='12'>Qoraqalpog'iston R</option>
                        </select><br>
                    </div>
                </div>
                <div class='fulladress_input' >
                    <textarea  rows='3' value='$fulladress' name='fulladress'></textarea>
                </div>
                <div class='add_submit'>
                    <div class='f_2'>
                        <p>Oylik narxi</p>
                        <input type='number' value='$price' name='price'>
                    </div>
                    <input class='p-2 rounded' type='hidden' name='id' value='$gt_id'>
                    <button type='submit' name='submit' >Edit</button>
                </div>
            </div>
            ";
            ?>
        </div>
    </form>
</div>
<?php require_once 'button_link.php'?>

