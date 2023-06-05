<?php
    session_start();
    // 세션 변수에 값 있는지 확인
    if (isset($_SESSION["user_id"])) $user_id = $_SESSION["user_id"];
    else $user_id = "";
    if (isset($_SESSION["user_name"])) $user_name = $_SESSION["user_name"];
    else $user_name = "";
?>

<div id="top">
    <h3>
        <a href="home.php"><img src="./image/logo.png" width="120px"></a>
    </h3>
    <ul id="top_menu">
<?php
    // 로그인이 되지 않았으면 '회원가입, 로그인'
    if (!$user_id) {
?>
        <li><a href="signup.php">회원가입</a></li>
        <li> | </li>
        <li><a href="login.php">로그인</a></li>
<?php
    } else {
        $is_logged_in = $user_name."(".$user_id.") 님 환영합니다!";
?>
        <li><?=$is_logged_in?></li>
        <li> | </li>
        <li><a href="login_logout.php">로그아웃</a></li>
        <li> | </li>
        <li><a href="user_modify_info.php">정보수정</a></li>
<?php
    }
?>
<?php
    // TODO: 관리자 모드 추가
?>
    </ul>
</div>
<div id="menu_bar">
    <ul>
        <!-- TODO: 메뉴 구성 -->
    </ul>
</div>