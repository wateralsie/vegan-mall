<?php
    $id = $_POST["id"];
    $pw = $_POST["pw"];

    $connect = mysqli_connect("localhost", "user1", "12345", "vegan_mall");
    $sql = "select * from users where username='$id'";
    $result = mysqli_query($connect, $sql);

    $is_existing_id = mysqli_num_rows($result);

    if(!$is_existing_id) {
        // 경고창 띄우고 로그인 페이지로 돌아감
        echo("
            <script>
                window.alert('등록되지 않은 아이디입니다!')
                history.go(-1)
            </script>
        ");
    } else {
        $row = mysqli_fetch_array($result);
        $db_pw = $row["password"];

        mysqli_close($connect);

        // 등록된 비밀번호와 다르게 입력했을 때
        if ($pw != $db_pw) {
            echo("
                <script>
                    window.alert('비밀번호가 다릅니다!')
                    history.go(-1)
                </script>
            ");
            exit;
        // 로그인 성공
        } else {
            session_start();
            $_SESSION["user_id"] = $row["username"];
            $_SESSION["user_name"] = $row["name"];
            $_SESSION["user_level"] = $row["level"];

            echo("
                <script>
                    location.href = 'home.php';
                </script>
            ");
        }
    }
?>