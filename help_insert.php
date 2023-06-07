<meta charset="utf-8">
<?php
    date_default_timezone_set('Asia/Seoul');

    session_start();
    if (isset($_SESSION["user_id"])) $user_id = $_SESSION["user_id"];
    else $user_id = "";
    if (isset($_SESSION["user_name"])) $user_name = $_SESSION["user_name"];
    else $user_name = "";

    if (!$user_id) {
        echo ("
                <script>
                    alert('게시판 글쓰기는 로그인 후 이용해 주세요!');
                    history.go(-1)
                </script>
            ");
        exit;
    }

    $subject = $_POST["subject"];
    $content = $_POST["content"];

    // htmlspecialchars : <, >, ', ", & 를 html 요소로 변경
    $subject = htmlspecialchars($subject, ENT_QUOTES);
    $content = htmlspecialchars($content, ENT_QUOTES);

    // 현재의 '년-월-일-시-분'을 저장
    $created_at = date("Y-m-d H:i");  

    $upload_dir = './data/';

    $upload_file_name     = $_FILES["upload_file"]["name"];
    // 실제 서버에 저장되는 임시 파일명
    $upload_file_tmp_name = $_FILES["upload_file"]["tmp_name"];
    $upload_file_type     = $_FILES["upload_file"]["type"];
    $upload_file_size     = $_FILES["upload_file"]["size"];
    // 업로드 시 발생하는 오류 정보
    $upload_file_error    = $_FILES["upload_file"]["error"];

    if ($upload_file_name && !$upload_file_error) {
        // 파일명과 확장자 분리
        $file = explode(".", $upload_file_name);
        $file_name = $file[0];
        $file_ext  = $file[1];

        $new_file_name = date("Y_m_d_H_i_s");
        $new_file_name = $new_file_name;
        $copied_file_name = $new_file_name .".". $file_ext;
        $uploaded_file = $upload_dir.$copied_file_name;

        if ($upload_file_size > 1000000) {
            echo ("
                    <script>
                        alert('업로드 파일 크기가 지정된 용량(1MB)을 초과합니다!<br>파일 크기를 체크해주세요!');
                        history.go(-1)
                    </script>
                ");
            exit;
        }

        // 업로드된 파일을 ./data 폴더에 저장
        // 오류가 발생하면 경고창 띄우고 이전 페이지로 이동
        if (!move_uploaded_file($upload_file_tmp_name, $uploaded_file)) {
            echo ("
                    <script>
                        alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
                        history.go(-1)
                    </script>
                ");
            exit;
        }
    } else {
        $upload_file_name = "";
        $upload_file_type = "";
        $copied_file_name = "";
    }

    $connect = mysqli_connect("localhost", "user1", "12345", "vegan_mall");

    $sql = "insert into helps (username, name, subject, content, created_at, file_name, file_type, file_copied) ";
    $sql .= "values('$user_id', '$user_name', '$subject', '$content', '$created_at', ";
    $sql .= "'$upload_file_name', '$upload_file_type', '$copied_file_name')";
    mysqli_query($connect, $sql);

    mysqli_close($connect);

    echo ("
            <script>
                location.href = 'help_list.php';
            </script>
        ");
?>