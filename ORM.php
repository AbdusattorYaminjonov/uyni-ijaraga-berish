<?php
require_once 'database.php';
class Controller{
    public static function EditID($id,$headline,$type,$rooms,$floors,$status,$human,$price){
        if(isset($_POST['update'])){
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
            $query = mysqli_query($link, "UPDATE uy SET headline='$headline',type='$type',rooms=$rooms,floors=$floor,
              status='$status',human=$humans,price=$price,fulladress='$fulladress',photo='$uploadfilebazaga' WHERE id=$id");
            header("location: qidirish.php");
            //echo $query;

            $result = $link->query($query);
            header("location: uylar.php");
        }
    }

}