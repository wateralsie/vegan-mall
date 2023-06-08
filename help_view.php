<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>VeganMall 🌱</title>
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <link rel="stylesheet" type="text/css" href="./styles/help.css">
</head>

<body>
    <header>
        <?php include "header.php"; ?>
    </header>
    <section>
        <div id="main_img_bar">
            <img src="./image/main_img.png">
        </div>
        <div id="board_box">
            <h3 class="title">
                고객센터 > 내용보기
            </h3>
            <?php
            $help_id  = $_GET["help_id"];
            $page  = $_GET["page"];

            $connect = mysqli_connect("localhost", "user1", "12345", "vegan_mall");
            $sql = "select * from helps where help_id=$help_id";
            $result = mysqli_query($connect, $sql);

            $row = mysqli_fetch_array($result);
            $id      = $row["username"];
            $name      = $row["name"];
            $created_at = $row["created_at"];
            $subject    = $row["subject"];
            $content    = $row["content"];
            $file_name    = $row["file_name"];
            $file_type    = $row["file_type"];
            $file_copied  = $row["file_copied"];

            $content = str_replace(" ", "&nbsp;", $content);
            $content = str_replace("\n", "<br>", $content);

            mysqli_query($connect, $sql);
            ?>
            <ul id="view_content">
                <li>
                    <span class="col1"><b>제목 :</b> <?= $subject ?></span>
                    <span class="col2"><?= $name ?> | <?= $created_at ?></span>
                </li>
                <li>
                    <?php
                    if ($file_name) {
                        $real_name = $file_copied;
                        $file_path = "./data/".$real_name;
                        $file_size = filesize($file_path);

                        echo "▷ 첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
			       		<a href='help_download.php?help_id=$help_id&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a><br><br>";
                    }
                    ?>
                    <?= $content ?>
                </li>
            </ul>
            <ul class="buttons">
                <li><button onclick="location.href='help_list.php?page=<?= $page ?>'">목록</button></li>
                <!-- 본인이 쓴 글일 때만 수정, 삭제 버튼이 뜨도록 -->
                <?php
                if ($id == $user_id) {
                ?>
                <li><button onclick="location.href='help_modify_content.php?help_id=<?= $help_id ?>&page=<?= $page ?>'">수정</button></li>
                <li><button onclick="location.href='help_delete.php?help_id=<?= $help_id ?>&page=<?= $page ?>'">삭제</button></li>
                <?php
                }
                ?>
            </ul>
        </div> <!-- board_box -->
    </section>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>