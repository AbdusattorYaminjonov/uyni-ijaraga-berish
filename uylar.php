<?php
require_once 'top_link.php';
require_once 'database.php';
require_once 'navbar_agent.php';
?>

<div class="uy_qidirish">
    <form method="post">
        <input type="text" name="search">
        <button type="submit" name="submit" >
            qidirish
        </button>
    </form>
</div>
<?php
$qidirish="";
if(isset($_POST['search'])){
    $qidirish=" and headline like '%{$_POST['search']}%' ";
}


?>

<?php
    $link = mysqli_connect("localhost", "root", "")
    or die("Serverga bog'lanmadi : " . mysqli_error($link));
    mysqli_select_db($link, "renthouse") or die("Bazaga bog'lanmadi");
    $query = "SELECT * FROM uy where 1=1".$qidirish;
    $result = mysqli_query($link, $query) or die("So'rov ishlamadi : " . mysqli_error($link));
    echo "<div class='container_uylar'>";
    while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "
                    <div class='postramka'>
                        <div class='post_image'>
                          <img src='{$line['photo']}'>
                        </div>
                        <div class='item'>
                              <h4 >{$line['headline']}</h4>
                              <p>{$line['type_id']}</p>
                              <h5>oyiga :{$line['price']}$</h5>
                              <a href='about.php?id={$line['id']}'>To'liq ma'lumot</a>
                        </div>
                    </div>
        ";

}
    echo "</div>";
mysqli_free_result($result);
mysqli_close($link);
?>
<?php require_once 'button_link.php'?>