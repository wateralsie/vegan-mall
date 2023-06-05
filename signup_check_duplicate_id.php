<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            h3 {
                padding-left: 5px;
                border-left: solid 5px #edbf07;
            }
            #close {
                margin:20px 0 0 80px;
                cursor:pointer;
            }
        </style>
    </head>
    <body>
        <h3>아이디 중복 체크</h3>
        <p>
            <?php
                $id = $_GET["id"];
                
                // 아이디를 입력하지 않았을 때
                if (!$id) {
                    echo("<li>아이디를 입력해주세요!</li>");
                } else {
                    $connect = mysqli_connect("localhost", "user1", "12345", "vegan_mall");
                    $sql = "select * from users where username='$id'";
                    $result = mysqli_query($connect, $sql);
                    // 값을 가지면 db에 동일한 아이디가 존재
                    $record_num = mysqli_num_rows($result);
                    
                    // 동일한 아이디가 존재할 때
                    if ($record_num) {
                        echo("<li>".$id." 아이디는 중복됩니다</li>");
                        echo("<li>다른 아이디를 사용해주세요!</li>");
                    } else {
                        echo("<li>".$id." 아이디는 사용 가능합니다</li>");
                    }
                    mysqli_close($connect);
                }
            ?>
        </p>
        <div id="close">
            <img src="./img/close.png" onclick="javascript:self.close()">
        </div>
    </body>
</html>
