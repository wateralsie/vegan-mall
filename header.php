<?php
    session_start();
    // 세션 변수에 값 있는지 확인
    if (isset($_SESSION["user_id"])) $user_id = $_SESSION["user_id"];
    else $user_id = "";
    if (isset($_SESSION["user_name"])) $user_name = $_SESSION["user_name"];
    else $user_name = "";
    if (isset($_SESSION["user_level"])) $user_level = $_SESSION["user_level"];
    else $user_level = "";
?>

<div id="top">
    <h3>
        <a href="home.php"><img src="./image/logo.png" width="150px"></a>
        <img src="./image/search_bar.png" >
    </h3>
    <div id="menu"> 
        <img src="./image/shopping_bag.png" width="28px">
        <img src="./image/user.png" width="24px">
    </div>
</div>

<div id="nav_bar">
    <ul id="category">
        <li><img src="./image/category.png"></li>
        <li>카테고리</li>
    </ul>
    <ul id="sale_menu">
        <li>이벤트</li>
        <li>특가</li>
        <li>신상</li>
        <li>쿠폰/멤버십</li>                           
    </ul>
    <ul id="user_menu">
<?php
    // 로그인이 되지 않았으면 '회원가입, 로그인'
    if (!$user_id) {
?>
        <li><a href="login.php">로그인</a></li>
        <li><a href="signup.php">회원가입</a></li>
<?php
    } else {
        $is_logged_in = $user_name."(".$user_id.") 님";
?>
        <li><a href="login_logout.php">로그아웃</a></li>
        <li><a href="user_modify_info.php">정보수정</a></li>
<?php
    }
?>
        <li><a href="help_list.php">고객센터</a></li>
<?php
    if ($user_level == 9) {
?>
        <li><a href="admin.php">관리자 모드</a></li>
<?php
    }
?>
    </ul>
</div>