<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VeganMall 🌱</title>
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <link rel="stylesheet" type="text/css" href="./styles/signup.css">
        <script type="text/javascript" src="./js/signup.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <body>
            <header>
                <?php include "header.php"; ?>
            </header>
            <section>
                <div id="main_img_bar">
                    <img src="./image/main_img.png">
                </div>
                <div id="main_content">
                    <div id="join_box">
                    <form name="signup" action="signup_insert_user.php" method="post">
                        <h2>회원가입</h2>

                        <!-- 아이디 -->
                        <div class="form id">
                            <div class="col1">아이디</div>
                            <div class="col2">
                                <input type="text" name="id">
                            </div>
                            <div class="col3">
                                <a href="#"><img src="./image/check_id.gif" onclick="check_duplicate_id()"></a>
                            </div>
                        </div>

                        <!-- 비밀번호 -->
                        <div class="form">
                            <div class="col1">비밀번호</div>
                            <div class="col2">
                                <input type="password" name="pw">
                            </div>
                        </div>

                        <!-- 비밀번호 확인 -->
                        <div class="form">
                            <div class="col1">비밀번호 확인</div>
                            <div class="col2">
                                <input type="password" name="pw_confirm">
                            </div>
                        </div>

                        <!-- 이름 -->
                        <div class="form">
                            <div class="col1">이름</div>
                            <div class="col2">
                                <input type="text" name="name">
                            </div>
                        </div>

                        <!-- 이메일 -->
                        <div class="form email">
                            <div class="col1">이메일</div>
                            <div class="col2">
                                <input type="text" name="email_id">@<input type="text" name="email_domain">
                            </div>
                        </div>

                        <div class="bottom_line"></div>

                        <!-- 확인, 취소 버튼 -->
                        <div class="buttons">
                            <img style="cursor:pointer" onclick="check_input()" src="./image/button_save.gif">&nbsp;
                            <img style="cursor:pointer" onclick="reset_form()" src="./image/button_reset.gif">
                        </div>

                    </form>
                    </div>
                </div>
            </section>
            <footer>
                <?php include "footer.php"; ?>
            </footer>
        </body>
    </head>
</html>