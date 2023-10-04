<?php
session_start();
include_once "./login.php";
include_once 'database.php';
    if (isset($_POST['user_name']) && isset($_POST['password'])) {
        function validate($data)
        {
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $user = validate($_POST['user_name']);
        $password = validate($_POST['password']);
        if (empty($user)) {
            header("Location : error_login.php");
            exit();
        } else if (empty($password)) {
            header("Location : error_login.php");
            exit();
        } else {
            $query = "SELECT * FROM agent WHERE user_name = '$user' and password = '$password'";
            $result = mysqli_query($link, $query);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['user_name'] === $user && $row['password'] === $password) {
                    $_SESSION['full_name'] = $row['full_name'];
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['photo'] = $row['photo'];
                    $_SESSION['phone'] = $row['phone'];
                    $_SESSION['id'] = $row['id'];
                    header("Location:index_agent.php");
                    exit();
                } else {
                    header("Location :error_login.php");
                    exit();
                }
            } else {
                header("Location :  error_login.php");
                exit();
            }
        }

    } else {
        header("Location :error_login.php");
        exit();
    }
?>