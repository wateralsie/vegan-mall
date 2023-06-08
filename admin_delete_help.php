<?php
    session_start();
    if (isset($_SESSION["user_level"])) $user_level = $_SESSION["user_level"];
    else $user_level = "";

    if ( $user_level != 9 ) {
        echo("
                <script>
                    alert('관리자가 아닙니다! 1:1 문의 삭제는 관리자만 가능합니다!');
                    history.go(-1)
                </script>
        ");
        exit;
    }

    if (isset($_POST["item"]))
        $num_item = count($_POST["item"]); 
    else
        echo("
                <script>
                    alert('삭제할 게시글을 선택해주세요!');
                    history.go(-1)
                </script>
        ");

    $connect = mysqli_connect("localhost", "user1", "12345", "vegan_mall");

    for($i=0; $i<count($_POST["item"]); $i++){
        $help_id = $_POST["item"][$i];

        $sql = "select * from helps where help_id = $help_id";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($result);

        $copied_name = $row["file_copied"];

        // 첨부파일이 존재할 때 unlink()로 파일 삭제
        if ($copied_name) {
            $file_path = "./data/".$copied_name;
            unlink($file_path);
        }

        $sql = "delete from helps where help_id = $help_id";
        mysqli_query($connect, $sql);
    }       

    mysqli_close($connect);

    echo "
	     <script>
	         location.href = 'admin.php';
	     </script>
	   ";
?>