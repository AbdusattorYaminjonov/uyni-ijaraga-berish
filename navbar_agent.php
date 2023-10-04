<?php
session_start();
?>
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">

    <div class="container">
        <a class="navbar-brand text-brand" href="#">Rent<span class="color-b">House</span></a>

        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link " href="uylar.php">Uylar</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="addpost.php">Yangi uy qo'shish</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="agent_add.php">Agent qo'shish</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="new_message.php">Habarlar</a>
                </li>
            </ul>
        </div>
        <div class="agent_icon">
            <a href="agent.php">
                <?php
                echo "
                <img src='{$_SESSION['photo']}'>";
                ?>
            </a>
        </div>
        <div class="exit_icon">
            <a href="logout.php">
                <img src="/assets/logo/exit.png">
            </a>
        </div>
    </div>

</nav>