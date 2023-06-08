<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>VeganMall 🌱</title>
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <link rel="stylesheet" type="text/css" href="./styles/admin.css">
</head>

<body>
    <header>
        <?php include "header.php"; ?>
    </header>
    <section>
        <div id="admin_box">
            <h3 id="member_title">
                관리자 모드 > 회원 관리
            </h3>
            <ul id="member_list">
                <li>
                    <span class="col1">번호</span>
                    <span class="col2">아이디</span>
                    <span class="col3">이름</span>
                    <span class="col4">등급</span>
                    <span class="col5">가입일</span>
                    <span class="col6">수정</span>
                    <span class="col7">삭제</span>
                </li>
                <?php
                $connect = mysqli_connect("localhost", "user1", "12345", "vegan_mall");
                $sql = "select * from users order by user_id desc";
                $result = mysqli_query($connect, $sql);
                $total_record = mysqli_num_rows($result); // 전체 회원 수

                $number = $total_record;

                while ($row = mysqli_fetch_array($result)) {
                    $user_id = $row["user_id"];
                    $id = $row["username"];
                    $name = $row["name"];
                    $level = $row["level"];
                    $created_at = $row["created_at"];
                ?>

                    <li>
                        <form method="post" action="admin_update_user.php?user_id=<?= $user_id ?>">
                            <span class="col1"><?= $number ?></span>
                            <span class="col2"><?= $id ?></a></span>
                            <span class="col3"><?= $name ?></span>
                            <span class="col4"><input type="text" name="level" value="<?= $level ?>"></span>
                            <span class="col5"><?= $created_at ?></span>
                            <span class="col6"><button type="submit">수정</button></span>
                            <span class="col7"><button type="button" onclick="location.href='admin_delete_user.php?user_id=<?= $user_id ?>'">삭제</button></span>
                        </form>
                    </li>

                <?php
                    $number--;
                }
                ?>
            </ul>
            <h3 id="member_title">
                관리자 모드 > 1:1문의 관리
            </h3>
            <ul id="board_list">
                <li class="title">
                    <span class="col1">선택</span>
                    <span class="col2">번호</span>
                    <span class="col3">이름</span>
                    <span class="col4">제목</span>
                    <span class="col5">첨부파일명</span>
                    <span class="col6">작성일</span>
                </li>
                <form method="post" action="admin_delete_help.php">
                    <?php
                    $sql = "select * from helps order by help_id desc";
                    $result = mysqli_query($connect, $sql);
                    $total_record = mysqli_num_rows($result); // 전체 글의 수

                    $number = $total_record;

                    while ($row = mysqli_fetch_array($result)) {
                        $help_id         = $row["help_id"];
                        $name        = $row["name"];
                        $subject     = $row["subject"];
                        $file_name   = $row["file_name"];
                        $created_at  = $row["created_at"];
                        $created_at  = substr($created_at, 0, 10)
                    ?>
                        <li>
                            <span class="col1"><input type="checkbox" name="item[]" value="<?= $help_id ?>"></span>
                            <span class="col2"><?= $number ?></span>
                            <span class="col3"><?= $name ?></span>
                            <span class="col4"><?= $subject ?></span>
                            <span class="col5"><?= $file_name ?></span>
                            <span class="col6"><?= $created_at ?></span>
                        </li>
                    <?php
                        $number--;
                    }
                    mysqli_close($connect);
                    ?>
                    <button type="submit">선택된 글 삭제</button>
                </form>
            </ul>
        </div>
    </section>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>