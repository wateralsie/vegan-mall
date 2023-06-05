<?php
    $id = $_POST["id"];
    $pw = $_POST["pw"];
    $name = $_POST["name"];
    $email_id = $_POST["email_id"];
    $email_domain = $_POST["email_domain"];

    $email = $email_id."@".$email_domain;
    $created_at = date("Y-m-d H:i");

    $connect = mysqli_connect("localhost", "user1", "12345", "vegan_mall");

    $sql = "insert into users(username, password, name, email, created_at) ";
    $sql .= "values('$id', '$pw', '$name', '$email', '$created_at')";

    mysqli_query($connect, $sql);
    mysqli_close($connect);

    echo "
        <script>
            location.href = 'home.php';
        </script>
    ";
?>