<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VeganMall 🌱</title>
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <link rel="stylesheet" type="text/css" href="./styles/help.css">
    <script type="text/javascript" src="./js/help_modify.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
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
            <h3 id="board_title">
                고객센터 > 1:1 문의 쓰기
            </h3>
            <?php
            $help_id  = $_GET["help_id"];
            $page = $_GET["page"];

            $connect = mysqli_connect("localhost", "user1", "12345", "vegan_mall");
            $sql = "select * from helps where help_id=$help_id";
            $result = mysqli_query($connect, $sql);
            $row = mysqli_fetch_array($result);
            $name       = $row["name"];
            $subject    = $row["subject"];
            $content    = $row["content"];
            $file_name  = $row["file_name"];
            ?>
            <form name="help_form" method="post" action="help_modify.php?help_id=<?= $help_id ?>&page=<?= $page ?>" enctype="multipart/form-data">
                <ul id="board_form">
                    <li>
                        <span class="col1">이름 : </span>
                        <span class="col2"><?= $name ?></span>
                    </li>
                    <li>
                        <span class="col1">제목 : </span>
                        <span class="col2"><input name="subject" type="text" value="<?= $subject ?>"></span>
                    </li>
                    <li id="text_area">
                        <span class="col1">내용 : </span>
                        <span class="col2">
                            <textarea name="content"><?= $content ?></textarea>
                        </span>
                    </li>
                    <li>
                        <span class="col1"> 첨부 파일 : </span>
                        <span class="col2"><?= $file_name ?></span>
                    </li>
                </ul>
                <ul class="buttons">
                    <li><button type="button" onclick="check_input()">수정하기</button></li>
                    <li><button type="button" onclick="location.href='help_list.php'">목록</button></li>
                </ul>
            </form>
        </div>
    </section>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>