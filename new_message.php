<?php
require_once 'database.php';
require_once 'top_link.php';
require_once 'navbar_agent.php';



$query = "SELECT * FROM message";
$result = mysqli_query($link, $query) or die("So'rov ishlamadi : " . mysqli_error($link));
echo "<div class='container_habarlar'>";
    while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "
        <div class='postramka'>
            <div class='item1'>
                <p>Yuboruvchi :</p>
                <h4 >{$line['gmail']}</h4><br>
                <p>Habar matni:</p>
                <h5>{$line['message']}</h5><br>
                <a href='delete_message.php?id={$line['id']}'>o'chirish</a>
            </div>
        </div>
    ";
    }
echo "</div>";
mysqli_free_result($result);
mysqli_close($link);
require_once 'button_link.php';
?>


