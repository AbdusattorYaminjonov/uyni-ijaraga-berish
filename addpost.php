<?php
require_once "top_link.php";
require_once 'database.php';
require_once "navbar_agent.php";
?>

<div class="container_addpost">
    <?php if (empty($_POST)): ?>
    <form method="post" enctype="multipart/form-data">
        <div class="uy">
            <?php
            echo"
            <div class='uy_div'>
                <label class='choosephoto ' onclick='click' >
                    <img class='hajmi' src='./assets/image/camera_icon.ico'>
                    <input  type='file' name='photo' accept='image/*'>
                    Rasm qo'shish
                </label>
                <div class='f_3' >
                    <p>Uy nomi</p>
                    <input class='inputlogin' type='text' name='headline' placeholder='Hashamdor uy'>
                </div>
                <div class='flex1'>
                    <div class='f_1'>
                        <p>Uy turi</p>
                        <select name='type'>
                              <option value='1'>Hovli</option>
                              <option value='2'>Dacha</option>
                              <option value='3'>Dom/Kvartira</option>
                              <option value='4'>Kotedj</option>
                        </select><br>
                    </div>
                    <div class='f_1' >
                        <p>Uy holati</p>
                        <select name='status'>
                              <option value='Hi-tech'>Hi-tech</option>
                              <option value='Klassik'>Klassik</option>
                              <option value='Oddiy'>Oddiy</option>
                        </select><br>
                    </div>
                </div>
                <div class='f_3'>
                <p>Honalar</p>
                <input type='number' name='rooms'>
                </div>
                <div class='f_2'>
                    <p>Telefon raqami</p>
                    <input type='number' placeholder='90-123-45-67' name='phonenumber' >
                </div>
            </div> 
            <div class='uy_div1'>
                
                 <div class='flex1'>
                    <div class='f_4'>
                        <p>Qavati</p>
                        <input type='number' name='floors'>
                    </div>
                    <div class='f_1'>
                        <p>Odamlar soni</p>
                        <select name='human'>
                              <option value='1-5'>1-5</option>
                              <option value='5-10'>5-10</option>
                              <option value='10-15'>10-15</option>
                              <option value='15-20'>15-20</option>
                        </select><br>
                    </div>
                    <div class='f_1' >
                        <p>Manzil</p>
                        <select name='adress_id'>
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
                    <textarea  rows='3' name='fulladress'></textarea>
                </div>
                <div class='add_submit'>
                    <div class='f_2'>
                        <p>Oylik narxi</p>
                        <input type='number' name='price'>
                    </div>
                    <button type='submit' name='submit' >click</button>
                </div>
            </div>
            ";
            ?>
        </div>
    </form>
    <?php

              endif;
              if (isset($_POST['submit'])) {
                  $headline = $_POST['headline'];
                  $type = $_POST['type'];
                  $rooms = $_POST['rooms'];
                  $floors = $_POST['floors'];
                  $status = $_POST['status'];
                  $human = $_POST['human'];
                  $price = $_POST['price'];
                  $adress_id = $_POST['adress_id'];
                  $fulladress = $_POST['fulladress'];
                  $phonenumber = $_POST['phonenumber'];
                  $upload='/filess/';
                  $uploadfile=__DIR__.$upload .basename($_FILES['photo']['name']);
                  $uploadfilebazaga=$upload .basename($_FILES['photo']['name']);
                  if(move_uploaded_file($_FILES['photo']['tmp_name'],$uploadfile)){

                  }else{
                      header("location: error.php");
                  }
                  //print_r($_FILES);
                  $query = "INSERT INTO uy(photo,headline,type_id,rooms,floors,status,human,price,adress_id,fulladress,phonenumber)
                  VALUES ('$uploadfilebazaga','$headline','$type',$rooms,$floors,'$status',
                          '$human',$price,$adress_id,'$fulladress','$phonenumber')";
                    //echo $query;

                  $result = $link->query($query);
                  header("location: uylar.php");
              }
        ?>

</div>

<?php require_once "button_link.php"?>