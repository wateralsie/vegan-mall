<?php
    session_start();
    if (isset($_SESSION["user_level"])) $user_level = $_SESSION["user_level"];
    else $user_level = "";

    if ( $user_level != 9 ) {
        echo("
            <script>
                alert('관리자가 아닙니다! 회원정보 수정은 관리자만 가능합니다!');
                history.go(-1)
            </script>
        ");
        exit;
    }

    $user_id = $_GET["user_id"];
    $level = $_POST["level"];

    $connect = mysqli_connect("localhost", "user1", "12345", "vegan_mall");
    $sql = "update users set level=$level where user_id=$user_id";
    mysqli_query($connect, $sql);

    mysqli_close($connect);

    echo "
	     <script>
	         location.href = 'admin.php';
	     </script>
	   ";
?>