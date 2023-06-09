<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VeganMall 🌱</title>
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <link rel="stylesheet" type="text/css" href="./styles/member.css">
        <script type="text/javascript" src="./js/user_modify.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <?php include "header.php";?>
        </header>
    <?php
        // 회원가입 때 입력한 정보 가져오기
        $connect = mysqli_connect("localhost", "user1", "12345", "vegan_mall");
        $sql = "select * from users where username='$user_id'";     // user_id : 세션에 저장된 값
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($result);

        $pw = $row["password"];
        $name = $row["name"];

        $email = explode("@", $row["email"]);
        $email_id = $email[0];
        $email_domain = $email[1];

        mysqli_close($connect);
    ?>
        <section>
            <div id="main_img_bar">
                <img src="./image/main_img.png">
            </div>
            <div id="main_content">
                <div id="join_box">
                <form name="user_form" method="post" action="user_modify.php?id=<?=$user_id?>">
                    <h2>회원 정보수정</h2>
                        <div class="form id">
                            <div class="col1">아이디</div>
                            <div class="col2">
                                <?=$user_id?>
                            </div>                 
                        </div>
                        <div class="form">
                            <div class="col1">비밀번호</div>
                            <div class="col2">
                                <input type="password" name="pw" value="<?=$pw?>">
                            </div>                 
                        </div>
                        <div class="form">
                            <div class="col1">비밀번호 확인</div>
                            <div class="col2">
                                <input type="password" name="pw_confirm" value="<?=$pw?>">
                            </div>                 
                        </div>
                        <div class="form">
                            <div class="col1">이름</div>
                            <div class="col2">
                                <input type="text" name="name" value="<?=$name?>">
                            </div>                 
                        </div>
                        <div class="form email">
                            <div class="col1">이메일</div>
                            <div class="col2">
                                <input type="text" name="email_id" value="<?=$email_id?>">@<input 
                                    type="text" name="email_domain" value="<?=$email_domain?>">
                            </div>                 
                        </div>
                        <div class="bottom_line"> </div>
                        <div class="buttons">
                            <img style="cursor:pointer" src="./image/button_save.gif" onclick="check_input()">&nbsp;
                            <img id="reset_button" style="cursor:pointer" src="./image/button_reset.gif"
                                onclick="reset_form()">
                        </div>
                </form>
                </div> 
            </div>
        </section> 
        <footer>
            <?php include "footer.php";?>
        </footer>
    </body>
</html>