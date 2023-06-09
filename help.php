<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VeganMall 🌱</title>
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <link rel="stylesheet" type="text/css" href="./styles/help.css">
    <script type="text/javascript" src="./js/help.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <?php include "header.php"; ?>
    </header>
    <section>
        <div id="board_box">
            <h3 id="board_title">고객센터 > 1:1 문의</h3>
            <form name="help_form" method="post" action="help_insert.php" enctype="multipart/form-data">
                <ul id="board_form">
                    <li>
                        <span class="col1">이름 : </span>
                        <span class="col2"><?= $user_name ?></span>
                    </li>
                    <li>
                        <span class="col1">제목 : </span>
                        <span class="col2"><input name="subject" type="text"></span>
                    </li>
                    <li id="text_area">
                        <span class="col1">내용 : </span>
                        <span class="col2">
                            <textarea name="content"></textarea>
                        </span>
                    </li>
                    <li>
                        <span class="col1"> 첨부 파일</span>
                        <span class="col2"><input type="file" name="upload_file"></span>
                    </li>
                </ul>
                <ul class="buttons">
                    <li><button type="button" onclick="check_input()">완료</button></li>
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