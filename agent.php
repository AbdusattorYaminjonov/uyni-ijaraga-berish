<?php
require_once 'top_link.php';
require_once 'database.php';
require_once 'navbar_agent.php';

if (isset($_SESSION['id'])) {
    $id=$_SESSION['id'];
    $result = mysqli_query($link, "SELECT * FROM agent WHERE id=$id");
    echo "<div class='search_bolim'>";
    while ($request = mysqli_fetch_array($result)) {
        echo "
            <div class='p_r'>
                <div class='agent_img'>
                    <img src='{$request['photo']}'>
                </div>
                <div class='agent_data'>
                    <div>
                        <p>To'liq ism</p>
                        <h4>{$request['full_name']}</h4>
                    </div>
                    <div>
                        <p>Login name</p>
                        <h5>{$request['user_name']}</h5>
                    </div>
                    <div>
                        <p>Phone number</p>
                        <h5>{$request['phone']}</h5>
                    </div>
                </div>
                <div class='contact_agent'>
                        <div>
                            <a href='edit.php?id={$request['id']}'>
                                <img src='assets/image/icons8_edit.ico'>
                            </a>
                        </div>
                        <div>
                            <a href='delete.php?id={$request['id']}'>
                                <img src='assets/image/icons8_trash.ico'>
                            </a>
                        </div>
                    </div>
            </div>
        ";
    }
    echo "</div>";
}
?>