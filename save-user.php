<?php

switch ($_REQUEST["action"]) {
    case "register":
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $birthdate = $_POST["birthdate"];

        $sql = "INSERT INTO users (name, email, password, birthdate) VALUES ('$name', '$email', '$password', '$birthdate')";
        $res = $conn->query($sql);

        if ($res === true) {
            echo "<script>alert('User successfully registered!'); window.location.href = '?page=list';</script>";
        } else {
            echo "<script>alert('Some problem occurred. Try again.'); window.location.href = 'index.php';</script>";
        }
        break;
    case "edit":
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $birthdate = $_POST["birthdate"];

        $sql = "UPDATE users SET name = '$name', email = '$email', password = '$password', birthdate = '$birthdate' WHERE id =" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res === true) {
            echo "<script>alert('User successfully edited!'); window.location.href = '?page=list';</script>";
        } else {
            echo "<script>alert('Some problem occurred. Try again.'); window.location.href = 'index.php';</script>";
        }
        break;
    case "delete":
        $sql = "DELETE FROM users WHERE id =" . $_REQUEST["id"];
        $res = $conn->query($sql);

        if ($res === true) {
            echo "<script>alert('User successfully deleted!'); window.location.href = '?page=list';</script>";
        } else {
            echo "<script>alert('Some problem occurred. Try again.'); window.location.href = 'index.php';</script>";
        }
        break;
};
