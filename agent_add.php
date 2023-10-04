<?php
require_once 'database.php';
require_once 'top_link.php';
require_once 'navbar_agent.php';
?>

<div class="agent">
    <?php if (empty($_POST)): ?>
    <form method='post' >
        <div class='registorDiv'>
            <div class='login2'>
                <?php
                echo "
                <div>
                   <p>Rasim qo'shosh</p>
                   <label class='choosephoto' onclick='click' >
                      <img class='hajmi' src='./assets/image/camera_icon.ico'>
                      <input  type='file' name='photo' accept='image/*'>
                   </label>
                </div>
              
                
                <div>
                    <p>To'liq ism</p>
                    <input class='inputlogin' type='text' name='full_name'>
                </div>
                
                <div>
                    <p>User name</p>
                    <input class='inputlogin' type='text' name='user_name' >
                </div>
                
                <div>
                    <p>Tel nomer(991234567)</p>
                    <input class='inputlogin' type='tel' name='phone'>
                </div>
                
                <div>
                    <p>Parol kiriting</p>
                    <input class='inputlogin' type='password' name='password' >
                </div>
                
                <div>
                    <p>Parolni tasdiqlang</p>
                    <input class='inputlogin' type='password'  >
                </div>";

                ?>

                <input class="inputQoshish" type="submit" value="Qo'shish" name="submit"><br><br>

            </div>
        </div>
    </form>
</div>
<?php
 endif;
              if (isset($_POST['submit'])) {
                  $full_name=$_POST['full_name'];
                  $user_name=$_POST['user_name'];
                  $password=$_POST['password'];
                  $phone=$_POST['phone'];
                  $upload='/usersimg/';
                  $uploadfile=__DIR__.$upload .basename($_FILES['photo']['name']);
                  $uploadfilebazaga=$upload .basename($_FILES['photo']['name']);
                  if(move_uploaded_file($_FILES['photo']['tmp_name'],$uploadfile)){
                  }else{
                      header("location: error.php");
                  }
                  //print_r($_FILES);
                  $query = "INSERT INTO agent(photo,full_name,user_name,password,phone)
                  VALUES ('$uploadfilebazaga','$full_name','$user_name','$password','$phone')";
                   echo $query;

                  $result = $link->query($query);
                  header("location: index.php");
              }
        ?>



<?php require_once 'button_link.php'?>
