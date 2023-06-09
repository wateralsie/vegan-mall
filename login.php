<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VeganMall 🌱</title>
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <link rel="stylesheet" type="text/css" href="./styles/login.css">
        <script type="text/javascript" src="./js/login.js"></script>
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
            <div id="main_content">
                <div id="login_box">
                    <div id="login_title">
                        <span>로그인</span>
                    </div>
                    <div id="login_form">
                        <form name="login" action="login_execute.php" method="post">
                            <ul>
                                <li><input type="text" name="id" placeholder="아이디"></li>
                                <li><input type="password" name="pw" placeholder="비밀번호"></li>
                            </ul>
                            <div id="login_btn">
                                <a href="#"><img src="./image/login.png" onclick="check_input()"></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <?php include "footer.php"; ?>
        </footer>
    </body>
</html>